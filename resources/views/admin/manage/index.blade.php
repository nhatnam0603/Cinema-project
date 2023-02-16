@extends('layout.admin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h4>USER LIST
                        <a href="{{ url('user/create') }}" class=" btn btn-primary btn-sm float-end">Add User</a>
                    </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Role ID
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->role }}
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user) }}" method="post"
                                            style="display: inline-block">
                                            <a class="btn btn-success" href="{{Route('user.edit', $user->id)}}">Update</a>
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
