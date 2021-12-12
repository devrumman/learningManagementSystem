@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update The Coupon Code Information</h4>
      <p class="mg-b-0">Update The Coupon Code Page. All Coupon Code Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
                       
              <form action="{{route('coupon.update', $coupon->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Coupon Code</label>
                      <input type="text" name="code" class="form-control" required="required" autocomplete="off" placeholder="Enter The Coupon Code" value="{{$coupon->code}}">
                    </div>
                    
                    <div class="form-group">
                      <label>Fixed Value [BDT]</label>
                      <input type="text" name="fixed_value" class="form-control" placeholder="Enter The Amount Only" value="{{$coupon->fixed_value}}">
                    </div>

                    <div class="form-group">
                      <label>Percentage Off [%]</label>
                      <input type="text" name="percent_value" class="form-control" placeholder="Enter The Percentage Number Only" value="{{$coupon->percent_value}}">
                    </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Discount Type</label>
                      <select class="form-control" name="discount_type">
                        <option>Please Select The Discount Type</option>
                        <option value="1" @if($coupon->discount_type == 1) selected @endif>Fixed Amount</option>
                        <option value="2" @if($coupon->discount_type == 2) selected @endif>Percentage Off</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Course Type</label>
                      <select class="form-control" name="course_type">
                        <option>Please Select The Course Type</option>
                        <option value="1" @if($coupon->course_type == 1) selected @endif>Online Course</option>
                        <option value="2" @if($coupon->course_type == 2) selected @endif>Offline Course</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Active/Inactive Status</label>
                      <select class="form-control" name="status">
                        <option>Please Select The Status</option>
                        <option value="1" @if($coupon->status == 1) selected @endif>Active</option>
                        <option value="2" @if($coupon->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="submit" name="updateCoupon" value="Save Changes" class="btn btn-teal mg-b-10">
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