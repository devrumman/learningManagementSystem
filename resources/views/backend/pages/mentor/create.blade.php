@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create A New Mentor Profile</h4>
      <p class="mg-b-0">Manage The Mentor Page. All Mentor Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message') 

            <div class="pd-25">
              <form action="{{route('mentor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Mentor Full Name</label>
                      <input type="text" name="fullname" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" name="designation" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                  
                    <div class="form-group">
                      <label>Phone Number. [Use Comma (,) To Set Multipal Phone Number</label>
                      <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Overview</label>
                      <textarea class="form-control" rows="6" name="overview"></textarea>
                    </div>  

                  </div>
                  <div class="col-sm-6">

                    <div class="form-group">
                     <label>Mentor Profile Picture</label>
                     <input type="file" name="mentor_profile_img" class="form-control-file">
                    </div>
                           
                    <div class="form-group">
                     <label>Fiverr URL</label>
                     <input type="text" name="fiverr_url" class="form-control-file">
                    </div>
                    <div class="form-group">
                     <label>Fiverr Logo</label>
                     <input type="file" name="fiverr_batch_img" class="form-control-file">
                    </div>

                    <div class="form-group">
                     <label>Upwork URL</label>
                     <input type="text" name="upwork_url" class="form-control-file">
                    </div>
                    <div class="form-group">
                     <label>Upwork Logo</label>
                     <input type="file" name="upwork_batch_img" class="form-control-file">
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
                      <input type="submit" name="addbranch" value="Add New Mentor" class="btn btn-teal mg-b-10">
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