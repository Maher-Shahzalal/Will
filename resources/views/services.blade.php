@extends('layouts.Master_website')
<style>
video{width: 80%;transform: translate(100px,20px);}
h2{
font-size: 17px;
font-family: 'Times New Roman', Times, serif;
font-weight: bold;
line-height:30px;
color: #ED0000;
text-shadow: -5px -5px 8px  #910000;
line-height:45px;}
</style>

@section('nav')
        <ul>
          <li ><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/register') }}">Registration</a></li>
          <li class="active"><a href="{{ url('/services') }}">Services</a></li>
          <li ><a href="{{ url('/about') }}">About us</a></li>
        </ul>
@endsection
  <section id="introo" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Tutorial</h2>
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
       @foreach($Service as $videoServicePage)
           <video  controls autoplay>
             <source src="{{ asset('storage/'.$videoServicePage->service) }}" type="video/mp4">
       </video>                  
       @endforeach
	  </div>
  </section>


  