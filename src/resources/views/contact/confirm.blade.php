@extends('layouts.app')
@section('content')
<div class="container-confirm">

    <h2>Confirm</h2>

    <table>
        <tr><th>お名前</th><td>{{ $inputs['last_name'] }} {{ $inputs['first_name'] }}</td></tr>
        <tr><th>性別</th><td>
            @if($inputs['gender'] == 1) 男性
            @elseif($inputs['gender'] == 2) 女性
            @else その他
            @endif
        </td></tr>
        <tr><th>メールアドレス</th><td>{{ $inputs['email'] }}</td></tr>
        <tr><th>電話番号</th><td>{{ $inputs['tel'] }}</td></tr>
        <tr><th>住所</th><td>{{ $inputs['address'] }}</td></tr>
        <tr><th>建物名</th><td>{{ $inputs['building'] }}</td></tr>
        <tr><th>お問い合わせの種類</th><td>{{ $inputs['category_name'] }}</td></tr>
        <tr><th>お問い合わせ内容</th><td>{{ $inputs['detail'] }}</td></tr>
    </table>
<div class="confirm-buttons">
    <form method="post" action="{{ route('contact.send') }}">
        @csrf
        <button type="submit" class="button">送信</button>
    </form>

    <form method="get" action="{{ route('contact.index') }}">
        <button type="submit" class="button">修正</button>
    </form>
</div>
</div>
@endsection
