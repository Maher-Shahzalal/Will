@extends('_layouts.Master')

@section('title')
profile
@endsection

@section('profile')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
            <img src="/uploads/avatars/{{$user->avatar}}"
                style="width:150px; heigth:150px; float:left; border-radius:50%; margin-right:25px;">
             <h2> {{$user->name}}'s Profile </h2>
            <form enctype="multipart/form-data" action="/admin_home/profile" method="POST">
               <lable><h1>Update Profile Image</h1></lable>
               <input type="file" name="avatar" required>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o">Upload</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
