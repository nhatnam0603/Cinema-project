@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD SCREEN
                    <a href="{{ route('admin.screen.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
              {{ session('status') }}
            </div>
            @endif
            <div class="card-body">
                <form action="{{ route('admin.screen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Screen </h4>
                                <p class="card-description">
                                    Add new Screen
                                </p>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Screen Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Screen Name">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                <label for="exampleSelectGender" style="display: block;">Type</label>
                                  @error('type')
                                      <small class="text-danger">{{$message}}</small>
                                  @enderror
                                    @foreach($screenType as $type)
                                    <div class="form-check form-check-inline" style="display:inline-block;padding-left: 1.5rem;">
                                      <input class="form-check-input" type="radio" name="type[]" id="typeCheckbox{{$type->id}}" value="{{$type->id}}">
                                      <label class="form-check-label" for="typeCheckbox{{$type->id}}">{{$type->name}}</label>
                                    </div>
                                    @endforeach     
                                    <div class="form-group">
                                        <label for="exampleInputName1">Price</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="price" placeholder="Price">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>           
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
