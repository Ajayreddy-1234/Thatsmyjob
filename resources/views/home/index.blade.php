@extends('partnerlayout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Hi Raj Kori</h4>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card text-center">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <h3 class="mb-0">No Interviews today</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class=""><b>169</b> Tickets by OLX People</h4>
                  <hr>
                  <a href="#" class="card-link">21 Reply Awaited</a>
                  <a href="#" class="card-link text-mute">21 Unresolved</a>
                  <div class="d-flex flex-column mt-4">
                    <a href="#" class="d-flex align-items-center pb-3">
                      <div class="mr-3">
                        <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
                      </div>
                      <div class="w-100">
                        <div class="d-flex justify-content-between">
                          <h6 class="text-body mb-2">Faroza B Patil</h6>
                        </div>
                        <p class="text-muted tx-13">Mandates are Job is clear, look only for Android developers who has worked on..</p>
                      </div>
                    </a>
                  </div>
                  <a class="btn btn-primary" href="#" role="button">Check All Tickets</a>

                </div>
              </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class=""><b>837</b> My Tickets</h4>
                  <hr>
                  <a href="#" class="card-link">21 Reply Awaited</a>
                  <a href="#" class="card-link text-mute">21 Unresolved</a>
                  <div class="d-flex flex-column mt-4">
                    <a href="#" class="d-flex align-items-center pb-3">
                      <div class="mr-3">
                        <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
                      </div>
                      <div class="w-100">
                        <div class="d-flex justify-content-between">
                          <h6 class="text-body mb-2">Faroza B Patil</h6>
                        </div>
                        <p class="text-muted tx-13">Mandates are Job is clear, look only for Android developers who has worked on..</p>
                      </div>
                    </a>
                  </div>
                  <a class="btn btn-primary" href="#" role="button">Check All Tickets</a>

                </div>
              </div>
            </div>
        </div>
    </div>
  </div> <!-- row -->




@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dragula.js') }}"></script>
@endpush
