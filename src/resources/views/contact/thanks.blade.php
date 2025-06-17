@extends('layouts.app')

@section('content')
<div class="container-thanks">
    <h1>Thank you</h1>
    <p>お問い合わせありがとうございました</p>

    <form method="get" action="{{ route('contact.index') }}">
        <button class="btn-home">HOME</button>
    </form>
</div>
@endsection

