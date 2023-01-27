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
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail3">Began at</label>
                                <input type="date" class="form-control" id="exampleInputEmail3" name="began_at" placeholder="Enter time start">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword4">End at</label>
                                <input type="date" class="form-control" id="exampleInputPassword4" name="end_at" placeholder="Enter time end">
                              </div>
                              <div class="form-group">
                                <label for="exampleSelectGender">Type</label>
                                  <select class="form-control mdi mdi-chevron-down" name="type" id="exampleSelectGender">
                                    <option>Male</option>
                                    <option>Female</option>
                                  </select>
                                </div>
                              <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">

                                  <span class="input-group-append">
                                    <input class="file-upload-browse btn btn-dark" type="file">
                                  </span>
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="7"></textarea>
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
