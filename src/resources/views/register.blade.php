@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
<div class="header__button">
    <button type="button"><a href="/login">login</a></button>
</div>
@endsection


@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    
</div>

<div class="register-form">
    <form class="form" action="/login" method="post">
        @csrf
        <div class="register-form__innner">
            <div class="register-form__input">
                <div class="register-form__input--label">
                    お名前
                </div>
                <div class="register-form__input--box">
                    <input type="text" name="name">
                </div>
                <div class="register-form__input--error">
                @error('name')
                    {{ $message }}
                @enderror
                </div>
            </div>


            <div class="register-form__input">
                <div class="register-form__input--label">
                    メールアドレス
                </div>
                <div class="register-form__input--box">
                    <input type="email" name="email">
                </div>
                <div class="register-form__input--error">
                @error('email')
                    {{ $message }}
                @enderror
                </div>
            </div>

            <div class="register-form__input">
                <div class="register-form__input--label">
                    パスワード
                </div>
                <div class="register-form__input--box">
                    <input type="password" name="password">
                </div>
                <div class="register-form__input--error">
                @error('password')
                    {{ $message }}
                @enderror
                </div>
            </div>

            <div class="register-form__button">
                <button type="submit">登録</button>
            </div>

        </div>



    </form>
</div>

@endsection