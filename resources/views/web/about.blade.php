@extends('web.includes.layout_2')
@section('title', 'About Us')
@section('content')
<!-- Page Banner Section Starts Here -->
<section class="page-banner about-banner-bg">
   <div class="container">
      <div class="row end-row1">
         <div class="col-lg-6 col-md-6 col-12 col-sm-12">
            <div class="about-banners-text">
               <h2 class="pad-bot-20 col-white">Your technology partner for innovative and impactful digital solutions.</h2>
            </div>
            <div class="numbers-row">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="numbers-box">
                        <h3>10+</h3>
                        <h5>Years in the business</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="numbers-box">
                        <h3>1500+</h3>
                        <h5>Solution delivered</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="numbers-box">
                        <h3>150+</h3>
                        <h5>Technology experts</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="numbers-box no-border">
                        <h3>$50M+</h3>
                        <h5>Raised by our clients</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-12 col-sm-12">
            <div class="about-form-wrapper">
               <div class="about-form-head">
                  <h4> Connect with us. </h4>
               </div>
               <div class="about-form-data">
                  <form>
                     <div class="form-field2">
                        <input class="field-style2" type="text" placeholder="Full Name*" name="">  
                     </div>
                     <div class="form-field2">
                        <input class="field-style2" type="email" placeholder="Email*" name="">  
                     </div>
                     <div class="form-field2">
                        <input class="field-style2" type="text" placeholder="Phone*" name="">  
                     </div>
                     <div class="form-field2">
                        <textarea class="field-style2" placeholder="Type Your Message here..."></textarea>
                     </div>
                     <div class="form-field2">
                        <input class="field-style3" type="file" name="">  
                        <span class="info-tag1"> (doc, docx & pdf file. Max 25MB) </span>
                     </div>
                     <div class="block-element2">
                        <input type="submit" value="SUBMIT" class="submit-btn2" name="">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Page Banner Section Ends Here -->
<!-- Client Logos Section Starts Here -->
<section class="pad-top-40 pad-bot-40">
   <div class="container">
      <div class="all-client-logos">
         <img src="{{URL::to('/public/website/')}}/images/client-logo1.png/"> 
         <img src="{{URL::to('/public/website/')}}/images/client-logo2.png/"> 
         <img src="{{URL::to('/public/website/')}}/images/client-logo3.png/"> 
         <img src="{{URL::to('/public/website/')}}/images/client-logo4.png/"> 
         <img src="{{URL::to('/public/website/')}}/images/client-logo5.png/"> 
         <img src="{{URL::to('/public/website/')}}/images/client-logo6.png/"> 
      </div>
   </div>
</section>
<!-- Client Logos Section Ends Here -->
<!-- Detail Section Starts Here -->
<section class="pad-top-20 pad-bot-60">
   <div class="container">
      <div class="block-element m-b-30">
         <div class="sec-head3">
            <h3 class="col-black1"> Small enough to care <br/> 
               Big enough to deliver success... 
            </h3>
         </div>
      </div>
      <div class="block-element">
         <div class="row center-row1">
            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
               <div class="custom-image1">
                  <img src="{{URL::to('/public/website/')}}/images/about-deliver.png/"> 
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
               <div class="detail-text">
                  <h5 class="col-black1"> I proactively consult, design, develop & scale robust web, mobile & custom software solutions, that fuel innovation & deliver digital success! </h5>
                  <p class="col-black1"> I believe that every project is an important milestone in my journey. So I position myselves as a boutique digital agency, custom tailoring impactful digital solutions with industry best practices across the board, for Fortune 500s, SMEs, and start-ups’s around the globe. </p>
                  <a href="" class="custom-btn3"> CONNECT WITH EXPERTS </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Detail Section Ends Here -->
<!-- Quote Title Section Starts Here -->
<section class="pad-bot-40">
   <div class="container">
      <div class="block-element">
         <div class="sec-head3 text-center">
            <h3 class="col-black1"> My work does the talking.. </h3>
         </div>
      </div>
   </div>
</section>
<!-- Quote Title Section Ends Here -->
<!-- Detail Section Starts Here -->
<section class="pad-top-80 pad-bot-60 bg-silver1">
   <div class="container">
      <div class="row center-row1">
         <div class="col-md-6 col-lg-6 col-sm-12 col-12">
            <div class="custom-image2">
               <img src="{{URL::to('/public/website/')}}/images/about-mobileapp.png/"> 
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-sm-12 col-12">
            <div class="detail-text2 m-b-20">
               <span class="text-tag1"> eSocial </span> 
               <h5 class="col-black3 m-b-20"> CUSTOM MOBILE APPLICATION DEVELOPMENT SERVICES </h5>
               <p class="col-black2"> Leverage my decade-long experience in mobile apps development to create seamless mobile experiences your users will enjoy and get back to, again and again  </p>
            </div>
            <div class="buttons-holder1">
               <a href="" class="custom-btn4"> CONTACT US </a>
               <a href="" class="custom-btn3"> VIEW APP </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Detail Section Ends Here -->
<!-- Our Services Block Section Starts Here -->
<section class="bg-purple1 pad-top-80 pad-bot-20">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-lg-4 col-sm-12 col-12 m-b-60">
            <div class="services-head">
               <h3 class="col-white"> <b> My </b> Services </h3>
               <p class="col-white"> End-to-end expertise across the digital ecosystem </p>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 m-b-60">
            <div class="service-box">
               <h5 class="col-white"> Digital <br/> Consulting </h5>
               <p class="col-white"> I develop digital marketing strategies for my clients that result in targeted, relevant, highly customized and cost-effective solutions that deliver measurable returns on your investments. </p>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 m-b-60">
            <div class="service-box">
               <h5 class="col-white"> Web Design & <br/>Development </h5>
               <p class="col-white"> Put your business online and get more sales & leads with the quality and professional web development services. I have experience in all facets of web development to help our clients reach their full digital potential. </p>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 m-b-60">
            <div class="service-box">
               <h5 class="col-white"> Mobile App <br/>  Solutions  </h5>
               <p class="col-white"> I’ve experience in mobile apps development to create seamless mobile experiences your users will enjoy and get back to, again and again </p>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 m-b-60">
            <div class="service-box">
               <h5 class="col-white"> Custom Software <br/> Development </h5>
               <p class="col-white"> Immersive mobile app solutions, that transform businesses and deliver great customer experience. </p>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 m-b-60">
            <div class="service-box">
               <h5 class="col-white"> UX/UI <br/> Design </h5>
               <p class="col-white"> Let design become your competitive advantage. You can rely on my professional mobile and web design services to build a digital product that is practical, functional and beautiful at the same time. </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Our Services Block Section Ends Here -->
<!-- Recent Projects Starts Here -->
<section class="pad-top-60 pad-bot-60">
   <div class="container">
      <div class="block-element m-b-30">
         <div class="sec-head3 text-center">
            <h3 class="col-black1"> Some shots from our recent projects..  </h3>
         </div>
      </div>
      <div class="block-element">
         <div class="recent-project-slider arrows-2">
            <div>
               <img src="{{URL::to('/public/website/')}}/images/recent-project1.png/"> 
            </div>
            <div>
               <img src="{{URL::to('/public/website/')}}/images/recent-project1.png/"> 
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Recent Projects Ends Here -->
<!-- Categories Section Starts Here -->
<section class="pad-bot-20 pad-top-20">
   <div class="container">
      <div class="block-element m-b-40">
         <div class="sec-head3">
            <h3 class="col-black1"> Industry best practices to the core </h3>
         </div>
      </div>
      <div class="block-element">
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-12">
               <div class="tabs-handler1">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#industry-category1" role="tab"> 1. Discovery Workshop </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#industry-category2" role="tab"> 2. Planning </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#industry-category3" role="tab"> 3. Development </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#industry-category4" role="tab"> 4. Design </a>
                     </li>
                  
                  </ul>
               </div>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-12">
               <div class="tabs-content1">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="industry-category1" role="tabpanel">
                        <div class="row center-row1">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="custom-image3">
                                 <img src="{{URL::to('/public/website/')}}/images/about-design.png"> 
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="detail-text2">
                                 <h5 class="col-white"> Discovery workshop </h5>
                                 <p class="col-white"> I believe that every project is an important milestone in our journey. So I  position myself as a boutique digital agency, custom tailoring impactful digital solutions with industry best practices across the board, for Fortune 500s, SMEs, and start-ups around the globe. </p>
                                 <a href="" class="custom-btn6"> GET IN TOUCH </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="industry-category2" role="tabpanel">
                        <div class="row center-row1">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="custom-image3">
                                 <img src="{{URL::to('/public/website/')}}/images/about-mobileapp.png"> 
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="detail-text2">
                                 <h5 class="col-white"> Planning </h5>
                                 <p class="col-white"> I believe that every project is an important milestone in our journey. So I  position myself as a boutique digital agency, custom tailoring impactful digital solutions with industry best practices across the board, for Fortune 500s, SMEs, and start-ups around the globe. </p>
                                 <a href="" class="custom-btn6"> GET IN TOUCH </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="industry-category3" role="tabpanel">
                        <div class="row center-row1">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="custom-image3">
                                 <img src="{{URL::to('/public/website/')}}/images/about-design.png"> 
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="detail-text2">
                                 <h5 class="col-white"> Development </h5>
                                 <p class="col-white"> I believe that every project is an important milestone in our journey. So I  position myself as a boutique digital agency, custom tailoring impactful digital solutions with industry best practices across the board, for Fortune 500s, SMEs, and start-ups around the globe. </p>
                                 <a href="" class="custom-btn6"> GET IN TOUCH </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="industry-category4" role="tabpanel">
                        <div class="row center-row1">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="custom-image3">
                                 <img src="{{URL::to('/public/website/')}}/images/about-mobileapp.png"> 
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                              <div class="detail-text2">
                                 <h5 class="col-white"> Design </h5>
                                 <p class="col-white"> I believe that every project is an important milestone in our journey. So I  position myself as a boutique digital agency, custom tailoring impactful digital solutions with industry best practices across the board, for Fortune 500s, SMEs, and start-ups around the globe. </p>
                                 <a href="" class="custom-btn6"> GET IN TOUCH </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                   
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Categories Section Ends Here -->
@endsection
@section('addScript')
<script type="text/javascript">
   $('.recent-project-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
   
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
   
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
   
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
   });
   
   
   
     
</script>
@endsection