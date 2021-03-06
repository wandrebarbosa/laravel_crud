<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeroporto as ModelAeroporto;
use App\Aeronave as ModelAeronave;
use App\Voo as ModelVoo;

class Voo extends Controller
{
    public function index()
    {
        $voos = ModelVoo::get();
        $aeropotos = ModelAeroporto::get();
        $aeronaves = ModelAeronave::get();
        return view('voo.index', [$aeronaves,$aeropotos])->with('voos', $voos);
    }

    public function create()
    {
        $aeropotos = ModelAeroporto::get();
        $aeronaves = ModelAeronave::get();
        return view('voo.create', compact("aeronaves", "aeropotos"));
    }

    public function edite(ModelVoo $voo)
    {
        $aeropotos = ModelAeroporto::get();
        $aeronaves = ModelAeronave::get();
        return view('voo.edite', compact('voo', 'aeropotos', 'aeronaves'));
    }

    public function store(Request $request)
    {
        ModelVoo::create($request->toArray());
        return redirect()->route('voo.index');
    }

    public function update(ModelVoo $voo, Request $request)
    {
        $voo->codigo=$request->codigo;
        $voo->gate=$request->gate;
        $voo->id_aeronave=$request->id_aeronave;
        $voo->id_aeroporto=$request->id_aeroporto;
        $voo->save();
        return redirect()->route('voo.index');
    }
}

