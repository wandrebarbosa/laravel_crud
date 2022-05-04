<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeroporto as ModelAeroporto;

class Aeroporto extends Controller
{
    public function index()
    {
        $aeropotos = ModelAeroporto::get();
        return view('aeroport.index')->with('aeroportos', $aeropotos);
    }

    public function create()
    {
        return view('aeroport.create');
    }

    public function edite()
    {
        return view('aeroport.edite');
    }

    public function store(Request $request)
    {
        ModelAeroporto::create($request->toArray());
        return redirect()->route('aeroporto.index');
    }
}
