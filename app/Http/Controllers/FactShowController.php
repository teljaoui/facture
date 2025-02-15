<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactShowController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function allclient()
    {
        return view('clients.clients');
    }
    public function addclient()
    {
        return view("clients.add");
    }
    public function updateClient()
    {
        return view('clients.update');
    }

    public function detailclient(){
        return view('clients.info');
    }

    public function allproducts()
    {
        return view('products.products');
    }
    public function addproduct()
    {
        return view('products.add');
    }
    public function updateproduct()
    {
        return view('products.update');
    }
    public function detailproduit(){
        return view('products.info');
    }

    public function alldevis(){
        return view('devis.devis');
    }
    public function adddevis(){
        return view('devis.add');
    }
    public function updatedevis(){
        return view('devis.update');
    }
    public function detaildevis(){
        return view('devis.info');
    }

}
