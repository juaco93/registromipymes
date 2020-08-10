<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\EmpresaSector;
use Illuminate\Support\Facades\DB;

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
        $sectores =  DB::table('empresa_sectores')->get();
        $categoriasMonotributo = DB::table('afip_categoria_monotributos')->get();
        return view('empresas.registro', [
            'afip_categoria_monotributos' => $categoriasMonotributo,
            'sectores' => $sectores
        ]);
    }

    public function store()
    {

        $this->validate(request(),[
            'nombreFantasia' => 'required|max:10',
            'razon_social' => 'required'
        ]
        );

        dd(request()->all());

        Empresa::create(request()->all());

        return redirect('/');  //TODO: poner pagina de registro correcto
    }
}
