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
            <div class="d-md-flex justify-content-between pd-25">
              <div>
                <h6 class="tx-13 text-uppercase tx-inverse tx-semibold tx-spacing-1">Add New Branch</h6>
              </div>

            <div class="d-sm-flex">
              
              <form action="{{route('btanch.store')}}" method="POST">
                @csrf
              </form>

            </div>
            </div>
          </div><!-- card -->
        <!-- Page Body Content End -->

      </div>
    </div>  
  </div>    

@endsection 