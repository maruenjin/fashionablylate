@extends('layouts.app')

@section('title', 'FashionablyLate')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="auth-container">
        <h2 class="auth-title">Register</h2>

        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" placeholder="例：山田 太郎" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" placeholder="例：test@example.com" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password" placeholder="例：coachtech1106">
            </div>

            <div class="form-group">
                <label for="password_confirmation">パスワード（確認）</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="form-group">
                <button type="submit">登録</button>
            </div>
        </form>
    </div>
@endsection

