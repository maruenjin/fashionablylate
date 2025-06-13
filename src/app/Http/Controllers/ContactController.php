<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = [
            1 => '商品のお届けについて',
            2 => '商品の交換について',
            3 => '商品トラブル',
            4 => 'ショップへのお問い合わせ',
            5 => 'その他'
        ];
        return view('contact.index',compact('categories'));
    }
    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        return view('contact.confirm',compact('inputs'));
    }

    public function thanks()
    {
        return 'ありがとう画面';
    }
}
