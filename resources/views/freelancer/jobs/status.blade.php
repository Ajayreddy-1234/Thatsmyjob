@extends('freelancer.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
                    @if (session('status')) 
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
          <h6 class="card-title ">Candidates applied for {{$job->name}}</h6>
                    @if(count($applications)>0)
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Skills</th>
                            <th scope="col">Expected_salary</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($applications as $application)
                            <tr>
                            <th scope="row">{{$counter}}</th>
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
                            </tr>
                            @php
                            $counter++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p class="lead" style="font-size:16px;">OOPS!! You dont seem to have any candidates</p>
                    @endif
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
