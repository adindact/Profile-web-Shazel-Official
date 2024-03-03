<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function crud()
    {
        return view('admin');
    }

    public function createProduct()
    {
        return view('createProduct');
    }
}
