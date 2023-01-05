@extends('layout')

@section('content')
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Sign in</h3>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
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
                            
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  name="remember" id="form2Example31" value="" />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                          
                            <div class="form-check d-flex justify-content-start mb-4">
                                Don`t have account?<a href="{{route('register')}}">Sign up here</a>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            <hr class="my-4">
                        </form>
                        <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection