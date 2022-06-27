@extends('layouts.Master_main')

@section('title')
edit will
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Edit will</strong>
            </div>
            <div class="card-body card-block">
          <form action="../{{$Will->id}}" method="POST">
               {{csrf_field()}}
              <div class="col-12 col-md-9">
                <input type="text"  name="name" class="@error('name')is-invalid @enderror form-control" placeholder="{{ $Will->name }}">
               @error('name')
                   <div class="alert alert-danger">
                       {{ $message }}
                    </div>
                @enderror
          </div>
              <br>
              <div class="col-12 col-md-9">
                <textarea type="text"  name="content" class="@error('content')
                       is-invalid @enderror form-control"  rows="10" placeholder="add will">{{ $Will->content }}</textarea>
               @error('content')
                   <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-sm">
                      <i class="fa fa-dot-circle-o">Update</i>
                  </button>
              </div>
          </form>
      </div>
  </div>
@endsection('content')

