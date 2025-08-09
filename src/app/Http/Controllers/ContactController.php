<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
   public function index()
   {
      $contact=Contact::all();
    return view('index',compact('contact'));
   }

   public function confirm(ContactRequest $request)
   {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'adress', 'tel1', 'tel2', 'tel3', 'email', 'building', 'content', 'confirm-type']);
    return view('confirm',compact('contact'));
   }
   public function form(Request $request)
   {
      if($request->isMethod('post')){
         session(['contact' => $request->all()]);
      }
      return view('form');
   }


public function store(ContactRequest $request)
{
   $contact = $request->only(['last_name', 'first_name', 'gender', 'adress', 'tel1', 'tel2', 'tel3', 'email', 'building', 'detail']);
   $contact['tel'] = $contact['tel1'] . '-' . $contact['tel2'] . '-' . $contact['tel3'];

    // 不要なデータを削除
    unset($contact['tel1'], $contact['tel2'], $contact['tel3']);

    // 必要なら 'detail' カラムにも値を入れる（'content'など）
    $contact['detail'] = $contact['content'] ?? '';



Contact::create($contact);


    return view('thanks');

}
}