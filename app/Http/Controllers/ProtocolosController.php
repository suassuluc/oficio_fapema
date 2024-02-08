<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio;
use App\Models\Setor;

class ProtocolosController extends Controller
{
    public function create()
    {
        $setores = Setor::all();
        return view('pages.protocolos.create', ['setores' => $setores]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required',
            'setor_id' => 'required|exists:setores,id',
            'arquivos' => 'required|file|mimes:pdf,docx,doc',
        ]);

        $oficio = Oficio::create([
            'assunto' => $request->assunto,
            'data' => now(),
            'setor_id' => $request->setor_id,
        ]);

        if ($request->hasFile('arquivos')) {
            $this->store_file($request, $oficio->id, 'arquivos');
        }

        return redirect()->route('protocolos.home')->with('success', 'Assunto cadastrado com sucesso!');
    }

    public function store_file(Request $request, $id, $fieldName)
    {

        $name = $request->$fieldName->hashName();
        $oficio = Oficio::find($id);
        $oficio->$fieldName = 'files/' . $name;
        $oficio->save();

        //$request->$fieldName->storeAs('files', $name);

        move_uploaded_file($request->$fieldName->getRealPath(), storage_path('app/files/') . 'teste.pdf');

        dd($request->all(),  $name, $request->$fieldName->getRealPath());
    }
}
