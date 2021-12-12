@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update The Course Information</h4>
      <p class="mg-b-0">Update The Course Page. All Course Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
                       
              <form action="{{route('course.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Course Name [English]</label>
                      <input type="text" name="english_titel" class="form-control" required="required" autocomplete="off" value="{{$course->english_titel}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Name [Bangla]</label>
                      <input type="text" name="bangla_titel" class="form-control" required="required" autocomplete="off" value="{{$course->bangla_titel}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Price [English]</label>
                      <input type="text" name="price" class="form-control" required="required" autocomplete="off" value="{{$course->price}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Price [Bangla]</label>
                      <input type="text" name="bangla_price" class="form-control" required="required" autocomplete="off" value="{{$course->bangla_price}}">
                    </div>

                    <div class="form-group">
                      <label>Total Graduate Number</label>
                      <input type="text" name="graduate_number" class="form-control" required="required" autocomplete="off" value="{{$course->graduate_number}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Total Lecture</label>
                      <input type="text" name="total_lecture" class="form-control" required="required" autocomplete="off" value="{{$course->total_lecture}}">
                    </div>

                    <div class="form-group">
                      <label>Class Hour</label>
                      <input type="text" name="class_hour" class="form-control" required="required" autocomplete="off" value="{{$course->class_hour}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" name="course_duration" class="form-control" required="required" autocomplete="off" value="{{$course->course_duration}}">
                    </div>

                    <div class="form-group">
                      <label>Intro Video</label>
                      <input type="text" name="intro_video" class="form-control" required="required" autocomplete="off" value="{{$course->intro_video}}">
                    </div>
                    
                    <div class="form-group">
                      <label>Cupon Status</label>
                      <select class="form-control" name="coupon_status">
                        <option>Please Select The Cupon Status</option>
                        <option value="1" @if($course->coupon_status == 1) selected @endif>Accept</option>
                        <option value="2" @if($course->coupon_status == 2) selected @endif>Not-Accept</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Course Thumbnail</label>
                      <br>
                        @if($course->image == NULL)
                          <img src="{{asset('backend/img/course/default.png')}}" width="50">
                        @else
                          <img src="{{asset('backend/img/course/' . $course->image)}}" width="60">
                        @endif
                     <br><br>
                      <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Course Requirment</label>
                      <textarea class="form-control" rows="4" name="course_requirment">{{$course->course_requirment}}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Motivational Content</label>
                      <textarea class="form-control" rows="4" name="motivational_content">{{$course->motivational_content}}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Course Opportunity</label>
                      <textarea class="form-control" rows="4" name="course_opportunity">{{$course->course_opportunity}}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Curriculam Description</label>
                      <textarea class="form-control" rows="4" name="curriculam_description">{{$course->curriculam_description}}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1" @if($course->status == 1) selected @endif>Active</option>
                        <option value="2" @if($course->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="submit" name="updatecourse" value="Save Changes" class="btn btn-teal mg-b-10">
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