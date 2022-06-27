@extends('_layouts.Master')

@section('title')
upload about us video
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Add video on aboutus page</strong>
            </div>
            <div class="card-body card-block">
        <form action="/admin_home/add_video_aboutPage" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
              <div class="col-12 col-md-9">
                  <input type="file" class=" form-control" class="@error('about')
                      is-invalid @enderror form-control" name="about">
                  @error('about')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
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



