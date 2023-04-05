<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Sub;


class KriteriaController extends Controller
{
    public function index()
    {
        # code...
        $kriteria = Kriteria::all();
        return view('kriteria', ['kriterialist' => $kriteria]);
    }

    public function create()
    {
        # code...
        $sub = Sub::all();
        return view('kriteria-add', ['sub' => $sub]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'code' => 'required',
            'keterangan' => 'required',
            'sub_id' => 'required',
        ]);

        Kriteria::create($request->post());
        return view('kriteria-add', $request);

        # code...
        // $kriteria = Kriteria::create($request->all());

        // $kriteria = new Kriteria;
        // $kriteria->code = $request->code;
        // $kriteria->keterangan = $request->keterangan;
        // $kriteria->sub_id = $request->sub_id;
        // $kriteria->save();
    }
}
