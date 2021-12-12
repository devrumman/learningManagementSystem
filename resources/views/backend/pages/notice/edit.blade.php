@extends('backend.layout.template')


@section('body')
<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Update The Notice Information</h4>
    <p class="mg-b-0">Update The Notice Page. All Notice Info Here.</p>
  </div>
</div>

<div class="br-pagebody">
  <div class="row">
    <div class="col-lg-12">

      <!-- Page Body Content End -->
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
                      
            <form action="{{route('notice.update', $notice->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required="required" autocomplete="off" value="{{$notice->title}}">
                  </div>
                
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="10" class="form-control">{{$notice->description}}</textarea>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Active/Inactive Status</label>
                    <select class="form-control" name="status">
                      <option>Please Select The Status</option>
                      <option value="1" @if($notice->status == 1) selected @endif>Active</option>
                      <option value="2" @if($notice->status == 2) selected @endif>Inactive</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Notice Image</label>
                    <br>
                    @if($notice->image == NULL)
                      <img src="{{asset('backend/img/notice/default.png')}}" width="300">
                    @else
                      <img src="{{asset('backend/img/notice/' . $notice->image)}}" width="300">
                    @endif
                    <br><br>
                    <input type="file" name="image" class="form-control-file">
                  </div>

                  <br>
                  <div class="form-group text-center">
                    <input type="submit" name="updateNotice" value="Save Changes" class="btn btn-teal mg-b-10">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div><!-- card -->
    <!-- Page Body Content End -->
  </div>
</div>  
   

@endsection 