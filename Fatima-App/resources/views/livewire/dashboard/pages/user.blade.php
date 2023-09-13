<div>
    
<!-- navbar -->
@livewire('dashboard.partials.navbar')



<%- include('../../partials/messages') %>
<div id="layoutSidenav">
    
    <!-- sidenav -->
    @livewire('dashboard.partials.sidebar')


    <div id="layoutSidenav_content" >
        <main>
            
            <div class="container-fluid px-4 row">
               
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="w-100 d-flex justify-content-end m-2">
                    <button type="button" class="btn" style="background-color: #492bc4; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add to User
                    </button>
                </div>
                <div class="mb-4">
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
                            <h5 class="modal-title" id="exampleModalLabel">User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent='save'>
                                    @csrf
                                    <div class="mb-3">
                                      <label for="fullname" class="form-label">Fullname</label>
                                      <input type="text" name="fullName" wire:model='name' required class="form-control" id="fullname">
                                      @error('name')
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
                                      <label for="password" class="form-label">password</label>
                                      <input type="password" name="password" wire:model='password' required class="form-control" id="password">
                                      @error('password')
                                        <p class="text-danger py-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                    {{-- <div class="mb-3">
                                      <label for="description" class="form-label">Description</label>
                                      <textarea name="description" wire:model='description' required class="form-control" id="password"></textarea>
                                      @error('description')
                                        <p class="text-danger py-2">{{$message}}</p>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="mb-3">
                                      <label for="image" class="form-label">image</label>
                                      <input type="file" name="image" wire:model='image' required class="form-control" id="image">
                                      @error('image')
                                        <p class="text-danger py-2">{{$message}}</p>
                                      @enderror
                                    </div> --}}
                  
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
                    
                    <div class="container mt-5 px-2">

                        <table class="table table-responsive table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if(isset($users))
                                    @forEach($users as $key=> $user)
                                        <tr>

                                        <th scope="row">{{$key += 1}}</th>
                                        <td>{{$user->name != 'undefined'? $user->name : ''}}</td>
                                        <td>{{$user->email != 'undefined'? $user->email : ''}}</td>
                                        <td>
                                            <button class="p-1 btn btn-sm btn-danger" wire:click='delete({{$user->id != 'undefined'? $user->id : null}})'><i class="fas fa-trash"></i> Delete</button>
                                        </td>
                                        </tr>
                    
                                    @endforEach
                                @endif
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</div>