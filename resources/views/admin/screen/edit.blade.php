@extends('layout.admin')
@section('content')
@method('post')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4 >EDIT SCREEN
                    <a href="{{ url('/screen') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            <div class="card-body" >
                <form action="{{ route('admin.screen.update',$screen) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">EDIT PRODUCT</h4>
                            <p class="card-description">
                              Edit Screen
                            </p>
                            <form class="forms-sample">
                              <div class="form-group">
                                <label for="exampleInputName1">Screen Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder={}{}>
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
                                      <input class="form-check-input" type="checkbox" name="type[]" id="typeCheckbox{{$type->id}}" value="{{$type->id}}" {{in_array($type->id,$screenType)? 'checked': ''}}>
                                      <label class="form-check-label" for="typeCheckbox{{$type->id}}">{{$type->name}}</label>
                                    </div>
                                    @endforeach
                                    <div class="form-group">
                                <label for="exampleInputName1">Price</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="price" placeholder="{{$screen->price}}" >
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                              </div>
                              <button type="submit" class="btn btn-success me-2">Save</button>
                              <button class="btn btn-dark">Cancel</button>
                            </form>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
@endsection
