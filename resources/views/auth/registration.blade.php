@extends('layout')
  
@section('content')
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Register</h3>
                        <form action="{{  route('register.post')  }}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <div class="form-check d-flex justify-content-start mb-4">
                                <input type="text" id="name" class="form-control" name="name" required autofocus placeholder="Name">
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus placeholder="Email">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input type="password" id="password" class="form-control" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                           
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                            <hr class="my-4">
                            <a href="{{route('login')}}"  class="btn btn-success btn-lg ">Sign in now</a>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection