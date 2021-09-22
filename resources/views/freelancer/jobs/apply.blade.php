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
          </div>
          
      </div>
    </div>
    @if($job->is_live=='yes')
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Candidates to apply for this job</h6>
          <form class="forms-sample" enctype="multipart/form-data" method="post" action="/freelancer/application/store">
            @csrf
            <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Skills</th>
                            <th scope="col">Expected_salary</th>
                            </tr>
                        </thead>
                        <tbody>
                          <input type="hidden" name="jobid" value="{{$job->id}}">
                            @foreach($candidates as $candidate)
                            @if($candidate->id!=-1)
                            @php
                            $counter++;
                            @endphp
                            <tr>
                            <td scope="row">
                            <input type="checkbox" name="candidate[]" value="{{$candidate->id}}">
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->experience}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->skills}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->expected_salary}}</div>
                            </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
            @if($counter>0)
            <button type="submit" class="btn btn-success mr-2">Apply</button>
            @endif
          </form>
        </div>
    </div>
    </div>
    @endif
  </div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dragula.js') }}"></script>
  <script type="text/javascript">
jQuery(function() {
  $("form").submit(function() {
		// submit more than once return false
		$(this).submit(function() {
			return false;
		});
		// submit once return true
		return true;
	});
});

</script>
  
@endpush
