<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voo as ModelVoo;

class Voo extends Controller
{
    public function index()
    {
        $voos = ModelVoo::get();
        return view('voo.index')->with('voos', $voos);
    }

    public function create()
    {
        return view('voo.create');
    }

    public function edite()
    {
        return view('voo.edite');
    }

    public function store(Request $request)
    {
        ModelVoo::create($request->toArray());
        return redirect()->route('voo.index');
    }
}