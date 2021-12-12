<!-- Header -->
  <header class="navbar-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <span>
                    <img style="width: 100px;margin-top: 10px;margin-bottom: 10px;" src="{{asset('frontend/assets/images/logo.png')}}" alt="logo">
                </span>
            </a>
            <button class="navbar-toggler" type="button" id="sidebarCollapse">
                <span class="navbar-toggler-icon icofont-navigation-menu"></span>
            </button>
            <div class="navbar-collapse justify-content-center" id="sidebar">
             
                <ul class="navbar-nav">
                     
                    <li class="nav-item active">
                        <a class="nav-link section-scroll" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section-scroll" href="{{route('allcourse')}}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section-scroll" href="{{route('mentor')}}">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section-scroll" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section-scroll" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll="" class="nav-link section-scroll live" href="https://www.facebook.com/developerinbd/" target="_blank">LIVE</a>
                    </li>
                    
                    {{-- <li class="nav-item">
                        <a data-scroll="" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About Us
                        </a>
                        <div class="dropdown-menu dropdown-menu-about" aria-labelledby="navbarDropdown">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">Privilege Card</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    
                </ul>
            </div>

            <div class="ml-auto ml-auto-mobile top-bar">
                @if (Auth::check())

                <div class="dropdown">
                    <button class="after-login-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{Auth::user()->name}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
                        <a class="dropdown-item" href="{{route('stdDashboard')}}">Dashboard</a>
                        <a class="dropdown-item" href="#">Another action</a>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="icon ion-power"></i> Sign Out
                        </a>
                      </form> 
                      
                    </div>
                  </div>
                
                @else

                    <a href="{{route('stdLogin')}}" class="login-btn"><i class="icofont-login"></i> Signin</a>
                    <a href="{{route('stdRegister')}}" class="login-btn mobile-hide"><i class="icofont-business-man-alt-1"></i> Signup</a>

                @endif
                
               
                                                                     

            </div>
        </div>
    </nav>
  </header>
<!--Header-->  