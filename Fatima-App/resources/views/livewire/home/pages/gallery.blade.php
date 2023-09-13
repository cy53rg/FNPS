<div>
	    <!-- START PAGEBREDCUMS -->
		<div class="page-banner page-banner-overlay" data-background="assets/img/bg/po.jpg">
			<div class="container h-100">
			   <div class="row h-100">
				  <div class="col-lg-12 my-auto">
					 <div class="page-banner-content text-center">
						<h2 class="page-banner-title">Image Gallery</h2>
						<div class="page-banner-breadcrumb">
						   <p><a href="#">Home</a> Gallery</p>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
			<div class="page-banner-shape"></div>
		 </div>
		 <!-- END PAGEBREDCUMS -->
   
		 <!-- START PORTFOLIO PAGE SECTION -->
		 <section id="galleryPage" class="section-padding">
			<div class="auto-container">
			   <div class="row mb-5">
				  <div class="col-12 mx-auto text-center wow fadeInDown">
					 <div class="portfolio-filter-menu">
						<ul>
						   <li class="filter active"  data-filter="*">All Works</li>
						   <li class="filter"  data-filter=".one">Learning</li>
						   <li class="filter"  data-filter=".two">Games</li>
						   <li class="filter"  data-filter=".three">School</li>
						   <li class="filter"  data-filter=".four">Class</li>
						</ul>
					 </div>
				  </div>
			   </div>
			   <!-- end portfolio menu list -->
			   <div class="row project-list">
				@if(isset($posts))
				@foreach($posts as $key=>$post)
				  <div class="{{$post->category != null ? ' col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 '.$post->category: 'col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4'}}">
					 <figure class="portfolio-sin-item">
						<img class="img-fluid" src="{{$post->image != '' ? $post->image:asset('assets/img/gallery/1.jpg')}}" alt="" />
						<figcaption>
						   <h3>{{$post->title != '' ? $post->title : 'Title'}}</h3>
						   <div class="port-icon mt-3">
							  <a class="icon-ho venobox" href="{{$post->image != '' ? $post->image:asset('assets/img/gallery/1.jpg')}}" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
							  <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
						   </div>
						</figcaption>
					 </figure>
				  </div>
				  @endforeach
				  @endif
				  <!--  end single item -->
				  
			   </div>
			   <div class="row mt-4">
				  <div class="col-12 mx-auto text-center wow fadeInDown">
					 <a href="#" class="port-btn">Load More <i class="icofont-bubble-right"></i></a>
				  </div>
			   </div>
			</div>
		 </section>
		 <!-- END PORTFOLIO PAGE SECTION -->
   
		 <!-- START CALL TO ACTION SECTION -->
		 <section id="calltoactiontwo" class="callto-action-padding bg-theme">
			<div class="auto-container">
			   <div class="row">
				  <div class="col-lg-9 col-md-6 col-12 mb-lg-0 mb-4">
					 <div class="callto-action-left">
						<h2>Online Admission is going On</h2>
						<p>Join The Fatima Nursery and Primary School Community Today</p>
					 </div>
				  </div>
				  <!-- end col -->
				  <div class="col-lg-3 col-md-6 col-12 mt-3 text-lg-right text-md-right text-left">
					 <a href="#" class="call-to-action-btn-2 wow fadeInUp">Admission Now </a>
				  </div>
				  <!-- end col -->
			   </div>
			</div>
		 </section>
		 <!-- START CALL TO ACTION SECTION -->
   
</div>