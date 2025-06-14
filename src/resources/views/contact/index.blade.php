@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>FashionablyLate</h1>
    <h2>Contact</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

        {{-- お名前 --}}
        <label>お名前 ※</label><br>
        <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
        <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}"><br><br>

        {{-- 性別 --}}
        <label>性別 ※</label><br>
        <input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}> 男性
        <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}> 女性
        <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}> その他<br><br>

        {{-- メール --}}
        <label>メールアドレス ※</label><br>
        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}"><br><br>

        {{-- 電話番号 --}}
        <label>電話番号 ※</label><br>
        <input type="text" name="tel1" size="5" value="{{ old('tel1') }}"> -
        <input type="text" name="tel2" size="5" value="{{ old('tel2') }}"> -
        <input type="text" name="tel3" size="5" value="{{ old('tel3') }}"><br><br>

        {{-- 住所 --}}
        <label>住所 ※</label><br>
        <input type="text" name="address" placeholder="例: 東京都新宿区下落合3-9-3" value="{{ old('address') }}"><br><br>

        {{-- 建物名 --}}
        <label>建物名</label><br>
        <input type="text" name="building" placeholder="例: 早稲田マンション101" value="{{ old('building') }}"><br><br>

        {{-- お問い合わせの種類 --}}
        <label>お問い合わせの種類 ※</label><br>
        <select name="category_id">
            <option value="">選択してください</option>
            @foreach ($categories as $id => $content)
                <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $content }}</option>
            @endforeach
        </select><br><br>

        {{-- 内容 --}}
        <label>お問い合わせ内容 ※</label><br>
        <textarea name="detail" rows="5" cols="40" placeholder="お問い合わせ内容をご記入ください">{{ old('detail') }}</textarea>
<br><br>

        <button type="submit">確認画面</button>
    </form>
</div>
@endsection
