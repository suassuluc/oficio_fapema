<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oficio;
use App\Models\setor;
use App\Models\usuarios;

class ProtocolosController extends Controller
{
    public function create()
    {
        return view('pages.protocolos.create',[]);
    }

    public function store(Request $request,)
    {
        $request->validate([
            'assunto'=>'required',
        ]);

        oficio::create([
            'assunto'=> $request->assunto,
            'data' => now(),
        ]);

        return redirect()->route('protocolos.home',[])->with('sucess','Assunto cadastrado com sucesso!');
    }
}
