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
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
        <div class="col-md-12">
          
        </div>
    </div>
  </div>
</section>
<!--End About Us Section-->

@endsection