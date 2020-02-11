<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InStockController extends Controller
{
    public function index()
    {
        return view('in-stock');
    }
}
