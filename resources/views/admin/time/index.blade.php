@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>TIME LIST
                    <a href="{{ url('time/create') }}" class=" btn btn-primary btn-sm float-end">Add Time</a>
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
                            <th> Time </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($times as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->time }}
                            </td>
                            <td>
                                <form action="{{ route('time.destroy', $item) }}" method="post" style="display: inline-block">
                                    <a class="btn btn-primary" href="{{ route('time.edit',$item) }}">Edit</a>
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger"/>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $times->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection