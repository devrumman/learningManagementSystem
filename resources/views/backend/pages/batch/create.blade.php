@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create A New Batch</h4>
      <p class="mg-b-0">Manage The Batch Page. All Batch Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message') 

            <div class="pd-25">
              <form action="{{route('batch.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Batch Name</label>
                      <input type="text" name="batch_name" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Course Name</label>
                      <select class="form-control" name="course_id">
                        <option>Please Select A Course</option>
                        @foreach ($courses as $course)
                          <option value="{{$course->id}}">{{$course->english_titel}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Mentor Name</label>
                      <select class="form-control" name="mentor_id">
                        <option>Please Select A Mentor</option>
                        @foreach ($mentors as $mentor)
                          <option value="{{$mentor->id}}">{{$mentor->fullname}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Branch Name</label>
                      <select class="form-control" name="branch_id">
                        <option>Please Select A Branch</option>
                        @foreach ($branches as $branch)
                          <option value="{{$branch->id}}">{{$branch->name }}</option>
                        @endforeach
                      </select>  
                    </div>

                    <div class="form-group">
                      <label>Batch Type</label>
                      <select class="form-control" name="batch_type">
                        <option>Please Select A Batch Type</option>
                        <option value="1">Online Batch</option>
                        <option value="2">Offline Batch</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Fb Group Link</label>
                      <input type="text" name="fb_group" class="form-control" required="required" autocomplete="off">
                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Starting Date</label>
                      <input type="text" name="starting_date" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Class Day</label>
                      <input type="text" name="class_day" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Class Time</label>
                      <input type="text" name="class_time" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Sit Number</label>
                      <input type="text" name="sit_number" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Admission Status</label>
                      <select class="form-control" name="admission_status">
                        <option>Please Select The Admission Status</option>
                        <option value="1">Admission Going On</option>
                        <option value="2">Admission Closed</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The  Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="submit" name="addbatch" value="Add New Batch" class="btn btn-teal mg-b-10">
                    </div>

                  </div>
                </div>
              </form>

            </div>
          </div><!-- card -->
        <!-- Page Body Content End -->

      </div>
    </div>  
  </div>    

@endsection 