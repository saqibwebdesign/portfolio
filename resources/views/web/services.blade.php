@extends('web.includes.layout_2')
@section('title', 'Services')
@section('content')
<!-- Header BG for Transparent Sections -->
<section class="header-bg">
</section>
<!-- Header BG for Transparent Sections -->
<!-- Services Banner Section Starts Here -->
<section class="pad-top-130 pad-bot-20">
   <div class="container">
      <div class="block-element service-banner-text">
         <h5 class="col-black1"> OUR SERVICES </h5>
         <h3 class="col-black1"> Startup or a Fortune 500 company, I act as your consultant and development partner to transform your idea into success. Take advantage of my full-service capabilities. </h3>
      </div>
   </div>
</section>
<!-- Services Banner Section Ends Here -->
<!-- Consulting Services Section Starts Here -->
<section class="pad-top-60 pad-bot-60">
   <div class="container">
      <div class="row center-row1">
         <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-1 order-1">
            <div class="custom-image4">
               <img src="{{URL::to('/public/website/')}}/images/service-consulting.PNG"> 
            </div>
         </div>
         <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-2 order-2">
            <div class="detail-text3">
               <h3 class="col-black"> Consulting </h3>
               <p class="col-grey3"> I can help your idea get visibility by putting up the right development and design strategy in this crowded market with my consulting expertise. </p>
               <ul class="list-3">
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Enterprise </a> </li>
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Startup </a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Consulting Services Section Ends Here -->
<!-- Web Services Section Starts Here -->
<section class="bg-silver1 pad-top-80 pad-bot-80">
   <div class="container">
      <div class="row center-row1">
         <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-1 order-1">
            <div class="custom-image4">
               <img src="{{URL::to('/public/website/')}}/images/service-web.PNG"> 
            </div>
         </div>
         <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2">
            <div class="detail-text3">
               <h3 class="col-black"> Web </h3>
               <p class="col-grey3"> I can understand the science of enhancing user experience with a combination of a human-centric approach and development ingenuity. </p>
               <ul class="list-3">
                  <li> <a href="{{URL::to('/category/Website+Dev')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Web app development </a> </li>
                  <li> <a href="{{URL::to('/category/Website+Design')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Web design </a> </li>
                  <li> <a href="{{URL::to('/category/Mobile+App')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Progressive web apps </a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Web Services Section Ends Here -->
<!-- Mobile Apps Section Starts Here -->
<section class="pad-top-60 pad-bot-60">
   <div class="container">
      <div class="row center-row1">
         <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-1 order-1">
            <div class="custom-image4">
               <img src="{{URL::to('/public/website/')}}/images/service-mobileapps.PNG"> 
            </div>
         </div>
         <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-2 order-2">
            <div class="detail-text3">
               <h3 class="col-black"> Mobile Apps </h3>
               <p class="col-grey3"> Leveraging mobility to bring business stability and visibility for you, I'll make your product next-gen ready with the best of technology. </p>
               <ul class="list-3">
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>  iOS app development </a> </li>
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>  Android app development </a> </li>
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>  React Native app development </a> </li>
                  <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Enterprise Mobility  </a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Mobile Apps Section Ends Here -->
<!-- Service Detail Section Starts Here -->
<section class="">
   <div class="container">
      <div class="block-element">
         <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-12 m-b-60">
               <div class="custom-image5">
                  <img src="{{URL::to('/public/website/')}}/images/service-ui-design.PNG">  
               </div>
               <div class="detail-text3">
                  <h3 class="col-black"> NFT Design </h3>
                  <p class="col-grey"> I drive all aspects of marketing strategies by setting up disruptive techniques and solutions according to the goals and peculiarities of your token. </p>
                  <a href="{{URL::to('/category/NFT+Website')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Learn More </a>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-12 m-b-60">
               <div class="custom-image5">
                  <img src="{{URL::to('/public/website/')}}/images/service-blockchain.PNG">  
               </div>
               <div class="detail-text3">
                  <h3 class="col-black"> Social Media </h3>
                  <p class="col-grey"> A Collection of the best Social Media Marketing Agencies for Web,
Search Engine Marketing, Instagram, Facebook, SnapChat, Facebook, Blogs and more </p>
                  <a href="{{URL::to('/category/Social+Media')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Learn More </a>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-12 m-b-60">
               <div class="custom-image5">
                  <img src="{{URL::to('/public/website/')}}/images/service-ecommerce.PNG">  
               </div>
               <div class="detail-text3">
                  <h3 class="col-black"> Website Design </h3>
                  <p class="col-grey"> I combine the five dimensions of interaction design—words, visuals, spatial layouts, time, and object behavior—into one smooth experience to help you create the best possible website design. </p>
                  <a href="{{URL::to('/category/Website+Design')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Learn More </a>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-12 m-b-60">
               <div class="custom-image5">
                  <img src="{{URL::to('/public/website/')}}/images/service-software-development.PNG">  
               </div>
               <div class="detail-text3">
                  <h3 class="col-black"> Dashboard  </h3>
                  <p class="col-grey"> I develop dashboards for you that are customized as per your requirements and are full of features that help you align your business data and lead to business growth by making efficient and strategic use of your data </p>
                  <a href="{{URL::to('/category/Dashboard+Design')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Learn More </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Service Detail Section Ends Here -->
<!-- Technology Section Starts Here -->
<section class="pad-bot-60">
   <div class="container">
      <div class="row center-row1">
         <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-1 order-1">
            <div class="custom-image4">
               <img src="{{URL::to('/public/website/')}}/images/service-technology.PNG"> 
            </div>
         </div>
         <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-2 order-2">
            <div class="detail-text3">
               <h3 class="col-black"> Print Media </h3>
               <p class="col-grey3"> At Print Media Services, I believe our people are the essential difference to providing the reliability of service and consistency of quality which our clients expect. </p>
               <ul class="list-3">
                  <li> <a href="{{URL::to('/category/Print+Media')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>    Letter Heads </a> </li>
                   <li> <a href="{{URL::to('/category/Print+Media')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>   Business Cards </a> </li>
                    <li> <a href="{{URL::to('/category/Print+Media')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>    Flyers </a> </li>
                     <li> <a href="{{URL::to('/category/Print+Media')}}" class="custom-btn5"> <i class="fa fa-arrow-right"> </i>    Brouchers </a> </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Technology Section Ends Here -->
<!-- Building Section Starts Here -->
<section class="buildings-sec">
   <div class="container">
      <div class="block-element">
         <div class="building-block">
            <h5 class="col-black"> About our New York <br/> presence </h5>
            <p class="col-grey3">  New York became the place for one of our major company expansions. Pay us visit at 79 Madison Avenue! </p>
            <ul class="list-3">
               <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> App development in New York </a> </li>
               <li> <a href="" class="custom-btn5"> <i class="fa fa-arrow-right"> </i> Web design services in New York </a> </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Building Section Ends Here -->
<!-- Service Categories Section Starts Here -->
<section class="pad-top-60 pad-bot-60 bg-purple1">
   <div class="container">
      <div class="block-element text-center m-b-30">
         <div class="sec-head3">
            <h3 class="col-white"> Pristine touch in every pixel </h3>
         </div>
      </div>
      <div class="block-element">
         <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category1.png">  
                  <h5 class="col-white"> Food Pick-up App </h5>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category2.png">  
                  <h5 class="col-white"> Events & Activity App </h5>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category3.png">  
                  <h5 class="col-white"> Social Media App </h5>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category4.png">  
                  <h5 class="col-white"> Learning App </h5>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category5.png">  
                  <h5 class="col-white"> Video Streaming App </h5>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-12">
               <div class="category-block">
                  <img src="{{URL::to('/public/website/')}}/images/service-category6.png">  
                  <h5 class="col-white"> Digital Marketing Website </h5>
               </div>
            </div>
         </div>
      </div>
      <div class="block-element text-center">
         <a href="" class="custom-btn3"> VIEW GALLERY </a> 
      </div>
   </div>
</section>
<!-- Service Categories Section Ends Here -->
<!-- Quotation Section Starts Here -->
<section class="pad-top-60">
   <div class="container">
      <div class="block-element m-b-20 text-center">
         <div class="sec-head3">
            <h3 class="col-black1"> From people like you  </h3>
         </div>
      </div>
      <div class="block-element">
         <div class="quote-box">
            <img src="{{URL::to('/public/website/')}}/images/quote-icon.png">  
            <h4 class="col-black1"> Thier Willingness to go the extra mile ispired us. </h4>
            <p class="col-grey4"> Chris Rennie Founder, NovaLabs </p>
         </div>
      </div>
   </div>
</section>
<!-- Quotation Section Ends Here -->
@endsection
@section('addScript')
<script type="text/javascript"></script>
@endsection