@extends('layouts.Master_main')

@section('title')
show contacts
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                   <thead><th>Code</th><th>Number</th><th>Name</th><th>Email</th><th>Relation will</th><th>Relation media</th><th>Actions</th></thead>
                   <tbodey>
                   @foreach($Contact as $contactItem)
                   <tr><td>{{ $contactItem->code }}</td><td>{{ $contactItem->number }}</td><td>{{ $contactItem->name }}</td><td>{{ $contactItem->emaill }}</td><td>{{ $contactItem->will_id }}</td><td>{{ $contactItem->media_id }}</td>
                       <td>
                         <form action="index_written_contacts/{{$contactItem->id}}/delete">
                            <button class="btn btn-danger float-right ml-2 btn-sm">Delete</button>
                         </form>
                         <form action="index_written_contacts/{{$contactItem->id}}/edit_written_contact">
                            <button class="btn btn-primary float-right ml-2 btn-sm">Edit</button>
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

