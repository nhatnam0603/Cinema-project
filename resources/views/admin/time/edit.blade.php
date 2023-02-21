@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD TIME
                    <a href="{{ route('time.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <div class="card-body">
                <form action="{{ route('time.update',$time) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Time </h4>
                                <p class="card-description">
                                    Update time
                                </p>
                                <div class="form-group">
                                    <label for="timeid">Time</label>
                                    <input type="time" class="form-control" id="timeid" name="time" placeholder="Enter time " required value="{{$time->time}}">
                                </div>
                                <button type="submit" class="btn btn-success me-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection