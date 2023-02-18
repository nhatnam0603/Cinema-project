@extends('layout.admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>ADD SEATS TO SCREEN
                    <a href="{{ route('admin.screen.index') }}" class=" btn btn-dark btn-sm float-end">Back</a>
                </h4>
            @endif
            </div>
            <div class="card-header">
            @foreach($screenInfo as $s)
                <h4>SCREEN NAME : {{$s->name}}</h4>
                @endforeach
            </div>
            <div class="card-body">
                <form action="{{route('admin.screen.assign.store',$screen)}}" method="get">
                    <input type="hidden" name="screenid" value={{$screen}}>
                    <div class="form-group">
                        <label>Seat number</label>
                        <input name="number"/>
                        <label>Seat row</label>
                        <input name="row"/>
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