@extends('layouts.master')
@section('content')
<h1>Paso 2</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Datos del Titular:</h2>
    <h3>Empresa CUIT Nº: {{ $empresa['cuit'] }}</h3>
     <form action="/registro3" method="POST">
        @csrf
     <input type="text" name="titularNombre" class="form-controll" placeholder="Nombre" value="{{ session()->get('empresa.titularNombre') }}"><br>
     <input type="text" name="titularApellido" class="form-controll" placeholder="Apellido" value="{{ session()->get('empresa.titularApellido') }}"><br>
     <input type="text" name="titularDNI" class="form-controll" placeholder="DNI" value="{{ session()->get('empresa.titularDNI') }}"><br>
     <input type="text" name="titularSexo" class="form-controll" placeholder="Sexo" value="{{ session()->get('empresa.titularSexo') }}"><br>
     <input type="text" name="titularCalle" class="form-controll" placeholder="Calle" value="{{ session()->get('empresa.titularCalle') }}"><br>
     <input type="text" name="titularNumero" class="form-controll" placeholder="Numero" value="{{ session()->get('empresa.titularPiso') }}"><br>
     <input type="text" name="titularPiso" class="form-controll" placeholder="Piso" value="{{ session()->get('empresa.titularDepto') }}"><br>
     <input type="text" name="titularDepto" class="form-controll" placeholder="Depto" value="{{ session()->get('empresa.titularTelefonoPersonal') }}"><br>
     <input type="text" name="titularTelefonoPersonal" class="form-controll" placeholder="Telefono Personal" value="{{ session()->get('empresa.titularTelefonoEmpresa') }}"><br>
     <input type="text" name="titularTelefonoEmpresa" class="form-controll" placeholder="Telefono Empresa" value="{{ session()->get('empresa.titularLocalidad') }}"><br>
     <input type="text" name="titularLocalidad" class="form-controll" placeholder="Localidad" value="{{ session()->get('empresa.titularLocalidad') }}"><br>
     <input type="text" name="titularCodigoPostal" class="form-controll" placeholder="Codigo Postal" value="{{ session()->get('empresa.titularCodigoPostal') }}"><br>
     <input type="text" name="inscripcionAFIP" class="form-controll" placeholder="Inscripcion AFIP" value="{{ session()->get('empresa.inscripcionAFIP') }}"><br>
     <input type="text" name="numeroIngresosBrutos" class="form-controll" placeholder="Numero de Ingresos Brutos" value="{{ session()->get('empresa.numeroIngresosBrutos') }}"><br>


     <a type="button" href="/registro" class="btn btn-warning">Vuelta al paso 1</a>
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
