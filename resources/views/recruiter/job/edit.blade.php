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
          <form class="forms-sample" enctype="multipart/form-data" method="post" action="/recruiter/jobs/update/{{$job->id}}">
            @csrf
            <div class="form-group">
              <label for="name">Job Title</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter Job Title" value="{{$job->name}}" required>
            </div>

            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea class="form-control" id="job_description" name="description" placeholder="Enter Job description">{{$job->description}}</textarea>
            </div>

            <div class="form-group">
              <label for="companyname">Company Name</label>
              <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" value="{{$job->companyname}}" required>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" value="{{$job->location}}" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Contact Phone number</label>
                <input type="text" class="form-control" id="phone_number" name="phonenumber" placeholder="Enter phone number" value="{{$job->phonenumber}}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Contact Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{$job->email}}" required>
            </div>

            <div class="form-group">
                <label for="qualification">Qualification</label>
                <textarea class="form-control" id="qualification" name="qualification" placeholder="Enter qualifications">{{$job->qualification}}</textarea>
            </div>


            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="number" class="form-control" id="experience" name="experience" min="0" placeholder="Enter number of years of experience" value="{{$job->experience}}" required>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary" value="{{$job->salary}}" required>
            </div>

            <div class="form-group">
                <label for="languages">Languages</label>
                <textarea class="form-control" id="languages" name="languages" placeholder="Enter languages seperated by commas">{{$job->languages}}</textarea>
            </div>

            <div class="form-group">
                <label for="skills">Skills</label>
                <textarea class="form-control" id="skills" name="skills" placeholder="Enter skills seperated by commas">{{$job->skills}}</textarea>
            </div>


            <button type="submit" class="btn btn-success mr-2">Update</button>
            
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
