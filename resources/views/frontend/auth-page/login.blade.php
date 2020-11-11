@extends('frontend/layout/femain')
@section('maincon')
<style>
  .error{
            color: red;
        }
</style> 
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    @if(session()->has('message'))
                        <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <h2>Login to your account</h2>
                    <form method="POST" id="login" action="{{ url('/submit-login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <input id="email" placeholder ="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <input id="password" placeholder ="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                     <br><span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                   
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form method="POST" id="login_form_validation" action="{{url('/register')}}" aria-label="{{ __('Register') }}">
                    @csrf
                        <input id="firstname" placeholder="Firstname" type="text" class="" name="firstname" value="{{ old('firstname') }}" >
                        <input id="lastname" placeholder="Lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" >
                        <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" >
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
<script defer src="{{asset('admin/js/jquery.validate.min.js')}}"></script>
<script defer src="{{asset('frontend/js/login_form_validation.js')}}"></script>