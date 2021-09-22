<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_id = Auth::id();
        $candidates = Candidate::all()->where('added_by',$auth_id);
        return view('freelancer.candidate.all', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:candidates',
            ]
        );
        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone_number = $request->phone_number;
        $candidate->location = $request->location;
        $candidate->date_of_birth = $request->date_of_birth;
        $candidate->gender = $request->gender;
        $candidate->job_interest = $request->job_interest;
        $candidate->tenth_percentage = $request->tenth_percentage;
        $candidate->tenth_school = $request->tenth_school;
        $candidate->tenth_passing_year = $request->tenth_passing_year;
        $candidate->twelfth_stream = $request->twelfth_stream;
        $candidate->twelfth_percentage = $request->twelfth_percentage;
        $candidate->twelfth_school =$request->twelfth_school;
        $candidate->twelfth_passing_year = $request->twelfth_passing_year;
        $candidate->diploma_name = $request->diploma_name;
        $candidate->diploma_percentage = $request->diploma_percentage;
        $candidate->diploma_school = $request->diploma_school;
        $candidate->diploma_passing_year = $request->diploma_passing_year;
        $candidate->ug_name = $request->ug_name;
        $candidate->ug_percentage = $request->ug_percentage;
        $candidate->ug_college = $request->ug_college;
        $candidate->ug_passing_year = $request->ug_passing_year;
        $candidate->pg_name = $request->pg_name;
        $candidate->pg_percentage = $request->pg_percentage;
        $candidate->pg_college = $request->pg_college;
        $candidate->pg_passing_year = $request->pg_passing_year;
        $candidate->doctorate_name = $request->doctorate_name;
        $candidate->doctorate_percentage = $request->doctorate_percentage;
        $candidate->doctorate_college = $request->doctorate_college;
        $candidate->doctorate_passing_year = $request->doctorate_passing_year;
        $candidate->other_education = $request->other_education;
        $candidate->experience = $request->experience;
        $candidate->current_salary = $request->current_salary;
        $candidate->expected_salary = $request->expected_salary;
        $candidate->notice_period = $request->notice_period;
        $candidate->job_role_preference = $request->job_role_preference;
        $candidate->languages = $request->languages;
        $candidate->skills = $request->skills;
        $candidate->added_by = Auth::id();
        $candidate->save();
        return redirect('/freelancer/candidate')->with('status',"Successfully added a candidate");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    // public function show(Candidate $candidate)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candid=Candidate::find($id);
        if(!$candid){return redirect('/freelancer/home');}
        return view('freelancer.candidate.edit',compact(['candid']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidate=Candidate::find($id);
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone_number = $request->phone_number;
        $candidate->location = $request->location;
        $candidate->date_of_birth = $request->date_of_birth;
        $candidate->gender = $request->gender;
        $candidate->job_interest = $request->job_interest;
        $candidate->tenth_percentage = $request->tenth_percentage;
        $candidate->tenth_school = $request->tenth_school;
        $candidate->tenth_passing_year = $request->tenth_passing_year;
        $candidate->twelfth_stream = $request->twelfth_stream;
        $candidate->twelfth_percentage = $request->twelfth_percentage;
        $candidate->twelfth_school =$request->twelfth_school;
        $candidate->twelfth_passing_year = $request->twelfth_passing_year;
        $candidate->diploma_name = $request->diploma_name;
        $candidate->diploma_percentage = $request->diploma_percentage;
        $candidate->diploma_school = $request->diploma_school;
        $candidate->diploma_passing_year = $request->diploma_passing_year;
        $candidate->ug_name = $request->ug_name;
        $candidate->ug_percentage = $request->ug_percentage;
        $candidate->ug_college = $request->ug_college;
        $candidate->ug_passing_year = $request->ug_passing_year;
        $candidate->pg_name = $request->pg_name;
        $candidate->pg_percentage = $request->pg_percentage;
        $candidate->pg_college = $request->pg_college;
        $candidate->pg_passing_year = $request->pg_passing_year;
        $candidate->doctorate_name = $request->doctorate_name;
        $candidate->doctorate_percentage = $request->doctorate_percentage;
        $candidate->doctorate_college = $request->doctorate_college;
        $candidate->doctorate_passing_year = $request->doctorate_passing_year;
        $candidate->other_education = $request->other_education;
        $candidate->experience = $request->experience;
        $candidate->current_salary = $request->current_salary;
        $candidate->expected_salary = $request->expected_salary;
        $candidate->notice_period = $request->notice_period;
        $candidate->job_role_preference = $request->job_role_preference;
        $candidate->languages = $request->languages;
        $candidate->skills = $request->skills;
        $candidate->added_by = Auth::id();
        $candidate->save();
        return redirect('/freelancer/candidate')->with("status","Successfully Updated the Candidate");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $authid=Auth::id();
       $candid=Candidate::find($id);
       if(!$candid||$candid->added_by!=$authid){return redirect('/freelancer/home');}
        $candid->delete();
       return redirect('/freelancer/candidate')->with('status','Successfully Deleted the candidate');
    }

    // To show the page to add candidate
    public function add(){
        return view('freelancer.candidate.add');
    }

    public function view($id){
        $candid=Candidate::find($id);
        if(!$candid){return redirect('/freelancer/home');}
        return view('freelancer.candidate.view',compact(['candid']));
    }

}
