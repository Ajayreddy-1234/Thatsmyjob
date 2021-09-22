<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Candidate;
use App\Application;
use App\Timetracker;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home');
    }

    public function addfreelancer(){
        $typeuser="Freelancer";
        $user_type=3;
        return view('admin.users.add',compact(['typeuser','user_type']));
    }
    public function addrecruiter(){
        $typeuser="Recruiter";
        $user_type=2;
        return view('admin.users.add',compact(['typeuser','user_type']));
    }
    public function addinguser(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:12'
            ]
        );
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->user_type=$request->user_type;
        $user->save();
        if($request->user_type==3){
            return redirect('/admin/viewfreelancers')->with('status','Successfuly added the Freelancer');
        }else{
            return redirect('/admin/viewrecruiters')->with('status','Successfuly added the Recruiter');
        }
        
    }
    public function viewfreelancers(){
        $typeuser="Freelancers";
        $users=User::all()->where('user_type',3);
        return view('admin.users.view',compact(['users','typeuser']));
    }
    public function viewrecruiters(){
        $typeuser="Recruiters";
        $users=User::all()->where('user_type',2);
        return view('admin.users.view',compact(['users','typeuser']));
    }
    public function deletinguser($id){
        $user=User::find($id);
        $userx=$user;
        if(!$user){
            return redirect('/admin/home');
        }
        $user->delete();
        if($userx->user_type==3){
            return redirect('/admin/viewfreelancers')->with('status','Successfuly Deleted the Freelancer');
        }else{
            return redirect('/admin/viewrecruiters')->with('status','Successfuly Deleted the Recruiter');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recruiterHome()
    {

        return view('recruiter.home');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function freelancerHome()
    {
        return view('freelancer.home');
    }
    public function freelancerjobs(){

         $jobs=Job::all()->where("is_live","yes");
         return view('freelancer.jobs.all',compact(['jobs']));
    }
    // public function freelancerparticularjob($id){
    //      $job=Job::find($id);
    //      if(!$job){
    //          return redirect('/freelancer/home');
    //      }
    //      return view('freelancer.jobs.view',compact(['job']));
    // }
    public function freelanceralljobs(){

        $jobs=Job::all()->where('is_live',"no");
        return view('freelancer.jobs.all',compact(['jobs']));
   }
   public function jobsapply($id){
         $job=Job::find($id);
         $counter=0;
         if(!$job){
             return redirect('/freelancer/home');
         }
         $authid=Auth::id();
         $candidates=Candidate::all()->where('added_by',$authid);
         $applications=Application::all()->where('job_id',$id)->where('user_id',$authid);
         
         foreach($candidates as $candidate){
             
             $c=$applications->where('candidate_id',$candidate->id)->first();
             
             if($c){
                 $candidate->id=-1;
             }
             
         }
         
         return view('freelancer.jobs.apply',compact(['job','candidates','counter']));
   }
   public function applicationstore(Request $request)
  {
    $candidates=$request->candidate;
    foreach($candidates as $candidateid){
       $app = new Application;
       $app->user_id=Auth::id();
       $app->candidate_id=$candidateid;
       $app->job_id=$request->jobid;
       $app->job_status="pending";
       $app->save();
    }
    return redirect('/freelancer/application/new')->with("status","Successfully applied to the job");
   }
   public function jobstatus($id){
    $authid=Auth::id();
    $job=Job::find($id);
         if(!$job){
             return redirect('/freelancer/home');
         }
    $applications=Application::all()->where('job_id',$id)->where('user_id',$authid);
    foreach($applications as $application){
        $cd=$application->candidate_id;
        $candid=Candidate::find($cd);
        $application['name']=$candid->name;
        $application['experience']=$candid->experience;
        $application['skills']=$candid->skills;
        $application['expected_salary']=$candid->expected_salary;

    }
    return view('freelancer.jobs.status',compact(['applications','job']));
   }
   public function freelancerselected($id){
    $authid=Auth::id();
      $job=Job::find($id);
      if(!$job){
          return redirect('/freelancer/home');
      }
      $applications=Application::all()->where('user_id',$authid)->where('job_id',$id)->where('job_status',"selected");
      foreach($applications as $application){
        $cd=$application->candidate_id;
        $candid=Candidate::find($cd);
        $application['name']=$candid->name;
        $application['experience']=$candid->experience;
        $application['skills']=$candid->skills;
        $application['expected_salary']=$candid->expected_salary;

    }
    $job=Job::find($id);
    return view('freelancer.jobs.status',compact(['applications','job']));


   }
   public function freelancernotselected($id){
    $job=Job::find($id);
    if(!$job){
        return redirect('/freelancer/home');
    }
    $authid=Auth::id();
    $applications=Application::all()->where('user_id',$authid)->where('job_id',$id)->where('job_status',"notselected");
      foreach($applications as $application){
        $cd=$application->candidate_id;
        $candid=Candidate::find($cd);
        $application['name']=$candid->name;
        $application['experience']=$candid->experience;
        $application['skills']=$candid->skills;
        $application['expected_salary']=$candid->expected_salary;

    }
    $job=Job::find($id);
    return view('freelancer.jobs.status',compact(['applications','job']));

   }
   public function getjsvalue(Request $request){
       $authid=Auth::id();
       if(!((($request->time)/1000)>=86400))
       {
         $userlog=Timetracker::all()->where('user_id',$authid)->where('created_at','>=',Carbon::today())->first();
       if(!$userlog)
       {
        $timex=new Timetracker;
        $timex->user_id=$authid;
        $timex->time=($request->time)/1000;
        $timex->save();
        $pastlogs=Timetracker::all()->where('user_id',$authid)->where('created_at','<',Carbon::today()->subDays(7));
        $pastlogs1=$pastlogs->first();
        if($pastlogs1)
        {
            foreach($pastlogs as $pastlog){
                $pastid=$pastlog->id;
                $pr=Timetracker::find($pastid);
                $pr->delete();
            }
        }
       }else{
           $userlog->time=$userlog->time+($request->time)/1000;
           $userlog->save();
       }
    }
   }
   public function trackactivity($id){

       $activities=Timetracker::all()->where('user_id',$id)->sortByDesc("created_at");
       $user=User::find($id);
       $typeuser=null;
       if($user->user_type==3){
           $typeuser="Freelancer";
       }else{
           $typeuser="Recruiter";
       }
       foreach($activities as $activity){
           $txt="";
           $hours=(int)(($activity->time)/3600);
           $minutes=(int)(($activity->time)/60)-($hours*60);
           if($hours){
             if($hours==1){
               $txt=$hours." hr ";
             }else{
                $txt=$hours." hrs ";
             }
           }
           if($minutes){
               $txt=$txt.$minutes." min";
           }
           if(!$minutes&&!$hours){
               $txt=$txt."0 min";
           }
           $activity['txt']=$txt;
           $activity['date']=$activity->created_at->toDateString();
       }
       return view('admin.users.trackactivity',compact(['activities','typeuser','user']));

   }
   public function myactivity(){
    $id=Auth::id();
    $activities=Timetracker::all()->where('user_id',$id)->sortByDesc("created_at");
    $user=User::find($id);
    $typeuser=null;
    if($user->user_type==3){
        $typeuser="Freelancer";
    }else{
        $typeuser="Recruiter";
    }
    foreach($activities as $activity){
        $txt="";
        $hours=(int)(($activity->time)/3600);
        $minutes=(int)(($activity->time)/60)-($hours*60);
        if($hours){
          if($hours==1){
            $txt=$hours." hr ";
          }else{
             $txt=$hours." hrs ";
          }
        }
        if($minutes){
            $txt=$txt.$minutes." min";
        }
        if(!$minutes&&!$hours){
            $txt=$txt."0 min";
        }
        $activity['txt']=$txt;
        $activity['date']=$activity->created_at->toDateString();
    }
    if($user->user_type==3){
        return view('freelancer.trackactivity',compact(['activities','typeuser','user']));
    }else{
        return view('recruiter.trackactivity',compact(['activities','typeuser','user']));
    }
    

}
}
