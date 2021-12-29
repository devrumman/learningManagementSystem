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
                      <th scope="col">Starting Date</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Bacth Name</th>
                      <th scope="col">Seats</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Mentor Name</th>
                      <th scope="col">Admission Status</th>
                      <th scope="col">Batch Type</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $batches as $batch )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $batch->starting_date }}</td>
                        <td>{{ $batch->course->english_titel }}</td>
                        <td>{{ $batch->batch_name }}</td>
                        <td>{{ $batch->sit_number }}</td>
                        <td>{{ $batch->branch->name }}</td>
                        <td>{{ $batch->mentor->fullname }}</td>
                        <td>
                          @if($batch->admission_status == 1)
                            <span class="badge badge-warning">Admission Going On</span> 
                          @elseif($batch->admission_status == 2)
                            <span class="badge badge-primary">Admission Closed</span>
                          @endif
                        </td>
                        <td>
                          @if($batch->batch_type == 1)
                            <span class="badge badge-info">Online</span> 
                          @elseif($batch->batch_type == 2)
                            <span class="badge badge-dark">Offline</span>
                          @endif
                        </td>
                        <td>
                          @if($batch->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($batch->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                         
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