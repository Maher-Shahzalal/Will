@extends('layouts.Master_website')
<style>
video{ width: 50%;transform: translate(200px,20px);}
h2{ font-size: 17px; font-family: 'Times New Roman', Times, serif; font-weight: bold; line-height:30px;
    color: #ED0000; text-shadow: -5px -5px 8px  #910000; line-height:45px; }
</style>

@section('nav')
        <ul>
          <li ><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/register') }}">Registration</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li class="active"><a href="{{ url('/about') }}">About us</a></li>
        </ul>
@endsection
  <section id="introo" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>The "Will" project provides you with a private digital platform
               that allows you to express your feelings, your wishes, your expectations,
                your motivations and wills to your relatives and love ones.</h2>
         </div>
         <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
         </div>
      </div>
    </div>
  </section>
  <main id="main">
  <section id="about">
    <div class="container">
	     @foreach($About as $videoaAboutPage)
					<video  controls autoplay>
						  <source src="{{ asset('storage/'.$videoaAboutPage->about) }}" type="video/mp4">
				   </video>
			  @endforeach
     </div>
</section>


 