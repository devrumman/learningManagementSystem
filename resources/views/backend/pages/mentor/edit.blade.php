@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update The Branch Information</h4>
      <p class="mg-b-0">Update The Branch Page. All Branch Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
                       
              <form action="{{route('mentor.update', $mentor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Mentor Full Name</label>
                      <input type="text" name="fullname" class="form-control" required="required" autocomplete="off" value="{{$mentor->fullname}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" name="designation" class="form-control" required="required" autocomplete="off" value="{{$mentor->designation}}">
                    </div>
                  
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required="required" autocomplete="off" value="{{$mentor->email}}">
                    </div>
                  
                  
                    <div class="form-group">
                      <label>Phone Number. [Use Comma (,) To Set Multipal Phone Number</label>
                      <input type="text" name="phone" class="form-control" required="required" autocomplete="off" value="{{$mentor->phone}}">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" class="form-control" required="required" autocomplete="off" value="{{$mentor->address}}">
                    </div>

                    <div class="form-group">
                      <label>Overview</label>
                      <textarea class="form-control" rows="6" name="overview">{{$mentor->overview}}</textarea>
                    </div>  

                  </div>
                  <div class="col-sm-6">

                    <div class="form-group">
                     <label>Mentor Profile Picture</label>
                     <br>
                      @if($mentor->mentor_profile_img == NULL)
                        <img src="{{asset('backend/img/mentor/default.png')}}" width="50">
                      @else
                        <img src="{{asset('backend/img/mentor/' . $mentor->mentor_profile_img)}}" width="50">
                      @endif
                     <br>
                     <input type="file" name="mentor_profile_img" class="form-control-file">
                    </div>
                           
                    <div class="form-group">
                     <label>Fiverr URL</label>
                     <input type="text" name="fiverr_url" class="form-control-file" name="overview" value="{{$mentor->fiverr_url}}">
                    </div>
                    <div class="form-group">
                     <label>Fiverr Logo</label>
                     <br>
                      @if($mentor->fiverr_batch_img == NULL)
                        <img src="{{asset('backend/img/mentor/badge/default-logo.png')}}" width="50">
                      @else
                        <img src="{{asset('backend/img/mentor/badge/' . $mentor->fiverr_batch_img)}}" width="50">
                      @endif
                     <br>
                     <input type="file" name="fiverr_batch_img" class="form-control-file">
                    </div>

                    <div class="form-group">
                     <label>Upwork URL</label>
                     <input type="text" name="upwork_url" class="form-control-file" name="overview" value="{{$mentor->upwork_url}}">
                    </div>
                    <div class="form-group">
                     <label>Upwork Logo</label>
                     <br>
                      @if($mentor->upwork_batch_img == NULL)
                        <img src="{{asset('backend/img/mentor/badge/default-logo.png')}}" width="50">
                      @else
                        <img src="{{asset('backend/img/mentor/badge/' . $mentor->upwork_batch_img)}}" width="50">
                      @endif
                     <br>
                     <input type="file" name="upwork_batch_img" class="form-control-file">
                    </div>
                                      
                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1" @if($mentor->status == 1) selected @endif>Active</option>
                        <option value="2" @if($mentor->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                    <div class="form-group text-center">
                      <input type="submit" name="updateMentor" value="Save Changes" class="btn btn-teal mg-b-10">
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