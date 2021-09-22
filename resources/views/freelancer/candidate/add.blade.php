@extends('freelancer.layout.master')


@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title ">Add Candidate</h6>
          <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{ route("candidate.store") }}">
            @csrf
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter full name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form-group">
                <label for="gender">Select Gender</label>
                <select class="form-control" id="gender" name="gender">
                  <option selected="" disabled="">Select gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_interest">Job Interest</label>
                <select class="form-control" id="job_interest" name="job_interest">
                  <option selected="" disabled="">Select job interest</option>
                  <option>Interest Unknown</option>
                  <option>Unemployed & looking</option>
                  <option>Employed & Looking</option>
                  <option>Not Looking</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tenth_percentage">10th Percentage</label>
                <input type="text" class="form-control" id="tenth_percentage" name="tenth_percentage" placeholder="Enter 10th Percentage">
            </div>
            <div class="form-group">
                <label for="tenth_school">10th School Name</label>
                <input type="text" class="form-control" id="tenth_school" name="tenth_school" placeholder="Enter 10th School Name">
            </div>
            <div class="form-group">
                <label for="tenth_passing_year">10th Passing Year</label>
                <input type="text" class="form-control" id="tenth_passing_year" name="tenth_passing_year" placeholder="Enter 10th Passing year">
            </div>

            <div class="form-group">
                <label for="twelfth_percentage">12th Percentage</label>
                <input type="text" class="form-control" id="twelfth_percentage" name="twelfth_percentage" placeholder="Enter 12th Percentage">
            </div>
            <div class="form-group">
                <label for="twelfth_school">12th School Name</label>
                <input type="text" class="form-control" id="twelfth_school" name="twelfth_school" placeholder="Enter 12th School Name">
            </div>
            <div class="form-group">
                <label for="twelfth_stream">12th Stream</label>
                <input type="text" class="form-control" id="twelfth_stream" name="twelfth_stream" placeholder="Science/Commerce/Arts">
            </div>
            <div class="form-group">
                <label for="twelfth_passing_year">12th Passing Year</label>
                <input type="text" class="form-control" id="twelfth_passing_year" name="twelfth_passing_year" placeholder="Enter 12th Passing year">
            </div>


            <div class="form-group">
                <label for="diploma_percentage">Diploma Percentage</label>
                <input type="text" class="form-control" id="diploma_percentage" name="diploma_percentage" placeholder="Enter diploma Percentage">
            </div>
            <div class="form-group">
                <label for="diploma_school">Diploma College Name</label>
                <input type="text" class="form-control" id="diploma_school" name="diploma_school" placeholder="Enter Diploma College Name">
            </div>
            <div class="form-group">
                <label for="diploma_stream">Diploma Stream</label>
                <input type="text" class="form-control" id="diploma_stream" name="diploma_name" placeholder="Science/Commerce/Arts">
            </div>
            <div class="form-group">
                <label for="diploma_passing_year">Diploma Passing Year</label>
                <input type="text" class="form-control" id="diploma_passing_year" name="diploma_passing_year" placeholder="Enter Diploma Passing year">
            </div>



            <div class="form-group">
                <label for="ug_percentage">UG Percentage</label>
                <input type="text" class="form-control" id="ug_percentage" name="ug_percentage" placeholder="Enter UG Percentage">
            </div>
            <div class="form-group">
                <label for="ug_college">UG College Name</label>
                <input type="text" class="form-control" id="ug_college" name="ug_college" placeholder="Enter UG College Name">
            </div>
            <div class="form-group">
                <label for="ug_stream">UG Stream</label>
                <input type="text" class="form-control" id="ug_stream" name="ug_name" placeholder="B.tech, BBA, BCA">
            </div>
            <div class="form-group">
                <label for="ug_passing_year">UG Passing Year</label>
                <input type="text" class="form-control" id="ug_passing_year" name="ug_passing_year" placeholder="Enter UG Passing year">
            </div>



            <div class="form-group">
                <label for="pg_percentage">PG Percentage</label>
                <input type="text" class="form-control" id="pg_percentage" name="pg_percentage" placeholder="Enter PG Percentage">
            </div>
            <div class="form-group">
                <label for="pg_college">PG College Name</label>
                <input type="text" class="form-control" id="pg_college" name="pg_college" placeholder="Enter PG College Name">
            </div>
            <div class="form-group">
                <label for="ug_stream">PG Stream</label>
                <input type="text" class="form-control" id="pg_stream" name="pg_name" placeholder="M.tech, MBA, MCA">
            </div>
            <div class="form-group">
                <label for="ug_passing_year">PG Passing Year</label>
                <input type="text" class="form-control" id="pg_passing_year" name="pg_passing_year" placeholder="Enter PG Passing year">
            </div>




            <div class="form-group">
                <label for="doctorate_percentage">Doctorate Percentage</label>
                <input type="text" class="form-control" id="doctorate_percentage" name="doctorate_percentage" placeholder="Enter doctorate Percentage">
            </div>
            <div class="form-group">
                <label for="cotorate_college">Doctorate College Name</label>
                <input type="text" class="form-control" id="doctorate_college" name="doctorate_college" placeholder="Enter doctorate College Name">
            </div>
            <div class="form-group">
                <label for="doctorate_stream">Doctorate Stream</label>
                <input type="text" class="form-control" id="doctorate_stream" name="doctorate_name" placeholder="Enter doctorate Name">
            </div>
            <div class="form-group">
                <label for="doctorate_passing_year">Doctorate Passing Year</label>
                <input type="text" class="form-control" id="doctorate_passing_year" name="doctorate_passing_year" placeholder="Enter doctorate Passing year">
            </div>

            <div class="form-group">
                <label for="other_education">Other Education</label>
                <textarea class="form-control" id="other_education" name="other_education" placeholder="Enter if any other qualifications"></textarea>
            </div>


            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="number" class="form-control" id="experience" name="experience" placeholder="Enter number of years of experience">
            </div>

            <div class="form-group">
                <label for="experience">Current Salary</label>
                <input type="text" class="form-control" id="current_salary" name="current_salary" placeholder="Enter Current Salary">
            </div>
            <div class="form-group">
                <label for="experience">Expected Salary</label>
                <input type="text" class="form-control" id="expected_salary" name="expected_salary" placeholder="Enter Expected Salary">
            </div>

            <div class="form-group">
                <label for="notice_period">Notice Period</label>
                <select class="form-control" id="notice_period" name="notice_period">
                  <option selected="" disabled="">Select notice period</option>
                  <option>No notice Period</option>
                  <option>7 Days</option>
                  <option>15 Days</option>
                  <option>1 month</option>
                  <option>3 months</option>
                  <option>6 months</option>
                </select>
            </div>

            <div class="form-group">
                <label for="job_role_preference">Job role preference</label>
                <textarea class="form-control" id="job_role_preference" name="job_role_preference" placeholder="Enter Job perefences seperated by commas"></textarea>
            </div>

            <div class="form-group">
                <label for="languages">Languages</label>
                <textarea class="form-control" id="languages" name="languages" placeholder="Enter languages seperated by commas"></textarea>
            </div>

            <div class="form-group">
                <label for="skills">Skills</label>
                <textarea class="form-control" id="skills" name="skills" placeholder="Enter skills seperated by commas"></textarea>
            </div>


            <input type="submit" class="btn btn-primary mr-2">
            {{-- <button class="btn btn-light">Cancel</button> --}}
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
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
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
