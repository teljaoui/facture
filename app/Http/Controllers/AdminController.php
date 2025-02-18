<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function compte(){
        $page_title = "Paramètres du compte";
        return view('admin.admin' , compact('page_title'));
    }

    public function password_up(){
        $page_title = "Changer le mot de passe";
        return view('admin.passwordup' , compact('page_title'));
    }
}
