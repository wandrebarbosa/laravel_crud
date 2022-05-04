<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeronave as ModelAeronave;

class Aeronave extends Controller
{
    public function index()
    {
        $aeronaves = ModelAeronave::get();
        return view('aeronave.index')->with('aeronaves', $aeronaves);
    }

    public function create()
    {
        return view('aeronave.create');
    }

    public function edite()
    {
        return view('aeronave.edite');
    }

    public function store(Request $request)
    {
        ModelAeronave::create($request->toArray());
        return redirect()->route('aeronave.index');
    }
}
