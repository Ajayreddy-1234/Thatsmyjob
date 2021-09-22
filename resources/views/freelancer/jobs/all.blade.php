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
          <h6 class="card-title ">All Jobs</h6>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($jobs as $job)
                            <tr>
                            <th scope="row">{{$counter}}</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->salary}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->experience}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$job->location}}</div>
                            </td>
                            <td>
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Options
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/freelancer/application/new/apply/{{$job->id}}" style="font-size:14px;">Apply</a>
                              <a class="dropdown-item" href="/freelancer/application/status/{{$job->id}}" style="font-size:14px;">Status</a>
                              <a class="dropdown-item" href="/freelancer/application/selected/{{$job->id}}" style="font-size:14px;">Selected</a>
                              <a class="dropdown-item" href="/freelancer/application/notselected/{{$job->id}}" style="font-size:14px;">Not Selected</a>
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
