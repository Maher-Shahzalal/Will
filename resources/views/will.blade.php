@extends('layouts.Master_website')
<style>video{width: 97%;}</style>

@section('nav')
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/register') }}">Registration</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/about') }}">About us</a></li>
        </ul>
@endsection
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Send your wills to your lovers</h2>
          <div>
            <a href="{{ url('/login') }}" class="btn-get-started scrollto">Write will</a>
          </div>
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
	      @foreach($Vedio as $vedioMainPage)
						<video width="100px" higth="50px" controls autoplay>
								<source src="{{ asset('storage/'.$vedioMainPage->vedio) }}" type="video/mp4">
					  </video>
				 @endforeach
      </div>
    </section>


