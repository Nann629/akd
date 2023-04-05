<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    //
    public function index()
    {
        # code...
        $dokumen = Dokumen::all();
        return view('dokumen', ['dokumenlist' => $dokumen]);
    }
}
