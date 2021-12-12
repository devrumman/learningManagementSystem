@extends ('frontend.layout.template')
@section('body') 

 <!--Header-->                    
 <section class="emailVerificationPage">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                <img src="{{asset('frontend/assets/images/email_verification.png')}}" class="img-fluid">
            </div>

            <div class="col-md-5 emailvdiv">

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                    
                <p>Thanks for signing up! please check your email for a verification link.</p>
                <p>Before getting started, could you verify your email address by clicking on the link we just emailed to you?</p>
                <form class="mg-t-20" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn std-btn">Click Re-send</button>
                    <button type="submit" class="btn std-btn">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


