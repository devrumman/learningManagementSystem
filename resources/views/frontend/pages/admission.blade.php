@extends ('frontend.layout.template')
@section('body')

<section class="student-information">
  <div class="container">
    <div class="row">
      <div class="col-md-6 si-left">
        <h3>Student Information</h3>

        <form action="{{ route('payment') }}" method="POST" class="needs-validation">
          <input type="hidden" value="{{ csrf_token() }}" name="_token" />
          @csrf

          <div class="form-group">
            <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->name}} @else{{old('name')}} @endif">
          </div>

          
          <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->address}} @else{{old('address')}} @endif">
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" name="country" class="form-control" placeholder="Country" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->country}} @else{{old('country')}} @endif">
              </div>
            </div>

            <div class="col-md-4 no-left-padding">
              <div class="form-group">
                <input type="text" name="city" class="form-control" placeholder="District / state" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->city}} @else{{old('city')}} @endif">
              </div>
            </div>

            <div class="col-md-4 no-left-padding">
              <div class="form-group">
                <input type="text" name="zipcode" class="form-control" placeholder="ZIP Code" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->zipcode}} @else{{old('zipcode')}} @endif">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->phone}} @else{{old('phone')}} @endif">
              </div>
            </div>

            <div class="col-md-6 no-left-padding">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required="required" autocomplete="off" value="@if (Auth::check()){{Auth::user()->email}} @else{{old('email')}} @endif">
              </div>
            </div>
          </div>

          
          
          <div class="form-group">
            <input type="hidden" name="course_id" value="{{$course->id}}">
            <input type="hidden" name="course_price" value="{{$course->price}}">
            <input type="hidden" name="batch_id" value="{{$batch->id}}">
            <input type="submit" name="payment" class="btn btn-payment" value="Make Payment">
          </div>
        </form>

      </div>

      <div class="col-md-5 offset-md-1 payment-summary">
        <h4>Purchase Summary</h4>

        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$course->english_titel}}
          <span class="badge-pill">{{$course->price}}/=</span>
          </li>
        </ul>

        <hr>

          <form action="https://shikhbeshobai.com/batch/full-stack-web-development/admission" method="POST" class="coupon-form">
            <input type="hidden" name="_token" value="08d3J0tAs4vMj8t2X8h2knAZfsa0i5qnARiWuNcA">							
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="hidden" name="batchId" value="2">
                  <input type="text" name="code" id="code" placeholder="Apply Coupon Code" required="required" class="form-control" autocomplete="off" value="">
                </div>
              </div>

              <div class="col-md-4 no-left-padding">
                <div class="form-group">
                  <input type="submit" name="applycoupon" id="coupon_btn" value="Apply" class="btn btn-block btn-coupon">
                </div>
              </div>
            </div>
          </form>

        <hr>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Sub Total</strong>
            <span class="badge-pill">BDT 20000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Discount</strong>
            <span class="badge-pill">(BDT <span id="discount">
              0
            </span>)</span>
            </li>
          </ul>

          <hr>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Total</strong>
            <span class="badge-pill"><strong>BDT 20000</strong></span>
            </li>
          </ul>
                    
        
      </div>
    </div>
  </div>
</section>

@endsection
