@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage All The Course Curriculam</h4>
      <p class="mg-b-0">Manage The Course Curriculam. All Course Curriculam Info Here.</p>
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
                      <th scope="col">Course Title</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $curriculams as $curriculam )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $curriculam->course->english_titel }}</td>
                        <td>
                          @if($curriculam->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($curriculam->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                        <ul class="custom-action">
                          <li>
                            <a href="{{route('curriculam.edit', $curriculam->id)}}">
                              <i class="fa fa-edit"></i>
                            </a>
                          </li>
                          <li>
                            <a href="" data-toggle="modal" data-target="#curriculam{{$curriculam->id}}">
                              <i class="fa fa-trash"></i>
                            </a>
                          </li>
                        </ul>
                        </td>
                        <!--Delete Start Modal -->
                          <div class="modal fade" id="curriculam{{$curriculam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This Course Curriculam</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body text-center">
                                  <div class="modal-button">
                                    <ul>
                                      <li>
                                        <form action="{{route('curriculam.destroy', $curriculam->id)}}" method="POST">
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

                @if ( $curriculams->count() == 0 )
                  <div class="alert alert-info message-info">
                    No Course Curriculam Added Yet. Please Add A New Course Curriculam First.
                  </div>
                @endif  
              </div>
              <!-- Tabel Content End -->
            </div>
            
                
            <form action="{{route('curriculam.create')}}" method="GET" enctype="multipart/form-data">
              @csrf
           
              <div class="form-group text-center">
                <input type="submit" name="addcurriculam" value="Add Curriculam" class="btn btn-teal mg-b-10">
              </div>

            </form>
            
            
          </div><!-- card -->
        <!-- Page Body Content End -->
        
      </div>
    </div>  
  </div>    

@endsection 