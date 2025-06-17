<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'FashionablyLate')</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">


    @yield('css')
</head>
<body>
<header class="site-header">
    <div></div> 
    <div class="logo-wrapper">
        <div class="logo">FashionablyLate</div>
    </div>
    <div class="nav-links">
        <a href="{{ route('login') }}">ログイン</a>
       
    </div>
</header>


    <div class="page-container">
        @yield('content')
    </div>
</body>
</html>

