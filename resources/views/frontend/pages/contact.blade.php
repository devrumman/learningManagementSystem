@extends ('frontend.layout.template')
@section('body')

  <!-- Breadcrumb Start -->
  <section class="breadcrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact With Us</li>
                    </ol>
                  </nav>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb End -->


  <!--Begin About Us Section-->
<section id="courses" class="courses">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <h2 style="text-align: center; line-height: 1;">If Anyone Wants To Contact Me,</h2><h2 style="text-align: center; line-height: 1;">Please fill out the form and send me your message.</h2>
      </div>
    
        <div class="col-md-6 offset-md-3" style="margin: 30px auto;">
          
          <form action="{{ route('contact.send')}}" method="post" enctype="multipart/form-data">
          @csrf

          @if (Session::has('success_msg'))
          <div class="alert alert-success">{{Session::get('success_msg')}}</div>
          @endif

          <div class="form-grop">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" required="required" autocomplete="off" placeholder="Your Full Name">
          </div>
          <div class="form-grop">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" class="form-control" required="required" autocomplete="off" placeholder="Your Email Address">
          </div>
          <div class="form-grop">
            <label for="phone">Phone No.</label>
            <input type="text" id="phone" name="phone" class="form-control" required="required" autocomplete="off" placeholder="Your Phone No">
          </div>
          <div class="form-grop">
            <label for="massage">Your Massage</label>
            <textarea id="" name="massage" rows="6" class="form-control" placeholder="Write Your Massage....."></textarea>
          </div>

          <div class="form-group">
             <input type="submit" class="btn btn-blue-1" name="send" value="Send Email" style="
             margin: 20px 0;">
          </div>
          </form>
        </div>
    </div>
  </div>
</section>
<!--End About Us Section-->

@endsection