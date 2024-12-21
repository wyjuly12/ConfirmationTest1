<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
//登録画面//
    public function index(){
    return view('index');
    }

//登録画面//
    public function confirm(ContactRequest $request){
    $contact = $request->all();
    return view('confirm', compact('contact'));
    }

 
//完了画面//
    public function store(Request $request){
        $contact = $request->all();
        Contact::create($contact);
        return view('thanks');
    }






}
