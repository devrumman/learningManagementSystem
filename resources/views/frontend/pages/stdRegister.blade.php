@extends ('frontend.layout.template')
@section('body')


<!--Header-->                	
<section class="stdLoginPage">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <img src={{asset('frontend/assets/images/motivaton.png')}} class="img-fluid">
      </div>

      <div class="col-md-5 register-opt">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
      
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h2>Welcome, You Can Register</h2>
        <p>Lets Start Your Journey With  With Us...</p>

        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="" value="">						
          <div class="form-group">
            <input id="name" type="text" class="form-control " placeholder="Enter your Full Name" name="name" value="" required autocomplete="name" autofocus>
          </div>

          <div class="form-group">
            <input id="email" type="email" class="form-control " placeholder="Email Address" name="email" value="" required autocomplete="email" autofocus>
          </div>
          
          <div class="form-group">
            <input id="phone" type="text" class="form-control " placeholder="Enter your Phone No" name="phone" value="" required autocomplete="phone" autofocus>
          </div>

          <div class="form-group">
              <input id="password" type="password" class="form-control " name="password" placeholder="Enter your Password" required autocomplete="new-password">
          </div>

          <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-Type Password" required autocomplete="new-password">
          </div>

          <div class="form-group">
            <button type="submit" class="btn std-btn">Sign Up</button>
          </div>						
        </form>

        <div class="extra-info">
          <ul>
            <li>
              <a href="{{route('login')}}" class="tx-info tx-12 d-block mg-t-10">Already a Member? Signin Here</a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>

@endsection