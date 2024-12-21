@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<div class="header__button">
    <button type="button"><a href="/register">register</a></button>
</div>
@endsection


@section('content')
<div class="login-form__content">
    <div class="login-form__heading">
        <h2>login</h2>
    </div>
    
</div>

<div class="login-form">
    <form class="form" action="/admin" method="post">
        @csrf
        <div class="login-form__innner">
            <div class="login-form__input">
                <div class="login-form__input--label">
                    メールアドレス
                </div>
                <div class="login-form__input--box">
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="login-form__input--error">
                @error('email')
                    {{ $message }}
                @enderror
                </div>
            </div>


            <div class="login-form__input">
                <div class="login-form__input--label">
                    パスワード
                </div>
                <div class="login-form__input--box">
                    <input type="password" name="password">
                </div>
                <div class="login-form__input--error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>


            <div class="login-form__button">
                <button type="submit">ログイン</button>
            </div>

        </div>



    </form>
</div>

@endsection