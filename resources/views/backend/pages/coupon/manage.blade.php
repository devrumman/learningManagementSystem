@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage Coupon Cords</h4>
      <p class="mg-b-0">Manage The Coupon Cords. All Coupon Cords Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message')

            <div class="d-md-flex justify-content-between pd-25">
              <!-- Tabel Content Stert -->
              <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-bordered table-hover table-custom">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#Sl.</th>
                      <th scope="col">Coupon Code</th>
                      <th scope="col">Fixed Amount</th>
                      <th scope="col">Percent Value</th>
                      <th scope="col">Discount Type</th>
                      <th scope="col">Course Type</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $coupons as $coupon )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $coupon->code }}</td>
                        <td>
                          @if( !empty($coupon->fixed_value) )
                              {{$coupon->fixed_value}} BDT
                          @else
                              -/-
                          @endif    
                        </td>
                        <td>
                          @if( !empty($coupon->percent_value) )
                              {{$coupon->percent_value}} %
                          @else
                              -/-
                          @endif
                        </td>
                        <td>
                          @if($coupon->discount_type == 1)
                            <span class="badge badge-dark">Fixed Amount</span> 
                          @elseif($coupon->discount_type == 2)
                            <span class="badge badge-warning">Percentage Amount</span>
                          @endif
                        </td>
                        <td>
                          @if($coupon->course_type == 1)
                            <span class="badge badge-primary">Online Course</span> 
                          @elseif($coupon->course_type == 2)
                            <span class="badge badge-info">Offline Course</span>
                          @endif
                        </td>
                        <td>
                          @if($coupon->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($coupon->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <ul class="custom-action">
                            <li>
                              <a href="{{route('coupon.edit', $coupon->id)}}">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-toggle="modal" data-target="#coupon{{$coupon->id}}">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                        <!--Delete Start Modal -->
                          <div class="modal fade" id="coupon{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This Coupon Codes</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body text-center">
                                  <div class="modal-button">
                                    <ul>
                                      <li>
                                        <form action="{{route('coupon.destroy', $coupon->id)}}" method="POST">
                                          @csrf
                                          <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                      </li>
                                      <li>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!--Delete End Modal -->  
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
                @if ( $coupons->count() == 0 )
                  <div class="alert alert-info message-info">
                    No Coupon Code Added Yet. Please Add A New Coupon Code First.
                  </div>
                @endif  
              </div>
              <!-- Tabel Content End -->

            </div>
          </div><!-- card -->
        <!-- Page Body Content End -->
        
      </div>
    </div>  
  </div>    

@endsection 