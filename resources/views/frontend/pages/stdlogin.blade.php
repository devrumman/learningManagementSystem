@extends ('frontend.layout.template')
@section('body')

  <section class="pd-tp-80 studentlogin">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">

          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />
    
          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <h3>Welcome, You Can Login And Manage Your account </h3>
          <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
            @csrf
            <!-- Email Address -->
            <div class="form-group">
              <x-label for="email" :value="__('Email')" />
    
              <x-input id="email" class="form-control" type="email" placeholder="Your Email Address" name="email" :value="old('email')" required autofocus />
            </div>
    
            <!-- Password -->
            <div class="form-group">
              <x-label for="password" :value="__('Password')" />
              <x-input id="password" class="form-control"
                type="password"
                name="password"
                placeholder="Your Password"
                required autocomplete="current-password" />
            </div>
    
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
          </form>
    
            <div class="mg-t-60 tx-center">Forget Password 
              <a href="{{route('password.request')}}" class="tx-info">Reset Your Password</a>
            </div>
            <div class="tx-center">Not yet a member?
              <a href="{{route('register')}}" class="tx-info">Sign Up</a>
            </div>
    
        </div>
      </div>
    </div>
  </section>

      

@endsection