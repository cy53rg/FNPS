<div>
    
<!-- navbar -->
@livewire('dashboard.partials.navbar')


<%- include('../../partials/messages') %>
<div id="layoutSidenav">
    
    <!-- sidenav -->
    <@livewire('dashboard.partials.sidebar')


    <div id="layoutSidenav_content" >
        <main>
            @if(session()->has('deleteMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{session('deleteMsg')}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container-fluid px-4 row">
               
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="w-100 d-flex justify-content-end m-2">
                    <button type="button" class="btn" style="background-color: #492bc4; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add to Gallery
                    </button>
                </div>
                <div class="mb-4">
                    <!-- Button trigger modal -->
                   
                    
                    <!-- Modal -->
                    <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <h5 class="modal-title" id="exampleModalLabel">Add To Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form wire:submit.prevent='save' enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="category" wire:model='cate' required class="form-control" id="category">
                                        <option>Select Category</option>
                                        <option value="one">Learning</option>
                                        <option value="two">Games</option>
                                        <option value="three">School</option>
                                        <option value="four">Class</option>
                                    </select>
                                    @error('title')
                                    <p class="text-danger py-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="title" class="form-label">Title</label>
                                  <input type="text" name="title" required class="form-control" id="title" wire:model='title'>
                                </div>
                                <div class="mb-3">
                                  <label for="description" class="form-label">Description</label>
                                  <textarea type="text" name="description" required class="form-control" id="description" wire:model='description'>
                                  </textarea>
                                </div>
                                <div class="mb-3">
                                  <label for="image" class="form-label">image</label>
                                  <input type="file" name="image" required class="form-control" id="image" wire:model='image'>
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
                                <th scope="col">Category</th>
                                <th scope="col">title</th>
                                <th scope="col">details</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if($posts != 'undefined')
                                    @forEach($posts as $key=> $post)
                                        <tr>
                                        <td scope="row">{{$key +=1}}</td>
                                        <td >{{$post->category != 'undefined' ? $post->category : ''}}</td>
                                        <td>{{$post->title != 'undefined' ? $post->title : ''}}</td>
                                        <td>{{$post->description != 'undefined' ? $post->description : ''}}</td>
                                        <td><img src="{{$post->image != 'undefined' ? $post->image : ''}}" alt="image" style="width: 50px; border-radius:50;"></td>
                                        <td>
                                            <button class="p-1 btn btn-sm btn-danger" wire:click='delete({{$post->id != 'undefined' ? $post->id : ''}})'><i class="fas fa-trash"></i> Delete</button>
                                        </td>
                                        {{-- <td>
                                            <a class="p-1 btn btn-sm btn-warning" href="/dashboard/gallery/edit?pst_id=<%= typeof post.id != undefined ? post.id : null%>">Edit</a>
                                        </td> --}}
                                        </tr>
                    
                                    @endforEach
                                @endif

                            </tbody>
                            @if(isset($posts))
                                {{$posts->links()}}
                            @endif
                          </table>
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</div>