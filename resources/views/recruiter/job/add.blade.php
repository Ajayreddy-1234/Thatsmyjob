@extends('recruiter.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Add Job</h6>
          <form class="forms-sample" enctype="multipart/form-data" method="post" action="/recruiter/jobs/store">
            @csrf
            <div class="form-group">
              <label for="name">Job Title</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter Job Title" required>
            </div>

            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea class="form-control" id="job_description" name="description" placeholder="Enter Job description" required></textarea>
            </div>

            <div class="form-group">
              <label for="companyname">Company Name</label>
              <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" required>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Contact Phone number</label>
                <input type="text" class="form-control" id="phone_number" name="phonenumber" placeholder="Enter phone number" required>
            </div>
            
            <div class="form-group">
                <label for="email">Contact Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label for="qualification">Qualification</label>
                <textarea class="form-control" id="qualification" name="qualification" placeholder="Enter qualifications" required></textarea>
            </div>


            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="number" class="form-control" id="experience" name="experience" min="0" placeholder="Enter number of years of experience" required>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary" required>
            </div>

            

            <div class="form-group">
                <label for="languages">Languages</label>
                <textarea class="form-control" id="languages" name="languages" placeholder="Enter languages seperated by commas" required></textarea>
            </div>

            <div class="form-group">
                <label for="skills">Skills</label>
                <textarea class="form-control" id="skills" name="skills" placeholder="Enter skills seperated by commas" required></textarea>
            </div>


            <button type="submit" class="btn btn-success mr-2">Create</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>



@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
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
