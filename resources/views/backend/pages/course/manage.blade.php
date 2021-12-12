@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Course Manage Page</h4>
      <p class="mg-b-0">Manage The Course Page. All Course Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            @include('backend.flash-message')

            <div class="d-md-flex justify-content-between pd-25">
              <!-- Tabel Content Stert -->
              <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-bordered table-hover table-custom">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#Sl.</th>
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Regular Price</th>
                      <th scope="col">Course Duration</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $courses as $course )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>
                          @if($course->image == NULL)
                            <img src="{{asset('backend/img/course/default.png')}}" width="50">
                          @else
                            <img src="{{asset('backend/img/course/' . $course->image)}}" width="50">
                          @endif
                        </td>
                        <td>{{ $course->english_titel }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->course_duration }}</td>
                        <td>
                          @if($course->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($course->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <ul class="custom-action">
                            <li>
                              <a href="{{route('course.edit', $course->id)}}">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-toggle="modal" data-target="#course{{$course->id}}">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                        <!--Delete Start Modal -->
                          <div class="modal fade" id="course{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This Course</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body text-center">
                                  <div class="modal-button">
                                    <ul>
                                      <li>
                                        <form action="{{route('course.destroy', $course->id)}}" method="POST">
                                          @csrf
                                          <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                      </li>
                                      <li>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!--Delete End Modal -->  
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
                @if ( $courses->count() == 0 )
                  <div class="alert alert-info message-info">
                    No Course Added Yet. Please Add A New Course First.
                  </div>
                @endif  
              </div>
              <!-- Tabel Content End -->

            </div>
          </div><!-- card -->
        <!-- Page Body Content End -->
        
      </div>
    </div>  
  </div>    

@endsection 