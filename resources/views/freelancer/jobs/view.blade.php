@extends('freelancer.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Job Id - {{$job->id}}</h6>
                   <table class="table">
                        <tbody>
                            <tr scope="row">
                            <th>Job Title</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->name}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Description</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->description}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Company Name</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->companyname}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Location</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->location}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Phone Number</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->phonenumber}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Email</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->email}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Qualifications</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->qualification}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Salary</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->salary}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Experience</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->experience}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Languages</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->languages}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Skills</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->skills}}</div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin-left:250px;">
                    <a href="/recruiter/jobs/edit/{{$job->id}}" class="btn btn-primary mr-2">Edit</a>
                    <a href="/recruiter/jobs/delete/{{$job->id}}" class="btn btn-danger mr-2">Delete</a>
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
