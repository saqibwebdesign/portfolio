@extends('web.includes.layout_2')
@section('title', 'Contact Us')
@section('content')
<!-- Header BG for Transparent Sections -->
<section class="header-bg"></section>
<!-- Header BG for Transparent Sections -->
<!-- Contact Page Section Starts Here -->
<section class="pad-top-100 pad-bot-40">
   <div class="container">
      <div class="block-element">
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-12">
               <div class="contact-item1 m-b-20">
                  <h3 class="col-black"> What will happen next </h3>
                  <p class="col-grey2"> We will get back to you within 24 hours  </p>
               </div>
               <div class="contact-item1 m-b-20">
                  <p class="col-grey2"> You are a closer to building great software </p>
               </div>
               <div class="contact-info-parent">
                  <div class="contact-info-box">
                     <b class="dot-1"> . </b>
                     <h5> 1. Free technical consultation </h5>
                     <p> Detailed tech plan includes things like what tech stack to use, tech architecture, timeline, and budget for your project. </p>
                  </div>
                  <div class="contact-info-box">
                     <b class="dot-1"> . </b>
                     <h5> 2. Connect with the tech team </h5>
                     <p> Over a series of calls, our tech team discusses how different technologies and frameworks will bring your vision to life. </p>
                  </div>
                  <div class="contact-info-box">
                     <b class="dot-1"> . </b>
                     <h5> 3. Onboarding the team </h5>
                     <p> As soon as you sign-off on the team, they’ll be ready to integrate into your team—just like in-house employees. </p>
                  </div>
               </div>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-12">
               <div class="contact-wrapper">
                  <form >
                     <div class="contact-form-head">
                        <img src="{{URL::to('/public/website/')}}/images/folder-icon1.png">   
                        <h4 class="col-black"> Get in touch discuss your project, request a quote or even just to pick our brain </h4>
                     </div>
                     <div class="contact-form-block">
                        <div class="step-head">
                           <h4> 1. Tell us about your company </h4>
                        </div>
                        <div class="block-element">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <input type="text" placeholder="Your Name*" class="field-style4" name="">   
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <input type="email" placeholder="Your Email*" class="field-style4" name="">   
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <input type="number" placeholder="Your Phone Number*" class="field-style4" name="">   
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <input type="text" placeholder="Company Name Or Website" class="field-style4" name="">   
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="step-head m-t-10">
                           <h4> 2. Tell us more about your project  </h4>
                        </div>
                        <div class="block-element">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <textarea class="field-style4" placeholder="Describe Your Project Briefly *"></textarea> 
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field5">
                                    <span> Estimate Budget </span>
                                    <select class="field-style5">
                                       <option> $25k to $50K </option>
                                       <option> $25k to $50K </option>
                                       <option> $25k to $50K </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="block-element m-b-20 m-t-10">
                                    <div class="multiple-uploader dropzone">
                                       <div id="dropzone">
                                          <div id="demo-upload" action="/upload">
                                             <div class="dz-message needsclick">    
                                             <i class="fa fa-file-upload"> </i>   Drag images or browse to upload (optional) 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="step-head m-t-10">
                           <h4> 3. Where did you hear about us? </h4>
                        </div>
                        <div class="block-element">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field4">
                                    <textarea class="field-style4" placeholder="How Did You Hear About Us?"></textarea> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="step-head m-t-10">
                           <h4> 4. Schedule a call with our tech expert. Get a detailed tech consultation for free! </h4>
                        </div>
                        <div class="block-element">
                           <input type="submit" value="SUBMIT" class="submit-btn2" name="">   
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Page Section Ends Here -->
<!-- Dropzone Template -->
<div id="preview-template" style="display: none;">
   <div class="dz-preview dz-file-preview">
      <div class="dz-image"><img data-dz-thumbnail=""></div>
      <div class="dz-details">
         <div class="dz-size"><SPAN data-dz-size=""></SPAN></div>
         <div class="dz-filename"><SPAN data-dz-name=""></SPAN></div>
      </div>
      <div class="dz-progress"><SPAN class="dz-upload" 
         data-dz-uploadprogress=""></SPAN></div>
      <div class="dz-error-message"><SPAN data-dz-errormessage=""></SPAN></div>
      <div class="dz-success-mark">
         <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>Check</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
               <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
            </g>
         </svg>
      </div>
      <div class="dz-error-mark">
         <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>error</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
               <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                  <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
               </g>
            </g>
         </svg>
      </div>
   </div>
</div>
<!-- Dropzone Template -->
@endsection
@section('addScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script type="text/javascript">
   var dropzone = new Dropzone('#demo-upload', {
   previewTemplate: document.querySelector('#preview-template').innerHTML,
   parallelUploads: 2,
   thumbnailHeight: 120,
   thumbnailWidth: 120,
   maxFilesize: 3,
   filesizeBase: 1000,
   thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
    }
   }
   
   });
   
   
   // Now fake the file upload, since GitHub does not handle file uploads
   // and returns a 404
   
   var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;
   
   dropzone.uploadFiles = function(files) {
   var self = this;
   
   for (var i = 0; i < files.length; i++) {
   
    var file = files[i];
    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
   
    for (var step = 0; step < totalSteps; step++) {
      var duration = timeBetweenSteps * (step + 1);
      setTimeout(function(file, totalSteps, step) {
        return function() {
          file.upload = {
            progress: 100 * (step + 1) / totalSteps,
            total: file.size,
            bytesSent: (step + 1) * file.size / totalSteps
          };
   
          self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
          if (file.upload.progress == 100) {
            file.status = Dropzone.SUCCESS;
            self.emit("success", file, 'success', null);
            self.emit("complete", file);
            self.processQueue();
            //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
          }
        };
      }(file, totalSteps, step), duration);
    }
   }
   }
   
</script>
@endsection