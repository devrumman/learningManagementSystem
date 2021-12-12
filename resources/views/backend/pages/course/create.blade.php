@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create A New Course</h4>
      <p class="mg-b-0">Manage The Course Page. All Course Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message') 

            <div class="pd-25">
              <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Course Name [English]</label>
                      <input type="text" name="english_titel" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Name [Bangla]</label>
                      <input type="text" name="bangla_titel" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Price [English]</label>
                      <input type="text" name="price" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Price [Bangla]</label>
                      <input type="text" name="bangla_price" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Total Graduate Number</label>
                      <input type="text" name="graduate_number" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Total Lecture</label>
                      <input type="text" name="total_lecture" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Class Hour</label>
                      <input type="text" name="class_hour" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" name="course_duration" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Intro Video</label>
                      <input type="text" name="intro_video" class="form-control" required="required" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                      <label>Cupon Status</label>
                      <select class="form-control" name="coupon_status">
                        <option>Please Select The Cupon Status</option>
                        <option value="1">Accept</option>
                        <option value="2">Not-Accept</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Course Thumbnail</label>
                      <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Course Requirment</label>
                      <textarea class="form-control" rows="4" name="course_requirment"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Motivational Content</label>
                      <textarea class="form-control" rows="4" name="motivational_content"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Course Opportunity</label>
                      <textarea class="form-control" rows="4" name="course_opportunity"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Curriculam Description</label>
                      <textarea class="form-control" rows="4" name="curriculam_description"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="submit" name="addcourse" value="Add New Course" class="btn btn-teal mg-b-10">
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