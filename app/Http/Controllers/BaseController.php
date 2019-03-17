<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('home');
    }

    public function application(){
        return view('applications');
    }

    public function products(){
        return view('products');
    }

    public function productDetail(){
        return view('product-detail');
    }

    public function consultancy(){
        return view('consultancy');
    }

    public function contact(){
        return view('contact');
    }

    public function postContact(){
        return view('home');
    }
}
