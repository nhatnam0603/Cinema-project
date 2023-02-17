@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD CAST TO MOVIE
                    <a href="{{ route('cast.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <div class="card-body">
                <form method="get" action="{{route('cast.assign',$cast)}}" class="pb-5">
                    <h3>Search movies</h3>
                    <ul class="navbar-nav mr-lg-4 w-100">
                        <li class="nav-item nav-search d-none d-lg-block w-100">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                                <input type="text" name="search" value="{{ Request::get('search') }}" class="form-control" placeholder="Search for Movies" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                </form>
                <div class="table-responsive">
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Image </th>
                                <th> Description </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                @if ($item->image != null && $item->image != '')
                                <td class="py-1">
                                    <img src="{{ asset('assets/img/movie/'.$item->image)  }}" alt="{{ $item->name }}" style="width: 100px; height:auto;" />
                                </td>
                                @endif
                                <td>
                                    {{ $item->description }}
                                </td>
                                <td>
                                    <form action="{{ route('cast.assign.store', $item) }}" method="post" style="display: inline-block">
                                        @csrf
                                        <input type="hidden" name="castid" value="{{$cast->id}}">
                                        <input type="submit" value="{{ ($item->candelete == 1)?'Unassign':'Assign'}}" class="btn {{($item->candelete == 1)?'btn-danger':'btn-primary'}}" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $movies->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection