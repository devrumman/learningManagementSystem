@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update The Course Curriculam Information</h4>
      <p class="mg-b-0">Update The Course Curriculam Page. All Course Curriculam Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
                       
              <form action="{{route('curriculam.update', $curriculam->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>The Course Name</label>
                      <select name="course_id" class="form-control">
                        <option value="0">Please Select The Course Name</option>
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                          
                          @if ( $course->id == $curriculam->course_id )
                              selected
                          @endif

                          >{{ $course->english_titel }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Step One Title [1- English]</label>
                      <input type="text" name="one_en" class="form-control" autocomplete="off" value="{{$curriculam->one_en}}">
                    </div>
                    <div class="form-group">
                      <label>Step One Title [1- Bangla]</label>
                      <input type="text" name="one_bn" class="form-control" autocomplete="off" value="{{$curriculam->one_bn}}">
                    </div>
                    <div class="form-group">
                      <label>Step One Description [1]</label>
                      <textarea name="one_desc" rows="3" class="form-control">{{$curriculam->one_desc}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Step Two Title [2- English]</label>
                      <input type="text" name="two_en" class="form-control" autocomplete="off" value="{{$curriculam->two_en}}">
                    </div>
                    <div class="form-group">
                      <label>Step Two Title [2- Bangla]</label>
                      <input type="text" name="two_bn" class="form-control" autocomplete="off" value="{{$curriculam->two_bn}}">
                    </div>
                    <div class="form-group">
                      <label>Step Two Description [2]</label>
                      <textarea name="two_desc" rows="3" class="form-control">{{$curriculam->two_desc}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Step Three Title [3- English]</label>
                      <input type="text" name="three_en" class="form-control" autocomplete="off"value="{{$curriculam->three_en}}">
                    </div>
                    <div class="form-group">
                      <label>Step Three Title [3- Bangla]</label>
                      <input type="text" name="three_bn" class="form-control" autocomplete="off"value="{{$curriculam->three_bn}}">
                    </div>
                    <div class="form-group">
                      <label>Step Three Description [3]</label>
                      <textarea name="three_desc" rows="3" class="form-control">{{$curriculam->three_desc}}</textarea>
                    </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Step Four Title [4- English]</label>
                      <input type="text" name="four_en" class="form-control" autocomplete="off" value="{{$curriculam->four_en}}">
                    </div>
                    <div class="form-group">
                      <label>Step Three Title [4- Bangla]</label>
                      <input type="text" name="four_bn" class="form-control" autocomplete="off" value="{{$curriculam->four_bn}}">
                    </div>
                    <div class="form-group">
                      <label>Step Four Description [4]</label>
                      <textarea name="four_desc" rows="3" class="form-control">{{$curriculam->four_desc}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Step Five Title [5- English]</label>
                      <input type="text" name="five_en" class="form-control" autocomplete="off"value="{{$curriculam->five_en}}">
                    </div>
                    <div class="form-group">
                      <label>Step Five Title [5- Bangla]</label>
                      <input type="text" name="five_bn" class="form-control" autocomplete="off"value="{{$curriculam->five_bn}}">
                    </div>
                    <div class="form-group">
                      <label>Step Five Description [5]</label>
                      <textarea name="five_desc" rows="3" class="form-control">{{$curriculam->five_desc}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1" @if ($curriculam->status == 1) selected @endif>Active</option>
                        <option value="2" @if ($curriculam->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="submit" name="updatecurriculam" value=" Save Changes" class="btn btn-teal mg-b-10">
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