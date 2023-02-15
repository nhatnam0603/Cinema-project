@extends('layout.admin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h4>PRODUCT LIST
                        <a href="{{ url('product/create') }}" class=" btn btn-primary btn-sm float-end">Add Product</a>
                    </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Genre
                                </th>
                                <th>
                                    Begin at
                                </th>
                                <th>
                                    End at
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prods as $item)
                                <tr>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    @if ($item->image != null && $item->image != '')
                                        <td class="py-1">
                                            <img src="{{asset('assets/img/movie/'.$item->image ) }}" alt="{{ $item->name }}"
                                                style="with: 100px; height:auto;" />
                                        </td>
                                    @endif
                                    <td>
                                        {{ $item->description }}
                                    </td>
                                    <td>
                                        @foreach($item->types as $type)
                                        {{$type->name . ', '}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($item->genres as $genre)
                                        {{$genre->name . ', '}}
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ $item->began_at }}
                                    </td>
                                    <td>
                                        {{ $item->end_at }}
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.product.destroy', $item->id) }}" method="post"
                                            style="display: inline-block">
                                            <a class="btn btn-primary" href="{{ route('admin.product.edit',$item) }}">Edit</a>
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
