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
                          Add Comment
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
                              <form action={{route('dash.addComment')}} method="POST" enctype="multipart/form-data">
                              <form >
                                @csrf
                                <div class="mb-3">
                                  <label for="fullname" class="form-label">Fullname</label>
                                  <input type="text" name="fullName" wire:model='fullName' required class="form-control" id="fullname">
                                  @error('fullName')
                                    <p class="text-danger py-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="role" row='3' class="form-label">Comment</label>
                                  <textarea type="text" name="comment" wire:model='comment' required class="form-control" id="comment">

                                  </textarea>
                                  @error('office')
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
                              <th scope="col">Comment</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Action</th>
                              {{-- <th scope="col">Action</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                              @if($comments != 'undefined')
                                  @forEach($comments as $key=> $comment)
                                      <tr>
  
                                      <th scope="row">{{$key += 1}}</th>
                                      <td><img src="{{$comment->image != 'undefined' ? $comment->image : '' }}" alt="image" style="width: 50px; border-radius:50;"></td>
                                      <td>{{$comment->fullName != 'undefined' ? $comment->fullName : '' }}</td>
                                      <td>{{$comment->comment != 'undefined' ? $comment->comment : '' }}</td>
                                      <td>
                                          <div>
                                            
                                            <a class="p-1 btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2" wire:click='edit({{$comment->id != 'undefined' ? $comment->id : '' }})'><i class="fas fa-edit"></i> Edit</a>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                            <a class="p-1 btn btn-sm btn-danger" wire:click='delete({{$comment->id != 'undefined' ? $comment->id : '' }})'><i class="fas fa-trash"></i> Delete</a>
                                          </div>
                                      </td>
                                      {{-- <td>
                                          <a class="p-1 btn btn-sm btn-warning" wire:click='edit({{$staff->id != 'undefined' ? $staff->id : '' }})'>Edit</a>
                                      </td> --}}
                                      </tr>
                                      
                                  @endforeach
                                  {{$comments->links()}}
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form wire:submit.prevent='update'>
              <div class="mb-3">
                  <input type="hidden" name="updateId" wire:model='updateId' required class="form-control">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="updateFullName" wire:model='updateFullName' required class="form-control" id="fullname">
                @error('fullName')
                  <p class="text-danger py-2">{{$message}}</p>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="role" row='3' class="form-label">Comment</label>
                <textarea type="text" name="updateComment" wire:model='updateComment' required class="form-control" id="comment">

                </textarea>
                @error('office')
                  <p class="text-danger py-2">{{$message}}</p>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" name="updateImage" wire:model='updateImage' class="form-control" id="image">
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
  
  
  
  </div>
