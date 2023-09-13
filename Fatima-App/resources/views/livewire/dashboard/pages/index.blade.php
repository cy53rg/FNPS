<div>
    <!-- Start preloader -->

<!-- navbar -->
@livewire('dashboard.partials.navbar')

<div id="layoutSidenav">
    
    <!-- sidenav -->
    @livewire('dashboard.partials.sidebar')


    <div id="layoutSidenav_content" >
        <main>
            @if(session()->has('deleteMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" >
                    <p>{{session('deleteMsg')}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container-fluid px-4 row">
               
                <h1 class="mt-4 text-white">Welcome {{$user->name}}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="w-100 d-flex justify-content-end m-2">
                    <button type="button" class="btn" style="background-color: #492bc4; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add to Banner
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
                                <span>{{session('successMsg')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" style="height:20px;" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add To Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            
                              <form wire:submit.prevent='save'>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <select name="title" wire:model='title' required class="form-control" id="title">
                                        <option>Select Page</option>
                                        <option value="home">Home</option>
                                        <option value="about">About</option>
                                        <option value="gallery">Gallery</option>
                                        <option value="contact">Contact</option>
                                    </select>
                                    @error('title')
                                    <p class="text-danger py-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="image" class="form-label">image</label>
                                  <input type="file" wire:model='image' name="image" required class="form-control" id="image">
                                  @error('image')
                                    <p class="text-danger py-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" style="background-color: #492bc4; color: white">Submit</button>
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
                                <th scope="col">title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if($banners->count() > 0)
                                    @forEach($banners as $i=> $banner)
                                        <tr>

                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$banner->title != 'undefined' ? $banner->title : ''}}</td>
                                        
                                        <td><img src="{{$banner->image != 'undefined' ? $banner->image : ''}}" alt="image" style="width: 50px; border-radius:50;"></td>
                                        <td>
                                            <button class="p-1 btn btn-sm btn-danger" wire:click='delete({{$banner->id}})'><i class="fas fa-trash"></i> Delete</button>
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