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

        $tel1 = $request->input('tel1', '');
        $tel2 = $request->input('tel2', '');
        $tel3 = $request->input('tel3', '');
        $inputs['tel'] = trim($tel1 . '-' . $tel2 . '-' . $tel3, '-');
        
        $inputs['category_name'] = Category::find($request->category_id)->content;

        session(['inputs' => $inputs]); 

        return view('contact.confirm',compact('inputs'));
        

    }
    public function send(Request $request)
{
    

    $inputs = session('inputs');
    
    if (!$inputs) {
        
        return redirect()->route('contact.index')->with('error', 'セッションが切れました。もう一度入力してください。');
    }


    
    \App\Models\Contact::create([
        'last_name' => $inputs['last_name'],
        'first_name' => $inputs['first_name'],
        'gender' => $inputs['gender'],
        'email' => $inputs['email'],
        'tel' => $inputs['tel'],
        'address' => $inputs['address'],
        'building' => $inputs['building'],
        'category_id' => $inputs['category_id'],
        'detail' => $inputs['detail'],
    ]);

    session()->forget('inputs'); 
    return redirect()->route('contact.thanks');
}
public function thanks()
{
    return view('contact.thanks');
}
}