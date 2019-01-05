@extends('layouts.auth')

@section('content')
    <div class="login-content">
        <form action="index.html" method="GET" class="margin-bottom-0">
            <div class="form-group m-b-20">
                <input type="text" class="form-control form-control-lg" placeholder="Email"/>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">{{__('Send Password Reset Link')}}</button>
            </div>
            <div class="m-t-20">
                Already a member? Click <a href="{{ url('admin/login') }}">here</a> to login.
            </div>
        </form>
    </div>
@endsection