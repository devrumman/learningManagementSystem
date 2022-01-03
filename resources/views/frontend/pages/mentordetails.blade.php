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
                      <li class="breadcrumb-item active" aria-current="page">Our Mentor</li>
                    </ol>
                  </nav>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb End -->


<!--Begin About Us Section-->

<section class="pd-tp-80 about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-12">
				<h2 class="sec-title">Mentor Biography</h2> </div>
		</div>
	</div>
</section>
<section class="mentor-details-page">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="mentor-img-card"> 
          <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/1614671126.jpg" class="img-fluid"> 
        </div>
			</div>
			<div class="col-lg-9 mentor-individual-data">
				<h3>ফয়সাল হামিদ হিমেল</h3>
				<h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট এন্ড পিএইচপি, লারাভেল</h4>
				<h4>প্রশিক্ষণ দিয়েছেন ৫৫০০+ শিক্ষার্থী</h4>
				<p>ফুল স্ট্যাক ওয়েব ডেভেলপার এবং লারাভেল এক্সপার্ট ফয়সাল হামিদ হিমেল শিখবে সবাই এর একজন কো-ফাউন্ডার। মেন্টরিংয়ে আছেন প্রায় ৫ বছর ধরে। প্রায় ৫৫০০ এর অধিক শিক্ষার্থী উনার কাছ থেকে ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট এবং লারাভেল এর প্রশিক্ষন নিয়েছেন। তিনি নিজেও একজন সফল ফ্রিল্যানার। দীর্ঘদিন ধরে আপওয়ার্কে টপ রেটেড সেলার হিসেবে কাজ করছেন। পাশপাশি ফাইভারেও নিয়মিত বিরতিতে কাজ করা হয়। লোকাল মার্কেটপ্লেসেও রয়েছে উনার বড় বড় কাজ। উনার নেয়া ক্লাসের ধরন, কারিকুলাম, শিক্ষার্থীদের পিছনে পরিশ্রম, সবকিছু মিলে শিখবে সবাই এর শিক্ষার্থীদের দেয়া গোপন ভোট অনুযায়ী ৯০.৮৫ শতাংশ স্যাটিসফেকশন ধরে রেখেছেন। সম্প্রতি উনার ২ জন শিক্ষার্থী ফাইভারে “টপ রেটেড সেলার” হয়েছেন। এছারাও বেশ কয়েকজন শিক্ষার্থী Bkash, Sheba xyz, Bit Byte Technologies এর মতো কোম্পানিতে জব করছেন। শিক্ষাগত জীবনে তিনি ইউল্যাব থেকে কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিংয়ে বিএসসি সম্পন্ন করেছেন। এছাড়াও তিনি বর্তমানে ইউল্যাব বিশ্ববিদ্যালয়ের সিএসই ডিপার্টমেন্ট এর গেস্ট ফ্যাকাল্টি হিসেবে আছেন।</p>
				<!-- Mentor Badge Start -->
				<div class="mentor-badge">
					<div class="marketplace-badge">
						<ul>
							<li> <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/badge/981891538.png" class="img-fluid" width="100"> </li>
							<li> <img src="https://shikhbeshobai.com/public/backend/assets/img/mentors/badge/184925920.png" class="img-fluid" width="100"> </li>
						</ul>
					</div>
				</div>
				<!-- Mentor Badge End -->
			</div>
		</div>
	</div>
</section>
<!--End About Us Section-->

@endsection