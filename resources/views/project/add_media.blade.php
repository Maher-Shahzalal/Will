@extends('layouts.Master_main')

@section('title')
add media
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Add Media</strong>
            </div>
            <div class="card-body card-block">
          <form action="/home/add_media" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
               <label for="media_image"> Name of media </label>
                 <input type="text"  name="name" class="@error('name')is-invalid @enderror form-control" >
                 @error('name')
                   <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
               </div>
              <div class="col-12 col-md-9">
                    <label for="media_image"> Upload Image </label>
                        <input type="file" class="@error('image')is-invalid @enderror form-control" name="image">
                       @error('image')
                   <div class="alert alert-danger">
                       {{ $message }}
                    </div>
                  @enderror
                </div>
              <div class="col-12 col-md-9">
                   <label for="media_voice"> Upload voice </label>
                       <input type="file" class="@error('voice')is-invalid @enderror form-control" name="voice">
                       @error('voice')
                       <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
               </div>
              <div class="col-12 col-md-9">
                  <label for="media_video"> Upload video </label>
                     <input type="file" class="form-control" name="vedio">
                     @error('vedio')
                   <div class="alert alert-danger">
                           {{ $message }}
                    </div>
                  @enderror
               </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-sm">
                      <i class="fa fa-dot-circle-o">Add</i>
                  </button>
              </div>
         </form>
     </div>
</div>
@endsection('content')

