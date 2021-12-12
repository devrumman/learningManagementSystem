@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage All The Batch Of Admission Going On</h4>
      <p class="mg-b-0">Manage The Batch Page. All Batch Info Here.</p>
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
                      <th scope="col">Bacth Name</th>
                      <th scope="col">Admission Status</th>
                      <th scope="col">Batch Type</th>
                      <th scope="col">Starting Date</th>
                      <th scope="col">Class Day</th>
                      <th scope="col">Class Time</th>
                      <th scope="col">Seats</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Mentor Name</th>
                      <th scope="col">Fb Group Link</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $batches as $batch )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $batch->batch_name }}</td>
                        <td>
                          @if($batch->admission_status == 1)
                            <span class="badge badge-success">Admission Going On</span> 
                          @elseif($batch->admission_status == 2)
                            <span class="badge badge-danger">Admission Closed</span>
                          @endif
                        </td>
                        <td>
                          @if($batch->batch_type == 1)
                            <span class="badge badge-info">Online</span> 
                          @elseif($batch->batch_type == 2)
                            <span class="badge badge-danger">Offline</span>
                          @endif
                        </td>
                        <td>{{ $batch->starting_date }}</td>
                        <td>{{ $batch->class_day }}</td>
                        <td>{{ $batch->class_time }}</td>
                        <td>{{ $batch->sit_number }}</td>
                        <td>{{ $batch->branch->name }}</td>
                        <td>{{ $batch->course->english_titel }}</td>
                        <td>{{ $batch->mentor->fullname }}</td>
                        <td>{{ $batch->fb_group }}</td>
                        <td>
                          @if($batch->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($batch->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <ul class="custom-action">
                            <li>
                              <a href="{{route('batch.edit', $batch->id)}}">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-toggle="modal" data-target="#batch{{$batch->id}}">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                        <!--Delete Start Modal -->
                          <div class="modal fade" id="batch{{$batch->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This Batch</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body text-center">
                                  <div class="modal-button">
                                    <ul>
                                      <li>
                                        <form action="{{route('batch.destroy', $batch->id)}}" method="POST">
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
                @if ( $batches->count() == 0 )
                  <div class="alert alert-info message-info">
                    No Batch Added For Admission Right Now. Please Add A Batch Info Start Admission Process.
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