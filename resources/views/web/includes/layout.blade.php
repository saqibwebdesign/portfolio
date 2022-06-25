<!Doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <title> @yield('title') | DNP PROJECTS </title>
        @include('web.includes.style')
    </head>	
    <body style="height: 100vh;"> 

        <!-- <section>
            <div class="section-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-6 section-1-9">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6 section-1-5">
                                    <div class="section-1-1">
                                        <a href="#"><button type="button">ABOUT ME</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 section-1-6">
                                   <div class="section-1-1">
                                         <a href="#"><button type="button">SERVICES</button></a>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="section-1-3">
                                <h1>DNP PROJECTS</h1>
                                <p class="pad-top-20 no-margin">Our portfolio help you access tons of opportunities, and showcase the work.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6  section-1-7">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6 section-1-4">
                                    <div class="section-1-1">
                                        <a href="#"><button type="button">CONTACT US</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 section-1-8">
                                    <div class="section-1-1">
                                        <a href="#"><button type="button">GET FREE QUOTE</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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
                     <a href=""> ABOUT ME </a>   
                  </div>
                  <div class="menu-item">
                     <a href=""> SERVICES </a>   
                  </div>
                  <div class="menu-item">
                     <a href=""> CONTACT US </a>   
                  </div>
                  <div class="menu-item">
                     <a href=""> PORTFOLIO </a>   
                  </div>
                  <div class="menu-item ">
                     <a href="" class="custom-btn2 custom-btn22"> GET QUOTE </a>   
                  </div>
               </div>
            </div>
         </div>
      </header>
      
        @yield('content')


        @include('web.includes.script')

    </body>  
</html>