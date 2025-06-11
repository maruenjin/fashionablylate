<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/common.css')}}"/>
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>

            <div class="header__right">
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>
        
            @endauth

            @guest
        <a href="/login" class="login-btn">ログイン</a>
        <a href="/register" class="register-btn">登録</a>
    @endguest
        </div>   
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>