<div class="container-fluid mx-auto d-flex align-content-center justify-content-center bg-light" style="padding-top: 8%; height: 100vh;">
    <div class="card mt-10 border-0" style="font-size: 16px; margin-top: 100px; height: 250px; width:500px; z-index:-0">

      @if(session()->has('successMsg'))
          <p class="bg-success text-light p-2">{{session('successMsg')}}</p>
      @endif
      @if(session()->has('errorMsg'))
          <p class="bg-danger text-light p-2">{{session('errorMsg')}}</p>
      @endif
     <form wire:submit.prevent='authenticate'>
         <div class="mb-3">
           <label for="username" class="form-label">Username</label>
           <input type="email" name="email" required class="form-control" id="email" aria-describedby="email" wire:model='email'>
           @error('email')
            <p class="text-danger p-1">{{message}}</p>
           @enderror
         </div>
         <div class="mb-3">
           <label for="password" class="form-label">Password</label>
           <input type="password" name="password" wire:model='password' required class="form-control" id="password">
           @error('password')
            <p class="text-danger p-1">{{message}}</p>
           @enderror
         </div>
         
         <div class="d-flex">
           <button type="submit" class="btn btn-lg btn-primary">Submit</button>
         </div>
     </form>
    </div>
 </div>