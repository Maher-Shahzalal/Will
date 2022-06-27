@extends('layouts.Master_main')

@section('title')
edit media
@endsection

@section('content')
<div class="card card-default-md-8">
     <div class="card-header">
           <h5>Update Media</h1>
     </div>
     <div class="card-body">
          <form action="../{{$Media->id}}" method="POST" enctype="multipart/form-data">
               {{csrf_field()}}
             <div class="form-group">
               <label for="media_image"> Name of media </label>
                 <input type="text"  name="name" class="@error('name')is-invalid @enderror form-control"  placeholder="{{ $Media->name }}">
                     @error('name')
                    <div class="alert alert-danger">
                         {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="form-group">
                   <label for="media_image"> Upload Image </label>
                      <input type="file" class="form-control" name="image" >
               </div>
               <div>
                    <label for="media_voice"> Upload voice </label>
                       <input type="file" class="form-control" name="voice" >
                </div>
                <div class="form-group">
                   <label for="media_video"> Upload video </label>
                      <input type="file" class="form-control" name="vedio" >
                 </div>
                  <div class="form-group"><button type="submit" class="btn btn-success btn-sm">Update</button>
           </div>
         </form>
     </div>
</div>

@endsection('content')
