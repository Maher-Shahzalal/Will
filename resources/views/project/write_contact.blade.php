@extends('layouts.Master_main')

@section('title')
add contact
@endsection

@section('content')
<div class="card card-default-md-8">
     <div class="card-header">
          <h5>Add Contact</h1>
     </div>
          <div class="card-body">
          <form action="/home/write_contact" method="POST">
             {{csrf_field()}}
               <div class="form-group">
                <input type="text" class="@error('code')is-invalid @enderror form-control" name="code"  placeholder="Countary Code">
                    @error('code')
                   <div class="alert alert-danger">
                         {{ $message }}
                    </div>
                  @enderror
               </div>
               <div class="form-group">
                <input type="text" class="@error('number')is-invalid @enderror form-control"  name="number" placeholder="number">
                   @error('number')
                   <div class="alert alert-danger">
                         {{ $message }}
                    </div>
               @enderror
          </div>
          <div class="form-group">
               <input type="text" class="@error('name')is-invalid @enderror form-control"  name="name" placeholder="name" >
                  @error('name')
                   <div class="alert alert-danger">
                          {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="form-group">
              <input type="email" class="@error('emaill')is-invalid @enderror form-control"  name="emaill" placeholder="email" >
                 @error('emaill')
                 <div class="alert alert-danger">
                       {{ $message }}
                 </div>
              @enderror
          </div>
          <div class="form-group">
               <label for="selectWill">Select a Will</label>
               <select  class="@error('willID')is-invalid @enderror form-control" name="will_id" >
                  <option value="" >Choose Will</option>
                    @foreach($Will as $wills)
                  <option value="{{ $wills->id }}" >{{$wills->name}}</option>
                    @endforeach
               </select>
               @error('willID')
                   <div class="alert alert-danger">
                         {{ $message }}
                    </div>
               @enderror
          </div>
          <div class="form-group">
               <label for="selectMedia"> Select a Media  </label>
               <select  class="form-control" name="media_id" id="selectMedia" >
                  <option value="" >Choose Media</option>
                    @foreach($Media as $medias)
                  <option value="{{ $medias->id }}">{{$medias->name}}</option>
                 @endforeach
               </select>
          </div>
               <div class="form-group"><button type="submit" class="btn btn-success btn-sm">Add</button></div>
         </form>
     </div>
</div>
@endsection('content')



