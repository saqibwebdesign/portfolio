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
         <div class="row custom-row1">
            @foreach($portfolio as $val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
                  <div class="card-image">
                     <a href="{{URL::to('/public/storage/portfolio/'.$val->image)}}" data-fancybox="gallery" data-caption="{{$val->title}}">
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
      </div>
   </section>
   <!-- Portfolio Grid Section Ends Here -->

@endsection