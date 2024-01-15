<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio;
use App\Models\Setor;

class ProtocolosController extends Controller
{
    public function create()
    {
        $setores =  Setor:: all();
        return view('pages.protocolos.create',['setores'=>$setores]);
    }

    public function store(Request $request,)
    {
        $request->validate([
            'assunto'=>'required',
            'setor_id' => 'required|exists:setores,id',
        ]);



        oficio::create([
            'assunto'=> $request->assunto,
            'data' => now(),
            'setor_id' => $request->setor_id,
        ]);


        return redirect()->route('protocolos.home',[])->with('sucess','Assunto cadastrado com sucesso!');
    }
}
