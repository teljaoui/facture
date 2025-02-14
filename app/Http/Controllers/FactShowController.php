<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactShowController extends Controller
{
    public function home(){
        return view('home');
    }
    public function allclient(){
        return view('clients.client');
    }
    public function addclient(){
        return view("clients.add");
    }
}
