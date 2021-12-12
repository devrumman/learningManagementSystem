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
                      <li class="breadcrumb-item active" aria-current="page">Mentor</li>
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
          
          <section class="team-section clearfix" id="team">
            <div class="row">
                <h2>Meet OUR BEATIFUL TEAM</h2>
                <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
            </div>
            <div class="row">
                <div class="col span_1_of_4 box">
                    <img src="resources/img/rumman-1.jpg" alt="Farhan Abir" class="team-member">
                    <h3>Farhan Abir</h3>
                    <span class="role">Senior Front-End Developer</span>
                    <p>
                        I am a front-end developer. Currently I am enhancing my skill in Javascript. Also I aim to exploring different opportunities in IT sectors in Bangladesh.
                    </p>
                    <div class="social-link">
                        <ul>
                            <li><a href="https://www.facebook.com/farhan.abir"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/Farhanabir20"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="linkedin.com/in/farhan-abir-814b95a4"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li><a href="mailto:farhanhussainabir@gmail.com"><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
    
                <!--===============================Team-member===================================-->
    
                    <div class="col span_1_of_4 box">
                        <img src="resources/img/rumman.jpg" alt="Rumman Ahmed" class="team-member">
                        <h3>Rumman Ahmed</h3>
                        <span class="role">Junior Front-End Developer</span>
                        <p>
                            Hi, This is Rumman, I am a WordPress Theme Developer Expert. I have Good communication skills, Responsible, Dedicated. IT sectors in Bangladesh.
                        </p>
                        <div class="social-link">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100006032105794"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/rumman1991"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/rummanahmed1991/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                <li><a href="mailto:rummanhamed1991@gmail.com"><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <!--=============================Team-member=====================================-->
    
                        <div class="col span_1_of_4 box">
                            <img src="resources/img/shanta.jpg" alt="Shanta Islam Rakhi" class="team-member">
                            <h3>Shanta Islam Rakhi</h3>
                            <span class="role">Customer Support</span>
                            <p>
                                Also, I have handled and helped each type of customer in each type of setting. I understand that obtaining and maintaining loyal repeat business .
                            </p>
                            <div class="social-link">
                                <ul>
                                    <li><a href="https://www.facebook.com/farhan.abir"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/Farhanabir20"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="linkedin.com/in/farhan-abir-814b95a4"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:farhanhussainabir@gmail.com"><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
    
                        <!--============================Team-member======================================-->
    
                            <div class="col span_1_of_4 box">
                                <img src="resources/img/farhan.jpg" alt="Farhan Abir" class="team-member">
                                <h3>Farhan Abir</h3>
                                <span class="role">Senior Front-End Developer</span>
                                <p>
                                    I am a front-end developer. Currently I am enhancing my skill in Javascript. Also I aim to exploring different opportunities in IT sectors in Bangladesh.
                                </p>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="https://www.facebook.com/farhan.abir"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/Farhanabir20"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="linkedin.com/in/farhan-abir-814b95a4"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        <li><a href="mailto:farhanhussainabir@gmail.com"><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
            </div>
        </section>
          
        </div>
    </div>
  </div>
</section>
<!--End About Us Section-->

@endsection


