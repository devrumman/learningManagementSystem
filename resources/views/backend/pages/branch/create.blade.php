@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Branch Manage Page</h4>
      <p class="mg-b-0">Manage The Branch Page. All Branch Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="pd-25">
              @include('backend.flash.message')         
              <form action="{{route('branch.store')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Branch Name</label>
                      <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Branch Bangla Name</label>
                      <input type="text" name="bangla_name" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                    </div>
                  
                  
                    <div class="form-group">
                      <label>Phone Number. [Use Comma (,) To Set Multipal Phone Number</label>
                      <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                    </div>

                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Address Line- 1</label>
                      <input type="text" name="address_line1" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Address Line- 2</label>
                      <input type="text" name="address_line2" class="form-control" required="required" autocomplete="off">
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
                      <input type="submit" name="addbranch" value="Add New Branch" class="btn btn-teal mg-b-10">
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