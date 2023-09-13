<div>
	<div class="sticky-menu">
		<div class="mainmenu-area">
		   <div class="auto-container">
			  <div class="row">
				 <div class="col-lg-9 d-none d-lg-block d-md-none">
					<nav class="navbar navbar-expand-lg justify-content-left">
					   <ul class="navbar-nav">
						  <li class="{{Route::current()->getName() == 'home.index' ? 'active': ''}}"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
						  <li class="{{Route::current()->getName() == 'home.about' ? 'active': ''}}"><a href="{{route('home.about')}}" class="nav-link">About Us</a></li>
						   
						  </li>
						  <li class="{{Route::current()->getName() == 'home.gallery' ? 'active': ''}}"><a href="{{route('home.gallery')}}" class="nav-link">Gallery</a></li>
						  
						  </li>

						  <li class="{{Route::current()->getName() == 'home.contact' ? 'active': ''}}"><a href="{{route('home.contact')}}" class="nav-link">Contact</a></li>
					   </ul>
					</nav>
				 </div>
				 

				 

			  </div>
		   </div>
		</div>
	 </div>
	
</div>