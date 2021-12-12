@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create A New Notice</h4>
      <p class="mg-b-0">Manage The Notice Page. All Notice Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message') 

            <div class="pd-25">
              <form action="{{route('notice.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" rows="10" class="form-control"> </textarea>
                    </div>
                  </div>

                  <div class="col-sm-6">
  
                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Notice Image</label>
                      <input type="file" name="image" class="form-control-file">
                     </div>
                    <br><br><br><br>
                    <div class="form-group text-center">
                      <input type="submit" name="addnotice" value="Add New Notice" class="btn btn-teal mg-b-10">
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