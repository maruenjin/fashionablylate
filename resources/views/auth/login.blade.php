@extends('layouts.app')

@section('title', 'ログイン - FashionablyLate')

@section('content')
    <h2>ログイン</h2>

    <form method="POST" action="/login">
        @csrf

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">ログイン</button>
    </form>
@endsection
