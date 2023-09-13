<div>
	 <!-- START PAGEBREDCUMS -->
	 <div class="page-banner page-banner-overlay" data-background="assets/img/bg/po.jpg">
		<div class="container h-100">
		   <div class="row h-100">
			  <div class="col-lg-12 my-auto">
				 <div class="page-banner-content text-center">
					<h2 class="page-banner-title">Contact Page</h2>
					<div class="page-banner-breadcrumb">
					   <p><a href="#">Home</a> contact</p>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<div class="page-banner-shape"></div>
	 </div>
	 <!-- END PAGEBREDCUMS -->

	 <!-- START CONTACT PAGE SECTION -->
	 <section id="contcat" class="section-padding">
		<div class="auto-container">
		   <div class="row">
			  <div class="col-lg-5 col-md-5 col-12 mb-lg-0 mb-md-0 mb-5">
				<div class="address-box-wrap bg-gray shadow-sm p-lg-5 p-md-3 p-3">
					<div class="address-box-sin mb-4">
					   <div class="address-box-icon">
						  <i class="icofont-location-pin"></i>
					   </div>
					   <div class="address-box-des">
						  <h4>Office Address</h4>
						  <p>Myers Street, Brooklyn <br> NY 10004, United States</p>
					   </div>
					</div>
					<!-- end single address box -->
					<div class="address-box-sin mb-4">
					   <div class="address-box-icon">
						  <i class="icofont-envelope-open"></i>
					   </div>
					   <div class="address-box-des">
						  <h4>Send Email</h4>
						  <p>info@your_mail.com <br> info@your_website.com</p>
					   </div>
					</div>
					<!-- end single address box -->
					<div class="address-box-sin mb-4">
					   <div class="address-box-icon">
						  <i class="icofont-fax"></i>
					   </div>
					   <div class="address-box-des">
						  <h4>Phone & Fax</h4>
						  <p>+123-456-0975 <br> +456-123-675</p>
					   </div>
					</div>
					<!-- end single address box -->
					<div class="address-box-sin">
					   <div class="address-box-icon">
						  <i class="icofont-eye"></i>
					   </div>
					   <div class="address-box-des">
						  <h4>Opening Time</h4>
						  <p>Mon - Sat: 9 AM - 5 PM <br> Sun: Close</p>
					   </div>
					</div>
					<!-- end single address box -->
				</div>
			  </div>
			  <!-- end col -->
			  <div class="col-lg-7 col-md-7 col-12 pl-lg-5 pl-md-3 pl-0">
				 <div class="contact-heading mb-5">
					<h2>Join With Us</h2>
				 </div>
				 <div class="contact-form-wrap">
					{{-- <form id="main-form" class="contact-form form" name="enq" method="POST" action="form-process.php"> --}}
					<form id="main-form" class="contact-form form" wire:submit.prevent ='SendData'>
						<div class="row">
						   <div class="col-md-12">
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
						   </div>
						  <div class="col-md-6">
							 <div class="form-group">
								<span class="form-icon"><i class="icofont-user"></i></span>
								<input type="text" class="form-control" wire:model='fullName' id="name" placeholder="John" required>
								<label for="name">Full Name*</label>
								@error('fullName')
								<p class="text-danger p-1">{{message}}</p>
							   @enderror
							 </div>
						  </div>
						  <div class="col-md-6">
							 <div class="form-group">
								<span class="form-icon"><i class="icofont-envelope"></i></span>
								<input type="email" class="form-control" id="email" placeholder="example@xyz.com" wire:model='email' required>
								<label for="email">Email*</label>
								@error('email')
								<p class="text-danger p-1">{{message}}</p>
							   @enderror
							 </div>
						  </div>
					   </div>
					   <div class="row">
						  <div class="col-md-6">
							 <div class="form-group">
								<span class="form-icon"><i class="icofont-ui-dial-phone"></i></span>
								<input type="text" class="form-control" id="number" placeholder="xxx-xxx-xxxx" wire:model='phoneNumber' required>
								<label for="number">Contact Number*</label>
								@error('phoneNumber')
								<p class="text-danger p-1">{{message}}</p>
							   @enderror
							 </div>
						  </div>
						  <div class="col-md-6">
							 <div class="form-group">
								<span class="form-icon"><i class="icofont-at"></i></span>
								<input type="text" class="form-control" id="subject" placeholder="Subject" wire:model='subject' required>
								<label for="subject">Subject*</label>
								@error('subject')
								<p class="text-danger p-1">{{message}}</p>
							   @enderror
							 </div>
						  </div>
					   </div>
					   <div class="form-group form-message">
						  <textarea class="form-control" id="message" wire:model='message' rows="6" placeholder="Message"></textarea>
						  <label for="message">Message</label>
						  @error('message')
						  <p class="text-danger p-1">{{message}}</p>
						 @enderror
					   </div>
					   <div class="text-center wow fadeInUp">
						   <div class="actions">
							   <input value="SUBMIT MESSAGE" name="submit" id="submitButton" class="btn con-btn" title="Click here to submit your message!" type="submit">
							   <img src="assets/img/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
							   
						   </div>
					   </div>
					</form>
				 </div>
			  </div>
			  <!-- end col -->
		   </div>
		</div>
	 </section>
	 <!-- END CONTACT PAGE SECTION -->

	 <!-- START MAP SECTION -->
	 <div class="section-padding py-0">
		<!-- start google map -->
		<div class="gmap_canvas">
		   <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Brooklyn%20NY%2010004&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
		</div>
		<!-- end google map -->
	 </div>
	 <!-- END MAP SECTION -->

	 <!-- START CLIENT LOGO SECTION -->
	 <div id="clients" class="client-padding bg-gray">
		 <div class="container">
			 <div class="row mb-lg-0 mb-md-0 mb-5">
				 <div class="col">
					 <div class="clients-slides owl-carousel owl-theme">
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/1.png"></a>
						 </div>
						 <!-- end single item -->
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/2.png"></a>
						 </div>
						 <!-- end single item -->
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/3.png"></a>
						 </div>
						 <!-- end single item -->
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/4.png"></a>
						 </div>
						 <!-- end single item -->
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/5.png"></a>
						 </div>
						 <!-- end single item -->
						 <div class="single-client-item">
							 <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/6.png"></a>
						 </div>
						 <!-- end single item -->
					 </div>
				 </div>
			 </div>
		 </div>  
	 </div>
	 <!-- START CLIENT LOGO SECTION -->

</div>