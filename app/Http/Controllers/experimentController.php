<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class experimentController extends Controller
{
    //

    public function index()
    {
        return view('create-experiment');
    }
}
