<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm()
    {
        return '確認画面';
    }

    public function thanks()
    {
        return 'ありがとう画面';
    }
}
