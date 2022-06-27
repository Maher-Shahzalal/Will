@extends('_layouts.Master')

@section('title')
show main's video
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                           <th>Video</th><th>Actions</th>
                    </thead>
               <tbodey>
                  <tr>
                    <td>
                      @foreach($Vedio as $vedioMainPage)
                      <video width="300px" higth="300px" controls play>
                         <source src="{{ asset('storage/'.$vedioMainPage->vedio) }}" type="video/mp4">
                      </video>
                     </td>
                     <td>
                      <form action="index_video_mainPage/{{$vedioMainPage->id}}/delete">
                        <button class="btn btn-danger btn-s">Delete</button>
                     </form>
                     </td>
                 </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection

