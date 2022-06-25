@foreach($portfolio as $val)
   <div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
      <div class="card-image">
         <a href="{{URL::to('/public/storage/portfolio/')}}/{{empty($val->large_image) ? $val->image : 'large/'.$val->large_image}}" data-fancybox="gallery" data-caption="{{$val->title}}">
         <img src="{{URL::to('/public/storage/portfolio/'.$val->image)}}" alt="Image Gallery">
         </a>
      </div>
   </div>
@endforeach