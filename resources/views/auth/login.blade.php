@extends('layouts.adminlayouts')
@section('body')

<div class="row no-gutters flex-row-reverse ht-100v">
    <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">

      <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
        <h4 class="tx-inverse tx-center">Sign In</h4>
        <p class="tx-center mg-b-60">Welcome back my friend! Please sign in.</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
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

          <div class="mg-t-60 tx-center">Forget Password <a href="{{route('password.request')}}" class="tx-info">Reset Your Password</a></div>
          <div class="tx-center">Not yet a member? <a href="{{route('register')}}" class="tx-info">Sign Up</a></div>

      </div><!-- login-wrapper -->
    </div><!-- col -->

    <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
        <div class="wd-250 wd-xl-450 mg-y-30">
            <div class="signin-logo tx-28 tx-bold tx-white"><span class="tx-normal">[</span> Web <span class="tx-info">Application</span> <span class="tx-normal">]</span></div>
            <div class="tx-white mg-b-60">The Admin Template For Coaching/Institute</div>

            <h5 class="tx-white">Register branch, courses, mentor and other components. Role management based UI.</h5>
            <p class="tx-white-6">Coaching/Institute Management System is a web application made with Laravel. This system aids in maintaining information regarding teachers, students and other components. Coaching can use this type of system to manage information systematically.
            </p>
            <p class="tx-white-6 mg-b-60">You can download this project and also make changes in the system to make it even better. Coaching Management System can provide a lot of help to beginner laravel developers to enhance their skills and knowledge regarding laravel.</p>
            <a href="developerrumman.xyz" class="btn btn-outline-light bd bd-white bd-2 tx-white pd-x-25 tx-uppercase tx-12 tx-spacing-2 tx-medium">Contect Us</a>
        </div><!-- wd-500 -->
    </div>
</div><!-- row -->

@endsection