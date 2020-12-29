@extends('layout.kia')

@section('header')
@include('inc.header')
@endsection

@section('content')
<br><br><br>
	<div class="container main-section">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default login-form">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label>Email Address</label>
                            <div class="input-group">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <label>Password</label>
                            <div class="input-group">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Sign In') }}
                                    </button>
                                </div>	
                                <div class="col-md-6">
                                    <h6 class="pull-right">
                                    <a href="{{'/'}}">Return Home</a>
                                    </h6>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>				
            </div>
            <div class="col-md-4"></div>        
        </div>		
    </div>
@endsection
@section('footer')
<script src="{{URL::to('')}}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{URL::to('')}}/assets/js/main.js"></script>    
@endsection
