@extends('web.includes.layout')
@section('title', 'Home')
@section('content')
<section>
    <div class="section-2 pad-left-10 pad-right-10 pad-bot-30 pad-top-100">
        <div class="container-fluid">
            <div class="row">
            	@foreach($categories as $val)
	                <div class="col-lg-3 col-md-3 col-12 sec-1">
	                     <div class="section-2-1">
	                          <img src="{{URL::to('/public/storage/category/'.$val->image)}}" alt="Avatar" class="image" style="width:100%">
	                          <div class="overlay"></div>
	                          <a class="section-2-3" href="{{route('web.category', urlencode($val->name))}}">VIEW MORE</a>
	                     </div>
	                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection