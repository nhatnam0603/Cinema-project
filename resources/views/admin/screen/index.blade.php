@extends('layout.admin')
@section('content')
@method('get')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h4>SCREEN LIST
                        <a href="{{ Route('admin.screen.create') }}" class=" btn btn-primary btn-sm float-end">Add Product</a>
                    </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th>
                                    Screen Name
                                </th>                               
                                <th>
                                    Type
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($screens as $screen)
                            <td>
                                {{$screen->name}}
                            </td>
                            <td>
                            @switch($screen->type)
    @case(1)
        <span>2D</span>
        @break
 
    @case(2)
    <span>3D</span>
        @break
        @case(3)
    <span>IMAX</span>
        @break
    @default
       <span>Not assign</span>
@endswitch
                            </td>
                            <td>
                            <form action="{{ route('admin.screen.destroy', $screen->id) }}" method="post"
                                    style="display: inline-block">
                                    <a class="btn btn-primary" href="{{ route('admin.screen.edit',$screen) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('admin.screen.assign',$screen) }}">Assign Seats</a>
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
