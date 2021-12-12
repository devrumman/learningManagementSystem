@extends ('frontend.layout.template')
@section('body') 
 <!--Header-->                
<section class="stdProfile">
  <div class="container">
    <h2>Welcome, {{Auth::user()->name}}</h2>

    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
      <!-- Tab Panel Head -->
      <div class="profile-tab-nav border-right">
        <div class="p-4">
          <div class="img-circle text-center mb-3">
            @if ( !empty(Auth::user()->image))
                <img src="{{asset('backend/img/user/')}}/{{Auth::user()->image}}" class="shadow">
            @else
                <img src="{{asset('backend/img/user/default.png')}}" class="shadow">
            @endif
          </div>
          <h4 class="text-center">{{Auth::user()->name}}</h4>
        </div>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
            <i class="fa fa-home text-center mr-1"></i> 
            Profile
          </a>
          <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
            <i class="fa fa-tv text-center mr-1"></i> 
            Course Purchase History
          </a>
          <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
            <i class="fa fa-bell text-center mr-1"></i> 
            Notice Board
          </a>
          <a class="nav-link" aria-selected="false" href="https://shikhbeshobai.com/logout" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-center mr-1"></i> 
            Logout
          </a>
          <form id="logout-form" action="https://shikhbeshobai.com/logout" method="POST" class="d-none">
            <input type="hidden" name="_token" value="lZJsJiESqDw8B6idIOEY8YO20eEJ6vD0L5Hyv8i6">                        
          </form>
        </div>
      </div>
      <!-- Tab Panel Body -->
      <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <!-- Profile Information -->
        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
          <h3>Edit Your Profile Details Here.</h3>
          <form action="{{route('student.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="row">
              <div class="col-md-6">    
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" value="{{Auth::user()->name}}" required="required" name="name">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" value="{{Auth::user()->email}}" required="required" readonly disabled>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control"  value="{{Auth::user()->phone}}" required="required" name="phone">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control"  value="{{Auth::user()->address}}" required="required" name="address">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control"  value="{{Auth::user()->city}}" required="required" name="city">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control"  value="{{Auth::user()->country}}" required="required" name="country">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Zip Code</label>
                  <input type="text" class="form-control"  value="{{Auth::user()->zipcode}}" required="required" name="zipcode">
                </div>
              </div>
            
              <div class="col-md-6">
                  <label>Profile Image</label>
                  <input type="file" name="image" class="form-control-file">
              </div>
            </div>  
            <div>
              <button type="submit" class="btn std-btn">Update Change</button>
            </div>
        </form>

        </div>

        <div class="tab-pane fade tab-heading" id="security" role="tabpanel" aria-labelledby="security-tab">
          <h3 class="mb-4">Course Purchase History</h3>
          <h4>Change Your Life with <span>Shikhbe Shobai</span></h4>
          <p>Shikhbe Shobai teaches you the skills you need to thrive and earn online - now and in the future.</p>
          <div class="row">
            <div class="col-md-12">
              <!-- No Course Purchased -->
              <div class="no-course-purchased">
                <div class="course-alert">
                  <p><span>You Doesn't Choose Any Skill Development Course For Your Life Yet.</span> To grow with us please purchase now</p>
                  <a href="https://shikhbeshobai.com/courses" class="btn std-btn">Our All Courses</a>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
          <h3 class="mb-4">Notice Board</h3>
          <div class="row">
            <div class="col-md-12">
              <div class="notice-board">

              {{-- @include('backend.flash-message')
              @php $i = 0; @endphp
              @foreach ( $notices as $notice )
              @php $i++; @endphp --}}

                <h3>Rumman AHmed</h3>
                <img src="{{asset('frontend/assets/images/logo.png')}}" class="img-fluid">
                <p>Rumman AHmed</p>

              {{-- @endforeach
              @if ( $notice->count() == 0 )
                <div class="alert alert-info message-info">
                  No Mentor Porfile Added Yet. Please Add A Notice Info.
                </div>
              @endif     --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection