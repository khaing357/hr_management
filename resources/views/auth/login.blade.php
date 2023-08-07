@extends('layouts.app_plain')
@section('title','Login')
@section('extra_css')
    <style>
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height:100vh;">
        <div class="col-md-6">
            <div class="text-center">
                <img src="{{asset('images/b.png')}}" alt="logo_image" style="width:120px;">
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Login</h5>
                    <p class="text-muted text-center">Please fill the login form</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="typeEmail" class="form-control" />
                            <label class="form-label" for="typeEmail">Email input</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="typePassword" class="form-control" />
                            <label class="form-label" for="typePassword">Password</label>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-theme btn-block"> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
