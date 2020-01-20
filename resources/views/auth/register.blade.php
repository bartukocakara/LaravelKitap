@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li class="active">Kayıt ol</li>
            </ol>
        </div>
    </div>
</div>
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>Kayıt ol</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-main">
                <div class="col-md-6 account-left">
                    <input name="name" class="{{$errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name') }}" placeholder="Adınız" type="text" tabindex="1" required>
                        @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    <input name="email" placeholder="Email adresiniz" class="{{$errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" type="text" tabindex="3" required>
                        @if($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    <input id="password" placeholder="Şifreniz" class="{{$errors->has('email') ? 'is-invalid' : ''}}" name="password" type="password" tabindex="4" required>
                        @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    <input id="password-confirm" placeholder="Şifreniz Tekrar" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="clearfix"></div>
            </div>
        <div class="address submit">
            <input type="submit" value="Submit">
        </div>
        </form>
    </div>
</div>
@endsection
