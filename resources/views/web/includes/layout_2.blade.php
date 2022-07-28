<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> @yield('title') | DNP Projects </title>
      <!-- Favicon -->
       <link rel="icon" type="image/png" href="{{URL::to('public/website')}}/images/favicon.png">
      <!-- Animate With CSS -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('/public/website/')}}/css/animate.css">
      <!-- Font Awesome KIT -->
      <link href="{{URL::to('/public/website/')}}/fontawesome-kit-5/css/all.css" rel="stylesheet">
      <link href="{{URL::to('/public/website/')}}/fontawesome-kit-5/css/fontawesome.css" rel="stylesheet">
      <link href="{{URL::to('/public/website/')}}/fontawesome-kit-5/css/brands.css" rel="stylesheet">
      <link href="{{URL::to('/public/website/')}}/fontawesome-kit-5/css/solid.css" rel="stylesheet">
      <script defer src="{{URL::to('/public/website/')}}/fontawesome-kit-5/js/all.js"></script>
      <script defer src="{{URL::to('/public/website/')}}/fontawesome-kit-5/js/brands.js"></script>
      <script defer src="{{URL::to('/public/website/')}}/fontawesome-kit-5/js/solid.js"></script>
      <script defer src="{{URL::to('/public/website/')}}/fontawesome-kit-5/js/fontawesome.js"></script>
      <!-- Fancybox Gallery -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
      <!-- Slick CSS -->
      <link href="{{URL::to('/public/website/')}}/css/slick.css" rel="stylesheet">
      <link href="{{URL::to('/public/website/')}}/css/slick-theme.css" rel="stylesheet">
      <!-- Bootstrap Grids -->
      <link href="{{URL::to('/public/website/')}}/css/bootstrap.min.css" rel="stylesheet">
      <!-- Dropzone File Upload -->
       <link href="{{URL::to('/public/website/')}}/css/dropzone.css" rel="stylesheet">
      <!-- Custom Stylings -->
      <link href="{{URL::to('/public/website/')}}/css/custom.css" rel="stylesheet">
      <link href="{{URL::to('/public/website/')}}/css/dev.css" rel="stylesheet">
      <!-- Jquery Library -->
      <script type="text/javascript" src="{{URL::to('/public/website/')}}/js/jquery-3.2.1.min.js"></script>
   </head>
   <body>
      <!-- Header Section Starts Here -->
      <header>
         <div class="container">
            <div class="header-row">
               <div class="logo">
                  <a href="{{URL::to('/')}}"> <img src="{{URL::to('/public/website/')}}/images/logo-dark.png"> </a>   
               </div>
               <div class="navbar-handler">
                  <img src="{{URL::to('/public/website/')}}/images/hamburger.png">   
               </div>
               <div class="navbar-custom">
                  <div class="menu-item">
                     <a href="{{route('web.about')}}"> ABOUT ME </a>   
                  </div>
                  <div class="menu-item">
                     <a href="{{route('web.services')}}"> SERVICES </a>   
                  </div>
                  <div class="menu-item">
                     <a href=""> PORTFOLIO </a>   
                  </div>
                  <div class="menu-item">
                     <a href="{{route('web.contact')}}"> CONTACT US </a>   
                  </div>
                  <div class="menu-item ">
                     <a href="" class="custom-btn2"> GET QUOTE </a>   
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Section Ends Here -->
      
      @yield('content')

     
      <!-- Related Portfolio Section Starts Here -->
      <section class="pad-top-80 pad-bot-100">
         <div class="container">
            <div class="row center-row1">
               <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                  <div class="sec-head1">
                     <h3 class="col-grey1 upper"> <b> Portfolio </b> that speak! </h3>
                     <p class="col-grey1"> Some highlights of my <b> favorite projects </b> we've done for forward thinking <br/> clients.   </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                  <div class="related-grid">
                     @php
                        $categories = \App\Models\categories::orderBy('id')->limit(6)->get();
                     @endphp
                     @foreach($categories as $cat)
                        @php $name = explode(' ', $cat->name); @endphp 
                        <a href="{{route('web.category', urlencode($cat->name))}}" class="capitalize"> {{$name[0]}}<br>{{@$name[1]}} </a>
                     @endforeach 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Related Portfolio  Section Starts Here -->
      <!-- Footer Section Starts Here -->     
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                  <div class="footer-about">
                     <div class="footer-logo">
                        <a href=""> <img src="{{URL::to('/public/website/')}}/images/logo-dark.png"> </a>   
                     </div>
                     <div class="footer-details">
                        <ul>
                           <li> <b> Email:  </b> <a href="mailto:info@divsnixel.com"> info@dnpprojects.com</a> </li>
                           <li> <b> Mobile:  </b> <a href="tel:+92 333 2987949"> +92 333 2987949  </a> </li>
                           <li> <b> Tel:  </b> <a href="tel:021 36907949"> 021 36907949 </a> </li>
                        </ul>
                     </div>
                     <div class="footer-social">
                        <a href=""> <i class="fab fa-facebook-f"> </i> </a>
                        <a href=""> <i class="fab fa-instagram"> </i> </a>
                        <a href=""> <i class="fab fa-linkedin-in"> </i> </a>
                        <a href=""> <i class="fab fa-twitter"> </i> </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                  <div class="footer-list">
                     <h3 class="footer-heading1"> PORTFOLIO </h3>
                     <ul>
                        @foreach($categories as $key => $cat)
                              <li> 
                                 <a href="{{route('web.category', urlencode($cat->name))}}"> 
                                    {{$cat->name}} 
                                 </a> 
                              </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                  <div class="footer-list footer-list2">
                     <h3 class="footer-heading1"> QUICK LINKS </h3>
                     <ul>
                        <li> <a href="{{route('web.about')}}"> About Me </a> </li>
                        <li> <a href="{{route('web.services')}}"> Services </a> </li>
                        <li> <a href=""> Portfolio </a> </li>
                        <li> <a href="{{route('web.contact')}}"> Contact Us </a> </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                  <div class="callback-form">
                     <div class="callback-head">
                        <h4> REQUEST A CALLBACK </h4>
                     </div>
                     <div class="callback-form-content">
                        <p> Please fill in your details below and we will call you back. </p>
                        <form>
                           <div class="form-field1">
                              <input type="text" class="field-style1" placeholder="Full Name" name="">   
                           </div>
                           <div class="form-field1">
                              <input type="email" class="field-style1" placeholder="Email Address" name="">   
                           </div>
                           <div class="form-field1">
                              <input type="text" class="field-style1" placeholder="Phone Number" name="">   
                           </div>
                           <div class="block-element2 text-center">
                              <input type="submit" value="SUBMIT" class="submit-btn1" name="">    
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section Ends Here -->     
      <!-- Copyrights Section Starts Here -->
      <section class="copyrights-sec">
         <div class="container">
            <span> © 2011 - 2022 dnpprojects.com | All Rights Reserved. </span>   
         </div>
      </section>
      <!-- Copyrights Section Ends Here -->
      <!-- Bootstrap Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{URL::to('/public/website/')}}/js/bootstrap.min.js"> </script>
      <script src="{{URL::to('/public/website/')}}/js/slick-slider.js"> </script>
      <script src="{{URL::to('/public/website/')}}/js/functions.js"> </script>
      <script src="{{URL::to('/public/website/')}}/js/jquery-ui.min.js"></script>
      <script src="{{URL::to('/public/website/')}}/js/owl.carousel.min.js"></script>
      <!-- Fancybox Gallery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      @yield('addScript')
   </body>
</html>