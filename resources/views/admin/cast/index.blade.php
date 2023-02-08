@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>CAST LIST
                    <a href="{{ url('cast/create') }}" class=" btn btn-primary btn-sm float-end">Add Cast</a>
                </h4>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-dark ">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Image </th>
                            <th> Position </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($casts as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            @if ($item->image != null && $item->image != '')
                            <td class="py-1">
                                <img src="assets/img/cast/{{ $item->image  }}" alt="{{ $item->name }}" style="width: 100px; height:auto;" />
                            </td>
                            @endif
                            <td>
                                {{ $item->position }}
                            </td>
                            <td>
                                <form action="{{ route('cast.destroy', $item) }}" method="post" style="display: inline-block">
                                    <a class="btn btn-primary" href="{{ route('cast.edit',$item) }}">Edit</a>
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger"/>
                                    <a class="btn btn-primary" href="{{ route('cast.assign',$item) }}">Assign</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $casts->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection