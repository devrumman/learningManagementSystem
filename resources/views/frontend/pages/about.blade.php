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
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-12">
              <h2 class="sec-title">About Us</h2>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <h3>Simple-E-learning-platform-in-laravel</h3>
              <p>LMS-Laravel is a Learning Management System (or LMS) that facilitates the creation of educational content by allowing you to manage courses and learning modules. The platform is simple and intuitive and provides features for:
                1. The Teacher (course creator)
                2. The Student (or user)
                3.The Admin
              As the name suggests, LMS-laravel is built on the latest Laravel framework, and uses various open source packages. This application is still in development, if you want to collaborate on the development, send us an email:</p>
              <p>The project has three user roles (Admin, Author, and Student). Laravel framework in used which uses MVC architecture. Various laravel functionalities like migration, seeding, requests and MVC are used. Every user has different and restricted (Author) view. </p>
          </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <h3>Author</h3>
            <p>Can create and view all courses. Can update and delete only owned courses. Has author dashboard where he/she can see all enrollment requests. Has a profile page to update personal details.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <h3>Student</h3>
            <p>Can view basic info of all courses like title, thumbnail, general description (not the actual course data), author, creation date. Can send enroll request to the course author. Can only read course contents which he/she is enrolled in. Can unenroll himself/herself from a course. Can mark a course as completed. Has student dashboard where he/she can see all the enrolled courses. Has a profile page to update personal details.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <h3>Guest/Visitor</h3>
            <p>Can view listing of all the courses. Can register as a author or student.</p>
        </div>
      </div>

  </div>
  </div>
</section>
<!--End About Us Section-->

@endsection