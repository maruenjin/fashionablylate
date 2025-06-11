@extends('layouts.app')

@section('title', 'FashionablyLate')

@section('content')
    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
            <div class="error">{{ $message }}</div>
             @enderror
        </div>

        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">ログイン</button>
    </form>
@endsection

