@extends('_layouts.Master')

@section('title')
show all users
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                      <th>id</th><th>Name</th><th>Email</th><th>Premission</th><th>Action</th></thead>
                   <tbodey>
                  @foreach($User as $userInfo)
                    <tr><td>{{ $userInfo->id }}</td><td>{{ $userInfo->name }}</td><td>{{ $userInfo->email }}</td><td>{{ $userInfo->user_type }}</td>
                        <td>
                            <form action="showusers/{{$userInfo->id}}/delete">
                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
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
