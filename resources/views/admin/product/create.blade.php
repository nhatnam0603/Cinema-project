@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4 >ADD PRODUCT
                    <a href="{{ url('/product') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            <div class="card-body" >
                <form action="{{ url('/product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Create Product</h4>
                            <p class="card-description">
                              Create Movie
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
                                <label for="exampleInputEmail3">Began at</label>
                                <input type="datetime-local" class="form-control" id="exampleInputEmail3" name="began_at" placeholder="Enter time start">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword4">End at</label>
                                <input type="datetime-local" class="form-control" id="exampleInputPassword4" name="end_at" placeholder="Enter time end">
                              </div>
                              <div class="form-group">
                                <label for="exampleSelectGender" style="display: block;">Type</label>
                                  @error('type')
                                      <small class="text-danger">{{$message}}</small>
                                  @enderror
                                    @foreach($screenType as $type)
                                    <div class="form-check form-check-inline" style="display:inline-block;padding-left: 1.5rem;">
                                      <input class="form-check-input" type="checkbox" name="type[]" id="typeCheckbox{{$type->id}}" value="{{$type->id}}">
                                      <label class="form-check-label" for="typeCheckbox{{$type->id}}">{{$type->name}}</label>
                                    </div>
                                    @endforeach
                                  
                              </div>
                              <div class="form-group">
                                <label for="exampleSelectGender" style="display: block;">Genre</label>
                                  @error('genre')
                                      <small class="text-danger">{{$message}}</small>
                                  @enderror
                                    @foreach($genres as $genre)
                                    <div class="form-check form-check-inline" style="display:inline-block;padding-left: 1.5rem;">
                                      <input class="form-check-input" type="checkbox" name="genre[]" id="genreCheckbox{{$genre->id}}" value="{{$genre->id}}">
                                      <label class="form-check-label" for="genreCheckbox{{$genre->id}}">{{$genre->name}}</label>
                                    </div>
                                    @endforeach
                                  
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
                                <label>Banner</label>
                                <input type="file" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <span class="input-group-append">
                                    <input class="file-upload-browse btn btn-dark" name="banner" type="file">
                                    @error('banner')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                  </span>
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Banner">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="7"></textarea>
                                @error('description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                              <label for="videoid">Teaser video</label>
                                <input type="text" class="form-control" id="videoid" name="video" placeholder="Video">
                                @error('video')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
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
