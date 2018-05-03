@extends('front.layout')
@section('content')
    <div class="container">
        <form class="form-signin" action="{{url('register')}}" method="post">
            <h2 class="form-signin-heading">register now</h2>
            <div class="login-wrap">
                @if(isset($errors))
                    @foreach($errors as $error)
                        {{$error}}
                    @endforeach
                 @endif
                <p>Enter your details </p>
                <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                <input type="text" name="username" class="form-control" placeholder="User Name" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                <textarea name="about" placeholder="about" class="form-control" autofocus ></textarea>
                <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" placeholder="Email" autofocus>

                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy

                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

                <div class="registration">
                    Already Registered.
                    <a class="" href="{{url('login')}}">Login</a>
                </div>
            </div>
        </form>
    </div>
@endsection