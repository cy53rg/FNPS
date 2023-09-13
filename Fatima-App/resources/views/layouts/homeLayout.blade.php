<!DOCTYPE html>
<html lang="zxx">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

      <!--Page Title-->
      <title>FatimaSchools</title>
      
      <!-- Bootstrap core CSS -->
     <livewire:styles />
     <livewire:home.partials.css>
   </head>

   <body id="main">
      
      <!-- START PRELOADER -->
      <!-- <div id="page-preloader">
         <div class="loader"></div>
         <div class="loa-shadow"></div>
      </div> --> 
      <!-- END PRELOADER -->

      <!-- START HEADER SECTION -->
      <header class="main-header">
         <!-- START TOP AREA -->
         <livewire:home.partials.toparea >
         <!-- END TOP AREA -->

         <!-- START LOGO AREA 
         <div class="logo-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                     <div class="logo">
                        <a href="index.html">
                        <img class="img-fluid" src="assets/img/logo.png" alt="">
                        </a>
                     </div>
                  </div>
                  
                  <div class="col-lg-9 col-12">
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-envelope"></i>
                        </div>
                        <h5>Connect With Us</h5>
                        <p>info@yoursite.com</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-headphone-alt-3"></i>
                        </div>
                        <h5>Call For Inquiry</h5>
                        <p>123-456-789</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-eye-open"></i>
                        </div>
                        <h5>Opening hours</h5>
                        <p>Mon - Sun : 08:00 - 14:00</p>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
          END LOGO AREA -->

         <!-- START NAVIGATION AREA -->
         <livewire:home.partials.navbar>
         <!-- END NAVIGATION AREA --> 
      </header>
      <!-- END HEADER SECTION -->

      {{$slot}}

     
      
      @if(Route::current()->getName() == 'login')
      <!-- START FOOTER -->
        <livewire:home.partials.footer>
      <!-- END FOOTER -->

      @endif

      <!-- Latest jQuery -->
     <livewire:scripts>
        <livewire:home.partials.js>
   </body>
</html>