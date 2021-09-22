<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\Application;
use App\Candidate;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {  $authid=Auth::id();
       $jobs=Job::all()->where('added_by',$authid);
       return view('recruiter.job.all',compact(['jobs']));
    }

    public function create()
    {
        return view('recruiter.job.add');
    }
    public function store(Request $request)
    {
        $job= new Job;
        $job->name=$request->name;
        $job->description=$request->description;
        $job->companyname=$request->companyname;
        $job->location=$request->location;
        $job->phonenumber=$request->phonenumber;
        $job->email=$request->email;
        $job->qualification=$request->qualification;
        $job->salary=$request->salary;
        $job->languages=$request->languages;
        $job->skills=$request->skills;
        $job->experience=$request->experience;
        $job->added_by=Auth::id();
        $job->save();
        return redirect('/recruiter/jobs/all')->with("status","Successfully added the Job");

    }

    public function show($id)
    {   $authid=Auth::id();
        $job=Job::find($id);
        if(!$job||$job->added_by!=$authid){
            return redirect('/recruiter/home');
        }
        return view("recruiter.job.view",compact(['job']));
    }

    public function edit($id)
    {   $authid=Auth::id();
        $job=Job::find($id);
        if(!$job||$job->added_by!=$authid){
            return redirect('/recruiter/home');
        }
        return view("recruiter.job.edit",compact(['job']));
    }

    public function update(Request $request, $id)
    {
        $job=Job::find($id);
        $job->name=$request->name;
        $job->description=$request->description;
        $job->companyname=$request->companyname;
        $job->location=$request->location;
        $job->phonenumber=$request->phonenumber;
        $job->email=$request->email;
        $job->qualification=$request->qualification;
        $job->salary=$request->salary;
        $job->languages=$request->languages;
        $job->skills=$request->skills;
        $job->experience=$request->experience;
        $job->save();
        return redirect('/recruiter/jobs/all')->with("status","Successfully Updated the Job");
    }

    public function destroy($id)
    {   $authid=Auth::id();
        $job=Job::find($id);
        if(!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
        $job->delete();
        return redirect("/recruiter/jobs/all")->with("status","Successfully Removed the Job");
    }
    public function liveit($id)
    {   $authid=Auth::id();
        $job=Job::find($id);
        if(!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
        if($job->is_live=="yes"){
            $job->is_live="no";
            $job->save();
        return redirect("/recruiter/jobs/all")->with("status","Successfully made it Not live");
        }else{
            $job->is_live="yes";
            $job->save();
        return redirect("/recruiter/jobs/all")->with("status","Successfully made it live");
        }
        
    }
   public function jobcandidates(){
       $authid=Auth::id();
       $jobs=Job::all()->where('added_by',$authid);
       return view('recruiter.job.jobcandidate',compact(['jobs']));
   }
   public function candidatesofjob($id){
       $authid=Auth::id();
       $job=Job::find($id);
       if(!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
       $applications=Application::all()->where('job_id',$id);
       foreach($applications as $application){
        $cd=$application->candidate_id;
        $candid=Candidate::find($cd);
        $application['candidateid']=$cd;
        $application['name']=$candid->name;
        $application['experience']=$candid->experience;
        $application['skills']=$candid->skills;
        $application['expected_salary']=$candid->expected_salary;
    }
    return view('recruiter.job.candidatesofjob',compact(['applications']));

   }
   public function candidateselection($id){
       $app=Application::find($id);
       $job=Job::find($app->job_id);
       $authid=Auth::id();
       if(!$app||!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
       $app->job_status="selected";
       $app->save();
       return redirect('/recruiter/jobs/candidates/'.$app->job_id);
   }
   public function candidatenotselection($id){
    $app=Application::find($id);
    $job=Job::find($app->job_id);
       $authid=Auth::id();
       if(!$app||!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
    $app->job_status="notselected";
    $app->save();
    return redirect('/recruiter/jobs/candidates/'.$app->job_id);

   }
   public function candidateview($id,$appid){
       $candidate=Candidate::find($id);
       $app=Application::find($appid);
       $authid=Auth::id();
       $job=Job::find($app->job_id);

       if(!$app||!$candidate||$app->candidate_id!=$id||$job->added_by!=$authid){return redirect('/recruiter/home');}
       return view('recruiter.job.viewcandidate',compact(['candidate','appid']));

   }
   public function candidatepending($id){
    $app=Application::find($id);
    $job=Job::find($app->job_id);
       $authid=Auth::id();
       if(!$app||!$job||$job->added_by!=$authid){return redirect('/recruiter/home');}
    $app->job_status="pending";
    $app->save();
    return redirect('/recruiter/jobs/candidates/'.$app->job_id);
   }

    #Freelancer

    // public function freelancerall()
    // {
    //    $jobs=Job::all()->where;
    //    return view('freelancer.jobs.all',compact('jobs'));
    // }


}
