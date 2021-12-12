@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Notice Manage Page</h4>
      <p class="mg-b-0">Manage The Notice Page. All Notice Info Here.</p>
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
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Notice Image</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $notices as $notice )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $notice->title }}</td>
                        <td>{{ $notice->description }}</td>
                        <td>
                          @if($notice->image == NULL)
                            <img src="{{asset('backend/img/notice/default.png')}}" width="50">
                          @else
                            <img src="{{asset('backend/img/notice/' . $notice->image)}}" width="50">
                          @endif
                        </td>
                        <td>
                          @if($notice->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($notice->status == 2)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>

                        <td>
                          <ul class="custom-action">
                            <li>
                              <a href="{{route('notice.edit', $notice->id)}}">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-toggle="modal" data-target="#notice{{$notice->id}}">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                        <!--Delete Start Modal -->
                          <div class="modal fade" id="notice{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This Notic Board Info</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body text-center">
                                  <div class="modal-button">
                                    <ul>
                                      <li>
                                        <form action="{{route('notice.destroy', $notice->id)}}" method="POST">
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
                @if ( $notices->count() == 0 )
                  <div class="alert alert-info message-info">
                    No Notice Board Added Yet. Please Add A Notic Board Info.
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