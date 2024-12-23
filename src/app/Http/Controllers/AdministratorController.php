<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //登録画面
    public function userRegister(){
        return view('register');
    }

    // ログイン画面
    public function userCreate(AdminRequest $request){
        $users = $request->all();
        User::create($users);
        return redirect('/login');
    }

    public function adminLogin(AdminRequest $request){
        return view('admin',compact('Contacts'));
     }


    // 管理画面
    public function adminIndex(Request $request){
        $contacts = Contact::all();
        $contacts = Contact::paginate(7);
        return view('admin',compact('contacts'));
    }

    public function search(Request $request){
        $contacts = Contact::where('email',($request->keyword))-> orwhere('email',($request->gender));
        return view('admin', compact('contacts'));
    }






}
