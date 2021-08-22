@extends('backend.layout.template')


@section('body')
  <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Branch Manage Page</h4>
      <p class="mg-b-0">Manage The Branch Page. All Branch Info Here.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row">
      <div class="col-lg-12">

        <!-- Page Body Content End -->
          <div class="card bd-0 shadow-base">
            <div class="d-md-flex justify-content-between pd-25">

              <!-- Tabel Content Stert -->
              <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-bordered table-hover table-custom">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#Sl.</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Bangla Name</th>
                      <th scope="col">Address Line- 1</th>
                      <th scope="col">Address Line- 2</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ( $branches as $branch )
                    @php $i++; @endphp
                      <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->bangla_name }}</td>
                        <td>{{ $branch->address_line1 }}</td>
                        <td>{{ $branch->address_line2 }}</td>
                        <td>{{ $branch->email }}</td>
                        <td>{{ $branch->phone }}</td>
                        <td>
                          @if($branch->status == 1)
                            <span class="badge badge-success">Active</span> 
                          @elseif($branch->status == 1)
                            <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <ul class="custom-action">
                            <li>
                              <a href="">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href="">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    @endforeach 
                  </tbody>
                </table>
                @if ( $branches->count() == 0 )
                  <div class="alert alert-info">
                    No Branch Added Yet. Please Add A Branch Info.
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