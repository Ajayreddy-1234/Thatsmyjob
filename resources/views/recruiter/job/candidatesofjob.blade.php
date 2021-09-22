@extends('recruiter.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Candidates Applied</h6>
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
                            <th scope="col">Job_status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($applications as $application)
                            <tr>
                            <td scope="row">{{$counter}} </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$application->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$application->experience}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$application->skills}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$application->expected_salary}}</div>
                            </td>
                            @if($application->job_status=="pending")
                            <td style="color:#f0ac4f;">
                            <div style="white-space:pre-wrap;">{{$application->job_status}}</div>
                            </td>
                            @elseif($application->job_status=="selected")
                            <td style="color:green;">
                            <div style="white-space:pre-wrap;">{{$application->job_status}}</div>
                            </td>
                            @else
                            <td style="color:red;">
                            <div style="white-space:pre-wrap;">{{$application->job_status}}</div>
                            </td>
                            @endif 
                            <td>
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Options
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/recruiter/jobs/candidates/view/{{$application->candidateid}}/{{$application->id}}" style="font-size:14px;">ViewCandidate</a>
                              <a class="dropdown-item" href="/recruiter/jobs/{{$application->id}}/selected" style="font-size:14px;">Mark as Selected</a>
                              <a class="dropdown-item" href="/recruiter/jobs/{{$application->id}}/notselected" style="font-size:14px;">Mark as Not Selected</a>
                              <a class="dropdown-item" href="/recruiter/jobs/{{$application->id}}/pending" style="font-size:14px;">Mark as Pending</a>
                            </div>
                          </div>
                            </td>
                            </tr>
                            @php
                            $counter++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
          </form>
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
