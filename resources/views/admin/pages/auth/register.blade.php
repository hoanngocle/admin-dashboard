@extends('layouts.auth')

@section('content')
    <div class="login-content">
        <form action="index.html" method="GET" class="margin-bottom-0">
            <div class="form-group m-b-20">
                <input type="text" id="username" class="form-control form-control-lg" placeholder="Username"/>
            </div>
            <div class="form-group m-b-20">
                <input type="text" id="email" class="form-control form-control-lg" placeholder="Email"/>
            </div>
            <div class="form-group m-b-20">
                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
            </div>
            <div class="form-group m-b-20">
                <input type="password" id="re-password" class="form-control form-control-lg" placeholder="Confirm Password"/>
            </div>
            <div class="checkbox checkbox-css m-b-20">
                <div class="checkbox checkbox-css m-2-30">
                    <input type="checkbox" id="agreement_checkbox" value="">
                    <label for="agreement_checkbox">
                        By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
                    </label>
                </div>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">Sign Up</button>
            </div>
            <div class="m-t-20">
                Already a member? Click <a href="{{ url('admin/login') }}">here</a> to login.
            </div>
        </form>
    </div>
@endsection