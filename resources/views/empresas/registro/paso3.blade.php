@extends('layouts.master')
@section('content')
<div class="form-group">
    <h2>3 - Sección A: Domicilios</h2>
    <input type="range" class="form-control-range" id="step" min="1" max="6" value="3">
  </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3>Empresa CUIT Nº: {{ $empresa['cuit'] }}</h3>
    <hr>
     <form action="/registro3" method="POST">
        @csrf
        <h3>Domicilio Legal</h3>
        <input type="text" name="domicilioLegalCalle" class="form-control" placeholder="Calle" maxlength="50" value="{{ session()->get('empresa.domicilioLegalCalle') }}"><br>
        <input type="text" name="domicilioLegalNumero" class="form-control" placeholder="Numero" maxlength="3" value="{{ session()->get('empresa.domicilioLegalNumero') }}"><br>
        <input type="text" name="domicilioLegalPiso" class="form-control" placeholder="Piso" maxlength="2" value="{{ session()->get('empresa.domicilioLegalPiso') }}"><br>
        <input type="text" name="domicilioLegalDepto" class="form-control" placeholder="Depto" maxlength="4" value="{{ session()->get('empresa.domicilioLegalDepto') }}"><br>
        <input type="text" name="domicilioLegalTelefono" class="form-control" placeholder="Telefono Empresa" maxlength="25" value="{{ session()->get('empresa.domicilioLegalTelefono') }}"><br>
        <input type="text" name="domicilioLegalLocalidad" class="form-control" placeholder="Localidad" maxlength="30" value="{{ session()->get('empresa.domicilioLegalLocalidad') }}"><br>
        <input type="text" name="domicilioLegalCodigoPostal" class="form-control" placeholder="Codigo Postal" maxlength="4" value="{{ session()->get('empresa.domicilioLegalCodigoPostal') }}"><br>

        <h3>Domicilio de la Actividad Productiva</h3>
        <input type="text" name="domicilioActividadCalle" class="form-control" placeholder="Calle" maxlength="50" value="{{ session()->get('empresa.domicilioActividadCalle') }}"><br>
        <input type="text" name="domicilioActividadNumero" class="form-control" placeholder="Numero" maxlength="3" value="{{ session()->get('empresa.domicilioActividadNumero') }}"><br>
        <input type="text" name="domicilioActividadPiso" class="form-control" placeholder="Piso" maxlength="2" value="{{ session()->get('empresa.domicilioActividadPiso') }}"><br>
        <input type="text" name="domicilioActividadDepto" class="form-control" placeholder="Depto" maxlength="4" value="{{ session()->get('empresa.domicilioActividadDepto') }}"><br>
        <input type="text" name="domicilioActividadTelefono" class="form-control" placeholder="Telefono Empresa" maxlength="25" value="{{ session()->get('empresa.domicilioActividadTelefono') }}"><br>
        <input type="text" name="domicilioActividadLocalidad" class="form-control" placeholder="Localidad" maxlength="30" value="{{ session()->get('empresa.domicilioActividadLocalidad') }}"><br>
        <input type="text" name="domicilioActividadCodigoPostal" class="form-control" placeholder="Codigo Postal" maxlength="4" value="{{ session()->get('empresa.domicilioActividadCodigoPostal') }}"><br>
        <input type="text" name="domicilioActividadEmail" class="form-control" placeholder="Email" value="{{ session()->get('empresa.domicilioActividadEmail') }}"><br>

        <div class="col-sm-10">
            <input type="text" name="domicilioActividadLatitud" id="domicilioActividadLatitud" class="form-control" placeholder="Domicilio Actividad: Latitud" value="{{ session()->get('empresa.domicilioActividadLatitud') }}">
            <input type="text" name="domicilioActividadLongitud" id="domicilioActividadLongitud" class="form-control" placeholder="Domicilio Actividad: Longitud" value="{{ session()->get('empresa.domicilioActividadLongitud') }}">
        </div>

        <br>
        <p>Marcá la ubicación haciendo click en el mapa:</p>
        <div id="map" style="position: static; width: 400px; height: 400px"></div><br>

        <h3>Datos de contacto</h3>
        <input type="text" name="domicilioContactoApellido" class="form-control" placeholder="Apellido" maxlength="30" value="{{ session()->get('empresa.domicilioContactoApellido') }}"><br>
        <input type="text" name="domicilioContactoNombre" class="form-control" placeholder="Nombre" maxlength="30" value="{{ session()->get('empresa.domicilioContactoNombre') }}"><br>
        <input type="text" name="domicilioContactoCargoEnLaEmpresa" class="form-control" placeholder="Cargo en la empresa" maxlength="30" value="{{ session()->get('empresa.domicilioContactoCargoEnLaEmpresa') }}"><br>
        <input type="text" name="domicilioContactoTelefono" class="form-control" placeholder="Telefono contacto" maxlength="25" value="{{ session()->get('empresa.domicilioContactoTelefono') }}"><br>
        <input type="text" name="domicilioContactoDomicilioElectronico" class="form-control" placeholder="Domicilio Electrónico constituido (Email)" value="{{ session()->get('empresa.domicilioContactoDomicilioElectronico') }}"><br>
        <input type="text" name="domicilioContactoEmailAlternativo" class="form-control" placeholder="Email Alternativo" value="{{ session()->get('empresa.domicilioContactoEmailAlternativo') }}"><br>

        <a type="button" href="/registro2" class="btn btn-warning">Vuelta al paso 2</a>
        <button type="submit" class="btn btn-primary">Continuar</button>

     </form>
@endsection
