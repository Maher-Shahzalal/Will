@extends('layouts.Master_main')

@section('title')
profile
@endsection

@section('profile')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <img src="/uploads/avatars/{{$user->avatar}}"
        style="width:150px; heigth:150px; float:left; border-radius:50%; margin-right:25px;">
         <h2> {{$user->name}}'s Profile </h2>
         <form enctype="multipart/form-data" action="/home/profile" method="POST">
         <lable><h1>Update Profile Image</h1></lable>
         <input type="file" name="avatar">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="submit" class="pull-right btn btn-sm btn-primary">
         </form>
        </div>
    </div>
</div>
@endsection
