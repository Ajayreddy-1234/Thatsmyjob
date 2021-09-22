@extends('freelancer.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Candidate Id - {{$candid->id}}</h6>
                   <table class="table">
                        <tbody>
                            <tr scope="row">
                            <th>Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Email</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->email}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Phone Number</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->phone_number}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Location</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->location}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Date of Birth</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->date_of_birth}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Gender</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->gender}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Job Interest</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->job_interest}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Tenth Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->tenth_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Tenth School</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->tenth_school}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Tenth Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->tenth_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Twelfth Stream</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->twelfth_stream}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Twelfth Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->twelfth_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Twelfth School</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->twelfth_school}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Twelfth Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->twelfth_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Diploma Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->diploma_name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Diploma Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->diploma_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Diploma College</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->diploma_college}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Diploma Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->diploma_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Undergraduate Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->ug_name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Undergraduate Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->ug_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Undergraduate College</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->ug_college}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Undergraduate Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->ug_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Postgraduate Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->pg_name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Postgraduate Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->pg_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Postgraduate College</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->pg_college}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Postgraduate Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->pg_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Doctorate Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->doctorate_name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Doctorate Percentage</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->doctorate_percentage}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Doctorate College</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->doctorate_college}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Doctorate Passing Year</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->doctorate_passing_year}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Other Education</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->other_education}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Experience</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->experience}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Current Salary</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->current_salary}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Expected Salary</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->expected_salary}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Notice Period</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->notice_period}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Job Role Preference</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->job_role_preference}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Languages</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->languages}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Skills</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candid->skills}}</div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin-left:250px;">
                    <a href="/freelancer/candidate/edit/{{$candid->id}}" class="btn btn-primary mr-2">Edit</a>
                    <a href="/freelancer/candidate/delete/{{$candid->id}}" class="btn btn-danger mr-2">Delete</a>
                    </div>
          </div>
          
      </div>
      
    </div>
  </div>



@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dragula.js') }}"></script>
@endpush
