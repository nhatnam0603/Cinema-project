@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD CAST
                    <a href="{{ route('cast.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <div class="card-body">
                <form action="{{ route('cast.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Cast </h4>
                                <p class="card-description">
                                    Add new Cast
                                </p>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <span class="input-group-append">
                                                <input class="file-upload-browse btn btn-dark" name="image" type="file">
                                                @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </span>
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Position</label>
                                        <textarea class="form-control" id="exampleTextarea1" name="position" rows="7"></textarea>
                                        @error('position')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success me-2">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection