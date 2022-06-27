@extends('layouts.Master_main')

@section('title')
add will
@endsection

@section('content')
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Write will</strong>
        </div>
        <div class="card-body card-block">
             <form action="/home/write_will" method="POST">
                 {{csrf_field()}}
                 <div class="col-12 col-md-9">
                <input type="text"  name="name" class="@error('name')
                       is-invalid @enderror form-control" placeholder="add will's name">
                       @error('name')
                   <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                 @enderror
               </div>
                 <br>
                 <div class="col-12 col-md-9">
                   <textarea type="text"  name="content" class="@error('name')
                       is-invalid @enderror form-control"  rows="10" placeholder="add will"></textarea>
                       @error('content')
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
    @endsection



