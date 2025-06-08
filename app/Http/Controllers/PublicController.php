<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function store(){
        $products = Product::take(4)->get();
        return view('views.store', compact('products'));
    }
}
