@extends('front.layout')
@section('content')

    <div class="container">
        <form class="form-signin" action="{{url('login')}}" method="post">
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                @if(isset($massage))
                    {{$massage}}
                @endif
                <input type="text" name="email" class="form-control" placeholder="email" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" placeholder="Password">
                <input type="checkbox" name="remember" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#"> Forgot Password?</a>
                </span>

                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                <div class="registration">
                    Don't have an account yet?
                    <a class="" href="{{url('register')}}">
                        Create an account
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection
