@extends('admin.layouts.auth')

@section('content')
    <div class="login-content">
        <form action="{{ URL::route('auth.login.process') }}" method="POST" class="margin-bottom-0">
            {{ csrf_field() }}
            @if(session('err'))
                <div class="alert alert-warning" role="alert"> {{ session('err')}}</div>
            @endif
            <div class="form-group m-b-20">
                <input id="username" name="username" type="text" class="form-control form-control-lg" placeholder="Username" value="{{ old('username')}}"/>
            </div>
            @if($errors->first('email'))
                <p class="text-danger"> {{ $errors->first('email')}}</p>
            @endif
            <div class="form-group m-b-20">
                <input id="password" name="password" type="password" class="form-control form-control-lg" placeholder="Password"/>
            </div>
            @if($errors->first('password'))
                <p class="text-danger"> {{ $errors->first('password')}}</p>
            @endif
            <div class="checkbox checkbox-css m-b-20">
                <input type="checkbox" id="remember" value="1"/>
                <label for="remember">
                Remember Me
                </label>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
            </div>
            <div class="m-t-20">
                Not a member yet? Click <a href="{{ url('admin/register') }}">here</a> to register.
            </div>
        </form>
    </div>
@endsection