<div>
  <!-- Start preloader -->
<div id="preloader"></div>
<!-- End preloader -->

<!-- navbar -->
@livewire('dashboard.partials.navbar')

<div id="layoutSidenav">
    <!-- sidenav -->
    @livewire('dashboard.partials.sidebar')
    
    <div id="layoutSidenav_content" >
        <main>
            <div>
              <div class="container-fluid px-4 row">
               
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="w-100 d-flex justify-content-end m-2">
                 
                    <button type="button" class="btn" style="background-color: #492bc4; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Staff
                    </button>
                </div>
                  <div class="">
                    <!-- Button trigger modal -->
                   
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      @if(session()->has('errorMsg'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <p>{{session('errorMsg')}}</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(session()->has('successMsg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p>{{session('successMsg')}}</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                      <div class="modal-dialog">
                        
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action={{route('dash.addStaff')}} method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" name="fullName" wire:model='fullName' required class="form-control" id="fullname">
                                @error('fullName')
                                  <p class="text-danger py-2">{{$message}}</p>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" wire:model='email' required class="form-control" id="email">
                                @error('email')
                                  <p class="text-danger py-2">{{$message}}</p>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="role" class="form-label">Office</label>
                                <input type="text" name="office" wire:model='office' required class="form-control" id="office">
                                @error('office')
                                  <p class="text-danger py-2">{{$message}}</p>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" wire:model='description' required class="form-control" id="password"></textarea>
                                @error('description')
                                  <p class="text-danger py-2">{{$message}}</p>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">image</label>
                                <input type="file" name="image" wire:model='image' required class="form-control" id="image">
                                @error('image')
                                  <p class="text-danger py-2">{{$message}}</p>
                                @enderror
                              </div>
            
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn" style="background-color: #492bc4; color: white">Submit</button>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  <div class="container mt-5 px-2">

                    <table class="table table-responsive table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Office</th>
                            <th scope="col">description</th>
                            <th scope="col">Action</th>
                            {{-- <th scope="col">Action</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                            @if($staffs != 'undefined')
                                @forEach($staffs as $key=> $staff)
                                    <tr>

                                    <th scope="row">{{$key += 1}}</th>
                                    <td><img src="{{$staff->image != 'undefined' ? $staff->image : '' }}" alt="image" style="width: 50px; border-radius:50;"></td>
                                    <td>{{$staff->fullName != 'undefined' ? $staff->fullName : '' }}</td>
                                    <td>{{$staff->email != 'undefined' ? $staff->email : '' }}</td>
                                    <td>{{$staff->office != 'undefined' ? $staff->office : '' }}</td>
                                    <td>{{$staff->description != 'undefined' ? $staff->description : '' }}</td>
                                    <td>
                                        <div>
                                          <a class="p-1 btn btn-sm btn-danger" wire:click='delete({{$staff->id != 'undefined' ? $staff->id : '' }})'><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <a class="p-1 btn btn-sm btn-warning" wire:click='edit({{$staff->id != 'undefined' ? $staff->id : '' }})'>Edit</a>
                                    </td> --}}
                                    </tr>
                                    
                                @endforeach
                                {{$staffs->links()}}
                            @endif
                        </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>  
            </div>
        </main>
    </div>

</div>



</div>