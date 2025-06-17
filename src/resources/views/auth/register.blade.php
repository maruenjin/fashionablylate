@extends('layouts.app')

@section('title', 'Register')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <h2>Register</h2>

    <div class="form-container">
        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <label for="name">お名前</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <label for="email">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label for="password">パスワード</label>
            <input type="password" name="password">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">登録</button>
        </form>

        <a href="{{ route('login') }}" class="login-link">ログインはこちら</a>
    </div>
@endsection
