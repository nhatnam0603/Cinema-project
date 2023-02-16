@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4 >ADD PRODUCT
                    <a href="{{ route('user.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            <div class="card-body" >
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Edit user</h4>
                            <p class="card-description">
                              Edit User
                            </p>
                            <form class="forms-sample">
                              <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}" placeholder="Name">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="email" value="{{$user->email}}" placeholder="Email">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputName1">Password</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="password" value="{{$user->password}}" placeholder="Password">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputName1">Role</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="role" value="{{$user->role}}" placeholder="Password">
                                @error('name')
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

