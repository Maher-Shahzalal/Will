@extends('_layouts.Master')

@section('title')
upload main video
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Add video on main page</strong>
            </div>
            <div class="card-body card-block">
             <form action="/admin_home" method="POST" enctype="multipart/form-data">
                 {{csrf_field()}}
                 <div class="col-12 col-md-9">
                     <input type="file" class=" form-control" class="@error('vedio')
                         is-invalid @enderror form-control" name="vedio">
                     @error('vedio')
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





