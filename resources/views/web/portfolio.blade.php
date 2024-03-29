@extends('web.includes.layout_2')
@section('title', $category->name)
@section('content')

<!-- Page Banner Section Starts Here -->
   <section class="page-banner banner-1">
      <div class="container">
         <div class="page-banner-text">
            <h2 class="col-white capitalize"> {{$category->name}} </h2>
            <h5 class="col-white"> Showcasing Our <b class="highlight-tag"> Creative Work <img src="{{URL::to('/public/website/')}}/images/line-2.png"> </b> That Speaks For Itself </h5>
         </div>
      </div>
   </section>
   <!-- Page Banner Section Ends Here -->
   <!-- Features Section Starts Here -->
   <section class="pad-bot-40 pad-top-100">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4 col-12">
               <div class="feature-box">
                  <img src="{{URL::to('/public/website/')}}/images/icon-1.jpg">
                  <h3 class="col-black"> 12+ </h3>
                  <h5 class="col-black"> years of experience </h5>
                  <p class="col-grey2"> Founded in 2008. Reliable
                     development partner. 
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12">
               <div class="feature-box">
                  <img src="{{URL::to('/public/website/')}}/images/icon-2.jpg">
                  <h3 class="col-black"> 97+ </h3>
                  <h5 class="col-black"> client retention rate
                  </h5>
                  <p class="col-grey2"> Our customers stay with us for years. </p>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12">
               <div class="feature-box">
                  <img src="{{URL::to('/public/website/')}}/images/icon-2.jpg">
                  <h3 class="col-black"> 150+ </h3>
                  <h5 class="col-black"> completed projects
                  </h5>
                  <p class="col-grey2"> Deep understanding of any
                     business domain. 
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Features Section Starts Here -->
   <!-- Portfolio Grid Section Starts Here -->
   <section class="pad-bot-80">
      <div class="container">
         <div class="row custom-row1" id="portfolio_tray">
            @foreach($portfolio as $val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
                  <div class="card-image">
                     <a href="{{URL::to('/public/storage/portfolio/')}}/{{empty($val->large_image) ? $val->image : 'large/'.$val->large_image}}" data-fancybox="gallery" data-caption="{{$val->title}}">
                     <img src="{{URL::to('/public/storage/portfolio/'.$val->image)}}" alt="Image Gallery">
                     </a>
                  </div>
               </div>
            @endforeach
            @if(count($portfolio) == 0)
               <div class="col-12 no-portfolio">
                  <h3>No Portfolio Available.</h3>
               </div>
            @endif
         </div>
         <div class="row" id="loader_tray">
            <div class="col-12">
               <a href="javascript:void(0)" class="custom-btn2 loadmore"> View more </a>
            </div>
         </div>
      </div>
   </section>
   <!-- Portfolio Grid Section Ends Here -->

    <!-- CTA Section Starts Here -->
      <section class="pad-bot-20 pad-top-20">
         <div class="container">
            <div class="cta-sec text-center">
               <h5 class="col-white"> We have <b> Digital Solution </b> for Everyone </h5>
               <h3 class="col-white"> Let’s help you find more clients and grow your Business </h3>
               <a href="" class="custom-btn1 upper"> Let's Get Started </a>
            </div>
         </div>
      </section>
      <!-- CTA Section Ends Here -->
      <!-- Client Testimonial Section Starts Here -->
      <section class="pad-top-80 pad-bot-20">
         <div class="container">
            <div class="block-element text-center m-b-40">
               <div class="sec-head2">
                  <h3 class="col-grey1"> Client’s Testimonial </h3>
                  <p class="upper "> What our <span class="col-blue1 highlight-tag"> clients say <img src="{{URL::to('/public/website/')}}/images/line-1.jpg"> </span> about our work </p>
               </div>
            </div>
            <div class="block-element">
               <div class="custom-slider1 arrows-1">
                  @foreach($testimonials as $test)
                     <div class="testimonial-box">
                        <img src="{{URL::to('/public/website/')}}/images/quote-tag.jpg">
                        <p class="col-grey2"> {{$test->testimonial}} </p>
                        <h4 class="col-grey1"> {{$test->client_name}} </h4>
                        <h5 class="col-grey1"> {{$test->client_tagline}}  </h5>
                     </div>
                  @endforeach
                  @if(count($testimonials) == 0)
                     <div class="testimonial-box  no-portfolio">
                        <h4>No Testimonials Found.</h4>
                     </div>
                  @endif
               </div>
            </div>
         </div>
      </section>
      <!-- Client Testimonial Section Ends Here -->
@endsection
@section('addScript')
   <script type="text/javascript">
      let page = 1;
      $(document).on('click','.loadmore', function() {
         page++;
         $('#loader_tray a').html('<img src="{{URL::to('/public/btn-loader.gif')}}" style="width: 21px; margin: 0px 33px;"/>');
         $.get("{{route('web.category.loadmore', base64_encode($category->id))}}?page="+page, function(response){
            if(response.status == 1){
               $('#portfolio_tray').append(response.html);
               if(parseInt(response.count) < 9){
                  $('#loader_tray').css({display: 'none'});
               }
               $('#loader_tray a').html('View more');
            }
         });
      });
   </script>
@endsection