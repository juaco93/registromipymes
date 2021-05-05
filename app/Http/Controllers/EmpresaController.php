<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\EmpresaSector;
use App\Http\Requests\EmpresaStoreRequest;
use App\Rules\CUITValido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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
        Log::debug('Entrando a la seccion de registro');
        $sectores =  DB::table('empresa_sectores')->get();
        $categoriasMonotributo = DB::table('afip_categoria_monotributos')->get();

        return view('empresas.registro', [
            'afip_categoria_monotributos' => $categoriasMonotributo,
            'sectores' => $sectores
        ]);
    }


    public function createStep1(Request $request)
    {
        $empresa = $request->session()->get('empresa');

        return view('empresas.registro.paso1',compact('empresa'));
    }

    public function PostcreateStep1(Request $request)
    {
        // VALIDACIONES
        $validatedData = $request->validate([
            'cuit' => 'required',
        ]);

        // Primera vez que entramos al paso, NO está creado el objeto Empresa
        if(empty($request->session()->get('empresa'))){
            $empresa = new Empresa();
            $empresa->fill($validatedData);
            $request->session()->put('empresa', $empresa);

        // Si estamos volviendo a este paso y ya está creado el objeto Empresa
        }else{
            $empresa = $request->session()->get('empresa');
            $empresa->fill($validatedData);
            $request->session()->put('empresa', $empresa);
        }

        return redirect('/registro2');
    }

    public function createStep2(Request $request)
    {
        $empresa = $request->session()->get('empresa');
        $categoriasMonotributo = DB::table('afip_categoria_monotributos')->get();
        $codigosActividades = DB::table('empresa_codigo_actividades')->get();
        $generos = [1 => 'Hombre', 2 => 'Mujer', 3 => 'No Binario'];

        return view('empresas.registro.paso2',compact('empresa','categoriasMonotributo', 'generos', 'codigosActividades'));
    }

    public function PostcreateStep2(Request $request)
    {
        /* VALIDACIONES */
        $validatedData = $request->validate([
            'titularApellido'  => 'required|string',
            'titularNombre'  => 'required|string',
            'titularDNI'  => 'required|numeric|min:1000000',
            'titularSexo'  => 'required',
            'titularCalle'  => 'required|string',
            'titularNumero'  => 'required|numeric|min:1',
            'titularPiso'  => 'nullable|numeric|min:1',
            'titularDepto'  => 'nullable|string',
            'titularTelefonoPersonal'  => 'required|numeric|min:1000000',
            'titularTelefonoEmpresa'  => 'required|numeric|min:1000000',
            'titularLocalidad' => 'required|string',
            'titularCodigoPostal' => 'required|numeric|min:1',
            'inscripcionAfip' => 'required',
            'categoriaMonotributo' => 'required_if:inscripcionAfip,monotributo',
            'fechaInicioActividad' => 'required|date',
            'numeroIngresosBrutos' => 'required|numeric|min:1',

            /* 'domicilioLegalCalle' => 'required',
            'domicilioLegalNumero' => 'required',
            'domicilioLegalPiso' => 'required',
            'domicilioLegalDepto' => 'required',
            'domicilioLegalTelefono' => 'required',
            'domicilioLegalLocalidad' => 'required',
            'domicilioLegalCodigoPostal' => 'required',

            'domicilioActividadCalle' => 'required',
            'domicilioActividadNumero' => 'required',
            'domicilioActividadPiso' => 'required',
            'domicilioActividadDepto' => 'required',
            'domicilioActividadTelefono' => 'required',
            'domicilioActividadLocalidad' => 'required',
            'domicilioActividadCodigoPostal' => 'required',
            'domicilioActividadEmail' => 'required',

            'domicilioContactoApellido' => 'required',
            'domicilioContactoNombre' => 'required',
            'domicilioContactoCargoEnLaEmpresa' => 'required',
            'domicilioContactoTelefono' => 'required',
            'domicilioContactoDomicilioElectronico' => 'required',
            'domicilioContactoEmailAlternativo' => 'required' */

        ]);
        if(empty($request->session()->get('empresa'))){
            $empresa = new Empresa();
            $empresa->fill($validatedData);
            $request->session()->put('empresa', $empresa);
        }else{
            $empresa = $request->session()->get('empresa');
            $empresa->fill($validatedData);
            $request->session()->put('empresa', $empresa);
        }
        return redirect('/registro3');

        //return view('empresas.registro.paso2',compact('empresa'));
    }

    public function createStep3(Request $request)
    {
        $register = $request->session()->get('register');

        return view('empresas.registro.paso3',compact('register'));
    }

    public function PostcreateStep3(Request $request)
    {
        /* VALIDACIONES
        $validatedData = $request->validate([
            'description' => 'required|unique:registers',
        ]);
        if(empty($request->session()->get('register'))){
            $register = new \App\Register();
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }else{
            $register = $request->session()->get('register');
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }*/
        return redirect('/registro4');
    }

    public function createStep4(Request $request)
    {
        $empresa = $request->session()->get('empresa');

        return view('empresas.registro.paso3',compact('empresa'));
    }




    public function store(EmpresaStoreRequest $request)
    {


        //$validated = $request->validated();

        dd(request()->all());

        Empresa::create(request()->all());

        return redirect('/');  //TODO: poner pagina de registro correcto
    }
}
