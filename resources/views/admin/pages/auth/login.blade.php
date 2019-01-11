@extends('admin.layouts.auth')

@section('content')
    <div class="login-content">
        <form action="{{ URL::route('auth.login.process') }}" method="POST" class="margin-bottom-0">
            {{ csrf_field() }}
            @if(session('err'))
                <div class="alert alert-warning" role="alert"> {{ session('err')}}</div>
            @endif
            <div class="form-group m-b-20">
                <input id="username" name="username" type="text" class="form-control form-control-lg" placeholder="{{__('label.username')}}" value="{{ old('username')}}"/>
            </div>
            @if($errors->first('username'))
                <p class="text-danger"> {{ $errors->first('username')}}</p>
            @endif
            <div class="form-group m-b-20">
                <input id="password" name="password" type="password" class="form-control form-control-lg" placeholder="{{__('label.password')}}"/>
            </div>
            @if($errors->first('password'))
                <p class="text-danger"> {{ $errors->first('password')}}</p>
            @endif
            <div class="checkbox checkbox-css m-b-20">
                <input type="checkbox" id="remember" name="remember" value="1"/>
                <label for="remember">
                {{__('label.remember_me')}}
                </label>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">{{__('label.sign_in')}}</button>
            </div>
        </form>
    </div>
@endsection