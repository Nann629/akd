<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    //
    public function index()
    {
        # code...
        $sub = Sub::all();
        return view('sub', ['sublist' => $sub]);
    }
}
