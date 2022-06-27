@extends('layouts.Master_main')

@section('title')
show media
@endsection

@section('content')
    <div class="row m-t-10">
        <div class="col-sm-12">
            <div class="table-responsive m-b-10">
                <table class="table table-borderless table-data3">
               <thead><th>Image</th><th>Voice</th><th>Video</th><th>Actions</th></thead>
                  <tbodey>
                     @foreach($Media as $mediaItem)
                     <tr>
                      <td><img src="{{ asset('storage/'.$mediaItem->image) }}"></td>
                      <td><audio controls><source src="{{ asset('storage/'.$mediaItem->voice) }}" type="audio/ogg"></audio></td>
                      <td><video controls play><source src="{{ asset('storage/'.$mediaItem->vedio) }}" type="video/mp4"></video></td>
                      <td>
                        <form action="index_media/{{$mediaItem->id}}/delete">
                          <button class="btn btn-danger float-right btn-sm">Delete</button>
                        </form>

                         <form action="index_media/{{$mediaItem->id}}/edit_media">
                         <button class="btn btn-primary float-right btn-sm">Edit</button>
                         </form>
                     </td>
                    </tr>
                 @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection('content')

