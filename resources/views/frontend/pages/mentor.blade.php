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

  <section class="">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3>Our world class Mentor</h3>
                <p>With combined experience of over 20 years in the industry, we at #ShikhbeShobai help students, leaders, IT and design pros, project managers—anyone in any role—develop web development, creative, and business skills. The mentors at #ShikhbeShobai is well trained. Our senior trainers have a vast experience of teaching as well as hand on experience. We expect our trainers to resolve student’s queries on the spot and help them become professionals.</p>
            </div>
        </div>

    </div>
</section>

<section class="mentor-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">                        
                    <div class="col-lg-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left sideways">

                            <li><a href="#basic-computer" data-toggle="tab">Basic Computer</a></li>
                            <li><a href="#digital-marketing" data-toggle="tab">Digital Marketing</a></li>
                            <li><a href="#graphic-ui-design" data-toggle="tab">Graphic &amp; UI Design</a></li>
                            <li><a href="#motion-graphics" data-toggle="tab">Motion Graphics</a></li>
                            <li><a href="#visual-design" data-toggle="tab">Visual Design</a></li>
                            <li><a href="#web-design-development" data-toggle="tab">Web Design &amp; Development</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content">

                        @foreach ($batches as $batch)
                        @if ($batch->mentor_id == 2)

                            <div class="tab-pane" id="basic-computer">
                                <div class="row">                           
                                    <div class="col-lg-4">
                                        <div class="mentor-card">
                                            <div class="mentor-image">
                                                <img src="{{asset('backend/img/mentor/' . $mentor->mentor_profile_img)}}" class="img-fluid">
                                            </div>
                                                <h4>{{$mentor->fullname}}</h4>
                                                <p>{{$mentor->designation}}</p>
                                                <a href="https://shikhbeshobai.com/our-mentors/rubaiya-masnun-abanty">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endif    
                        @endforeach       

                                <div class="tab-pane" id="digital-marketing">
                                    <div class="row">
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624789807.png" class="img-fluid">
                                                    </div>
                                                    <h4>খালিদ হোসেন বিজু</h4>
                                                    <p>ডিজিটাল মার্কেটিং স্পেশালিস্ট</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/khalid-hosen-biju">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                    <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639893340.jpg" class="img-fluid">
                                                </div>
                                                    <h4>রাজীব কুমার বর্মন</h4>
                                                    <p>ডিজিটাল মার্কেটিং স্পেশালিস্ট</p>
                                                    <a href="{{route('mentor.details')}}">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624790159.jpg" class="img-fluid">
                                                    </div>
                                                    <h4>তৌফিকুল আরাফাত</h4>
                                                    <p>ডিজিটাল মার্কেটিং স্পেশালিস্ট</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/toufikul-arafat">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                </div>
                                </div>
                                
                                                                <div class="tab-pane" id="graphic-ui-design">
                                    <div class="row">
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639899937.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>আব্দুল কাদের</h4>
                                                    <p>গ্রাফিক এন্ড ইউআই/ইউএক্স ডিজাইন</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/abdul-kader">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639900300.png" class="img-fluid">
                                                                                                                </div>
                                                    <h4>নাইমুল হাসান</h4>
                                                    <p>গ্রাফিক এন্ড ইউআই/ইউএক্স ডিজাইন</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/naimul-hasan">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639898569.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>রাইয়ান সফওয়ান</h4>
                                                    <p>প্রফেশনাল ইউআই/ইউএক্স ডিজাইনার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/raiyan-sofwan">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639898376.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>রবি খান</h4>
                                                    <p>প্রফেশনাল গ্রাফিক এন্ড ইউআই ডিজাইনার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/robi-khan">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                </div>
                                </div>
                                
                                                                <div class="tab-pane" id="motion-graphics">
                                    <div class="row">
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624790008.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>ইমরান হোসেন সজীব</h4>
                                                    <p>মোশন এন্ড গ্রাফিক ডিজাইনার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/imran-hossain-shojib">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                </div>
                                </div>
                                
                                                                <div class="tab-pane" id="visual-design">
                                    <div class="row">
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639900370.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>নিশাতুল ইসলাম</h4>
                                                    <p>আর্কিটেকচারাল ডিজাইনার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/nishatul-islam">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                </div>
                                </div>
                                
                                                                <div class="tab-pane" id="web-design-development">
                                    <div class="row">
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1614671126.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>ফয়সাল হামিদ হিমেল</h4>
                                                    <p>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট এন্ড পিএইচপি, লারাভেল</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/faisal-hamid-hemel">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624791453.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>ফরিদ রনি</h4>
                                                    <p>প্রফেশনাল ফুল স্ট্যাক ওয়েব ডেভেলপার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/forid-rony">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624791285.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>মিনহাজ ফয়সাল</h4>
                                                    <p>প্রফেশনাল ফুল স্ট্যাক ওয়েব ডেভেলপার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/minhaz-faysal">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1615710192.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>ওমর ফারুক</h4>
                                                    <p>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/omar-faruk">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1624789202.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>সোহাগ হাসান</h4>
                                                    <p>ফুল স্ট্যাক ওয়েব ডেভেলপার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/shohag-hasan">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639898088.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>তাহসিন শাহরিয়ার</h4>
                                                    <p>ফুল স্ট্যাক ওয়েব ডেভেলপার</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/tahsin-shahriar">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                
                                            <div class="col-lg-4">
                                                
                                                <div class="mentor-card">
                                                    <div class="mentor-image">
                                                                                                                        <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1639898135.jpg" class="img-fluid">
                                                                                                                </div>
                                                    <h4>তৌফিকুল বারি তনয়</h4>
                                                    <p>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</p>
                                                    <a href="https://shikhbeshobai.com/our-mentors/toufiqul-bari-tonoy">View Details</a>
                                                </div>
                                                
                                            </div>
                                        
                                                                                </div>
                                </div>
                                
                                                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection


