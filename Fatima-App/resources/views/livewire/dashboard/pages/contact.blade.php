<div>
    

<!-- navbar -->
@livewire('dashboard.partials.navbar')

<div id="layoutSidenav">
    
    <!-- sidenav -->
    @livewire('dashboard.partials.sidebar')


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
                <div class="mb-4">
                    <!-- Button trigger modal -->
                
                    
                    <div class="container mt-5 px-2">

                        <table class="table table-responsive-lg table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Subject</th>
                                <th scope="col">fullName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                               @if($contacts != null)
                               @foreach ($contacts as $key=> $contact)
                                 <tr>

                                    <th scope="row">{{$key++}}</td>
                                    <td>{{$contact->subject != 'undefined'? $contact->subject: ''}}</td>
                                    <td>{{$contact->fullName != 'undefined'? $contact->fullName: ''}}</td>
                                    <td>{{$contact->email != 'undefined'? $contact->email: ''}}</td>
                                    <td>{{$contact->message != 'undefined'? $contact->message: ''}}</td>
                                    <td>
                                        <a class="p-1 btn btn-sm btn-danger" wire:click='delete({{$contact->id != 'undefined'? $contact->id: ''}})'><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
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