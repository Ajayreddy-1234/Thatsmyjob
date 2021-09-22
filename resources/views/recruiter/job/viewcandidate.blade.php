@extends('recruiter.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Candidate - {{$candidate->name}}</h6>
                   <table class="table">
                        <tbody>
                            <tr scope="row">
                            <th>Email</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->email}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Phone Number</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->phone_number}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Gender</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->gender}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Experience</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->experience}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Languages</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->languages}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Skills</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->skills}}</div>
                            </td>
                            </tr>
                            <tr scope="row">
                            <th>Notice Period</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->notice_period}}</div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin-left:180px;">
                    <a href="/recruiter/jobs/{{$appid}}/selected" class="btn btn-primary mr-2">Mark as Selected</a>
                    <a href="/recruiter/jobs/{{$appid}}/notselected" class="btn btn-danger mr-2">Mark as Not Selected</a>
                    <a href="/recruiter/jobs/{{$appid}}/pending" class="btn mr-2" style="background-color:#f0ac4f;color:white;">Mark as Pending</a>
                    
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