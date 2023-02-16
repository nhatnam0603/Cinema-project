@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD MOVIE TO SCREEN
                    <a href="{{ route('admin.product.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <div class="card-body">
                <h3>Search time by date and screen  </h3>
                <form method="get" action="{{route('admin.product.assign',$movie)}}" class="pb-5">
                    <ul class="navbar-nav mr-lg-4 w-100">
                        <li class="nav-item nav-search d-none d-lg-block w-100">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Enter time" value="{{Request::get('date')}}">
                                @error('date')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="screen">
                                    <option>Choose screen</option>
                                    @foreach($screens as $screen)
                                    <option value="{{$screen->id}}" {{($screen->id == Request::get('screen'))?'selected':''}}>{{$screen->name}}</option>
                                    @endforeach
                                </select>
                                @error('screen')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary">
                                    Check
                                </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>

            <div class="card-footer">
                <form action="{{route('admin.product.assignscreen',$movie)}}" method="get">
                    <input type="hidden" name="screenid" value="{{Request::get('screen')}}">
                    <input type="hidden" name="dateAssign" value="{{Request::get('date')}}">
                    <div class="form-group">
                        <label for="exampleSelectGender" style="display: block;">Choose Time</label>
                        @error('time')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        @foreach($times as $time)
                        <div class="form-check form-check-inline" style="display:inline-block;padding-left: 1.5rem;">
                            <input class="form-check-input" type="checkbox" name="time[]" id="Time{{$time->id}}" value="{{$time->id}}">
                            <label class="form-check-label" for="Time{{$time->id}}">{{$time->time}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="form">
                        <button type="submit" class="btn btn-success">
                            Assign
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection