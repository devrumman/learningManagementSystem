@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update The Batch Information</h4>
      <p class="mg-b-0">Update The Batch Page. All Batch Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
                       
              <form action="{{route('batch.update', $batch->id)}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Batch Name</label>
                      <input type="text" name="batch_name" class="form-control" required="required" autocomplete="off" value="{{$batch->batch_name}}">
                    </div>

                    <div class="form-group">
                      <label>Course Name</label>
                      <select class="form-control" name="course_id">
                        <option>Please Select A Course</option>
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                          @if ( $batch->course->id == $course->id )
                              selected
                          @endif
                          >{{ $course->english_titel }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Mentor Name</label>
                      <select class="form-control" name="mentor_id">
                        <option>Please Select A Mentor</option>
                        @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->id }}"
                          @if ( $batch->mentor->id == $mentor->id )
                              selected
                          @endif
                          >{{ $mentor->fullname }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Branch Name</label>
                      <select class="form-control" name="branch_id">
                        <option>Please Select A Branch</option>
                        @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}"
                          @if ( $batch->branch->id == $branch->id )
                              selected
                          @endif
                          >{{ $branch->name }}</option>
                        @endforeach
                      </select>  
                    </div>

                    <div class="form-group">
                      <label>Batch Type</label>
                      <select class="form-control" name="batch_type">
                        <option>Please Select A Batch Type</option>
                        <option value="1"  @if($batch->batch_type == 1) selected @endif>Online Batch</option>
                        <option value="2" @if($batch->batch_type == 2) selected @endif>Offline Batch</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Fb Group Link</label>
                      <input type="text" name="fb_group" class="form-control" required="required" autocomplete="off" value="{{$batch->fb_group}}">
                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Starting Date</label>
                      <input type="text" name="starting_date" class="form-control" required="required" autocomplete="off" value="{{$batch->starting_date}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Class Day</label>
                      <input type="text" name="class_day" class="form-control" required="required" autocomplete="off" value="{{$batch->class_day}}">
                    </div>

                    <div class="form-group">
                      <label>Class Time</label>
                      <input type="text" name="class_time" class="form-control" required="required" autocomplete="off" value="{{$batch->class_time}}">
                    </div>

                    <div class="form-group">
                      <label>Sit Number</label>
                      <input type="text" name="sit_number" class="form-control" required="required" autocomplete="off" value="{{$batch->sit_number}}">
                    </div>

                    <div class="form-group">
                      <label>Admission Status</label>
                      <select class="form-control" name="admission_status">
                        <option>Please Select The Admission Status</option>
                        <option value="1" @if($batch->admission_status == 1) selected @endif>Admission Going On</option>
                        <option value="2" @if($batch->admission_status == 2) selected @endif>Admission Closed</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The  Status</option>
                        <option value="1"  @if($batch->status == 1) selected @endif>Active</option>
                        <option value="2" @if($batch->status == 2) selected @endif>Inactive</option>
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