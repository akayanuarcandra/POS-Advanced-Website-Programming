<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyController extends Controller
{
    public function index()
    {
        return view('products.beauty');
    }
}
