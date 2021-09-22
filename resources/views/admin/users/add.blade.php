@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Add {{$typeuser}}</h6>
          @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
          <form class="forms-sample" enctype="multipart/form-data" method="post" action="/admin/useradd">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Enter Password" required>
            </div>
            <input type="hidden" name="user_type" value="{{$user_type}}">
            
            <button type="submit" class="btn btn-success mr-2">Create</button>
            
          </form>
        </div>
      </div>
    </div>
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
