<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('content', 'id');
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
