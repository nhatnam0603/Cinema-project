@extends('layout.admin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h4 >PRODUCT LIST
                        <a href="{{ url('product/create') }}" class=" btn btn-primary btn-sm float-end">Add Product</a>
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
                                    Image
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Type
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
                            <tr>
                                <td class="py-1">
                                    <img src="../../images/faces/face1.jpg" alt="image" />
                                </td>
                                <td>
                                    Herman Beck
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $ 77.99
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    <button class="btn-primary" type="submit">Edit</button> | <button class="btn-danger" type="submit">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
