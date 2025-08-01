<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
    return view('index');
   }

   public function confirm(Request $request)
   {
    $contact = $request->only(['name','gender','email','tel','adress','building','confirm-type','content']);
    return view('confirm',compact('contact'));
   }
}