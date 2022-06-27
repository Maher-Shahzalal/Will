@extends('layouts.Master_main')

@section('title')
show wills
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                  <thead><th>Name</th><th>Actions</th></thead>
                  <tbodey>
                     @foreach($Will as $willItem)<tr><td>{{ $willItem->name }}</td>
                       <td>
                        <form action="index_written_wills/{{$willItem->id}}/delete">
                            <button class="btn btn-danger float-right ml-2 btn-sm">Delete</button>
                         </form>
                        <form action="edit_written_will/{{$willItem->id}}/edit">
                         <button class="btn btn-primary float-right btn-sm">Edit</button>
                        </form>
                     </td>
                 </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection('content')

