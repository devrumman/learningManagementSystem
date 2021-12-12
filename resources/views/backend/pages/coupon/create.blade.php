@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create A Coupon Codes</h4>
      <p class="mg-b-0">Manage The Coupon Codes. All Coupon Codes Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message') 

            <div class="pd-25">
              <form action="{{route('coupon.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Coupon Code</label>
                      <input type="text" name="code" class="form-control" required="required" autocomplete="off" placeholder="Enter The Coupon Code">
                    </div>
                    
                    <div class="form-group">
                      <label>Fixed Value [BDT]</label>
                      <input type="text" name="fixed_value" class="form-control" placeholder="Enter The Amount Only">
                    </div>

                    <div class="form-group">
                      <label>Percentage Off [%]</label>
                      <input type="text" name="percent_value" class="form-control" placeholder="Enter The Percentage Number Only">
                    </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>Discount Type</label>
                      <select class="form-control" name="discount_type">
                        <option>Please Select The Discount Type</option>
                        <option value="1">Fixed Amount</option>
                        <option value="2">Percentage Off</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Course Type</label>
                      <select class="form-control" name="course_type">
                        <option>Please Select The Course Type</option>
                        <option value="1">Online Course</option>
                        <option value="2">Offline Course</option>
                      </select>
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
                      <input type="submit" name="addCoupon" value="Add New Coupon" class="btn btn-teal mg-b-10">
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