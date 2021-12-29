<!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href="{{route('admin/dashboard')}}"><span>[</span>Web<i>Aplication</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">

        <!-- Dashboard -->
        <li class="br-menu-item">
          <a href="{{route('admin/dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>

        <!-- Branch Management -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Education Department</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">Branch</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('branch.manage')}}" class="sub-link">Manage All Branch</a></li>
            <li class="sub-item"><a href="{{route('branch.create')}}" class="sub-link">Create New Branch</a></li>
          </ul>
        </li>

        <!-- Course Management -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">All Course</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('course.manage')}}" class="sub-link">Manage All Course</a></li>
            <li class="sub-item"><a href="{{route('course.create')}}" class="sub-link">Create New Course</a></li>
          </ul>
        </li>

        <!-- Course Curriculum Management -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">Course Curriculum</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('curriculam.manage')}}" class="sub-link">Manage Course Curriculum</a></li>
            <li class="sub-item"><a href="{{route('curriculam.create')}}" class="sub-link">Create Course Curriculum</a></li>
          </ul>
        </li>

        <!-- Course Batch Management -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">All Batch</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('admition.manage')}}" class="sub-link">Admition Going On</a></li>
            <li class="sub-item"><a href="{{route('batch.manage')}}" class="sub-link">Manage All Batch</a></li>
            <li class="sub-item"><a href="{{route('batch.create')}}" class="sub-link">Create New Batch</a></li>
          </ul>
        </li>

        <!-- Course Coupon Management -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">Coupon Codes</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('coupon.manage')}}" class="sub-link">All Coupon Codes</a></li>
            <li class="sub-item"><a href="{{route('coupon.create')}}" class="sub-link">Add New Coupon Codes</a></li>
          </ul>
        </li>

        <!-- Notic Board Management -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-home-outline tx-20"></i>
            <span class="menu-item-label">Notic Board</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('notice.manage')}}" class="sub-link">All Notic Manage</a></li>
            <li class="sub-item"><a href="{{route('notice.create')}}" class="sub-link">Add A New Notic</a></li>
          </ul>
        </li>

        <!-- Mentor Profile Management -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">HR Department</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-person-outline tx-20"></i>
            <span class="menu-item-label">Mentor Profile</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('mentor.manage')}}" class="sub-link">Manage All Mentor Profile</a></li>
            <li class="sub-item"><a href="{{route('mentor.create')}}" class="sub-link">Create New Mentor Profile</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->
      <br>
    </div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->