<?php

namespace App\Http\Controllers;

use App\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', [
            'empresas' => $empresas
        ]);
    }

    public function show(Empresa $empresa) //Empresa::find(wildcard)
    {
        //$empresa = Empresa::find($id);
        //return $empresa;

        return view('empresas.show', [
            'empresa' => $empresa
        ]);
    }

    public function registro()
    {
        return view('empresas.registro');
    }

    public function store()
    {
        //dd(request()->all());

        Empresa::create(request()->all());

        return redirect('/');  //TODO: poner pagina de registro correcto
    }
}
