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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($candidates as $candidate)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->email}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$candidate->phone_number}}</div>
                            </td>
                            <td>
                            <a href="/freelancer/candidate/view/{{$candidate->id}}" class="btn btn-primary">View</a>
                            </td>
                            </tr>
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
