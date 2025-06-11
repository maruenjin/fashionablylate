@extends('layouts.app')

@section('title', '新規登録 - FashionablyLate')

@section('content')
    <h2>新規登録</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">パスワード確認</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">登録</button>
    </form>
@endsection
