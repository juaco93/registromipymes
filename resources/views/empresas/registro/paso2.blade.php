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
    <h2>Seccion A: Datos generales - Datos del Titular</h2>
    <h3>Empresa CUIT Nº: {{ $empresa['cuit'] }}</h3>
     <form action="/registro2" method="POST">
        @csrf
        <br><input type="text" name="titularApellido" class="form-control" maxlength="30" placeholder="Apellido (*)" value="{{ session()->get('empresa.titularApellido') }}"><br>
        <input type="text" name="titularNombre" class="form-control" maxlength="30" placeholder="Nombre (*)" value="{{ session()->get('empresa.titularNombre') }}"><br>
        <input type="text" name="titularDNI" class="form-control" maxlength="8" placeholder="DNI (*)" value="{{ session()->get('empresa.titularDNI') }}"><br>
        {{-- <input type="text" name="titularSexo" class="form-control" placeholder="Sexo" value="{{ session()->get('empresa.titularSexo') }}"><br> --}}
        <select class="form-control" name="titularSexo" id="titularSexo">
            <option value="" selected disabled>Sexo del Titular (*)</option>
            @foreach ($generos as $key => $genero)
                @if(session()->get('empresa.titularSexo') == $key)
                    <option value={{$key}} selected>{{$genero}}</option>
                @else
                   <option value={{$key}}>{{$genero}}</option>
                @endif
            @endforeach
        </select><br>
        <input type="text" name="titularCalle" class="form-control" placeholder="Calle (*)" maxlength="50" value="{{ session()->get('empresa.titularCalle') }}"><br>
        <input type="text" name="titularNumero" class="form-control" placeholder="Numero (*)" maxlength="3" value="{{ session()->get('empresa.titularNumero') }}"><br>
        <input type="text" name="titularPiso" class="form-control" placeholder="Piso" maxlength="2" value="{{ session()->get('empresa.titularPiso') }}"><br>
        <input type="text" name="titularDepto" class="form-control" placeholder="Depto" maxlength="4" value="{{ session()->get('empresa.titularDepto') }}"><br>
        <input type="text" name="titularTelefonoPersonal" class="form-control" placeholder="Telefono Personal (*)" maxlength="25" value="{{ session()->get('empresa.titularTelefonoPersonal') }}"><br>
        <input type="text" name="titularTelefonoEmpresa" class="form-control" placeholder="Telefono Empresa (*)" maxlength="25" value="{{ session()->get('empresa.titularTelefonoEmpresa') }}"><br>
        <input type="text" name="titularLocalidad" class="form-control" placeholder="Localidad (*)" maxlength="30" value="{{ session()->get('empresa.titularLocalidad') }}"><br>
        <input type="text" name="titularCodigoPostal" class="form-control" placeholder="Codigo Postal (*)" maxlength="4" value="{{ session()->get('empresa.titularCodigoPostal') }}"><br>
        <fieldset class="form-group">
            <label for="inscripcionAfip" class="col-sm-4 control-label">Inscripción en AFIP (*)</label>
              <div class="col-sm-10">
                <div class="form-check">
                    @if(session()->get('empresa.inscripcionAfip') == "responsableInscripto")
                        <input class="form-check-input" type="radio" name="inscripcionAfip" id="responsableInscripto" value="responsableInscripto" checked>
                    @else
                        <input class="form-check-input" type="radio" name="inscripcionAfip" id="responsableInscripto" value="responsableInscripto">
                    @endif
                    <label class="form-check-label" for="responsableInscripto">
                        Responsable Inscripto en IVA
                    </label>
                </div>
                <div class="form-check">
                    @if(session()->get('empresa.inscripcionAfip') == "monotributo")
                        <input class="form-check-input" type="radio" name="inscripcionAfip" id="monotributo" value="monotributo" checked>
                    @else
                        <input class="form-check-input" type="radio" name="inscripcionAfip" id="monotributo" value="monotributo">
                    @endif
                  <label class="form-check-label" for="monotributo">
                    Monotributista
                  </label>
                </div>
                <div class="col-sm-10" id="selectMonotributo" style="display: none">
                    <label class="form-check-label" for="categoriaMonotributo">
                        Categoría de Monotributo:
                      </label>
                    <select class="form-control" name="categoriaMonotributo" id="categoriaMonotributo">
                        @foreach ($categoriasMonotributo as $categoria)
                            @if(session()->get('empresa.categoriaMonotributo') == $categoria->id)
                                <option value={{$categoria->id}} selected>{{$categoria->descripcion}}</option>
                            @else
                                <option value={{$categoria->id}}>{{$categoria->descripcion}}</option>
                            @endif
                        @endforeach
                    </select>
              </div>
        </fieldset>
        {{-- <div class="form-group row"> --}}
            <label for="fechaInicioActividad" class="form-check-label">Fecha de Inicio de Actividad (*)</label>
            <div class="col-10">
                <input class="form-control" type="date" value="{{ session()->get('empresa.fechaInicioActividad')}}" name="fechaInicioActividad"><br>
            </div>
        {{-- </div> --}}
        <fieldset class="form-group">
            <label class="form-check-label" for="codigoActividadPrincipal">
                Codigo de Actividad Principal (*):
            </label>
            <select class="form-control" name="codigoActividadPrincipal" id="codigoActividadPrincipal">
                <option value="" selected disabled>Elija una actividad principal</option>
                @foreach ($codigosActividades as $actividad)
                    @if(session()->get('empresa.codigoActividadPrincipal') == $actividad->id)
                        <option value={{$actividad->id}} selected>{{$actividad->descripcion}}</option>
                    @else
                        <option value={{$actividad->id}}>{{$actividad->descripcion}}</option>
                    @endif
                @endforeach
            </select><br>
            <label class="form-check-label" for="codigoActividadSecundaria">
                Codigo de Actividad Secundario:
            </label>
            <select class="form-control" name="codigoActividadSecundaria" id="codigoActividadSecundaria">
                <option value="" selected>Ninguna</option>
                @foreach ($codigosActividades as $actividad)
                    @if(session()->get('empresa.codigoActividadSecundaria') == $actividad->id)
                        <option value={{$actividad->id}} selected>{{$actividad->descripcion}}</option>
                    @else
                        <option value={{$actividad->id}}>{{$actividad->descripcion}}</option>
                    @endif
                @endforeach
            </select><br>
            <label class="form-check-label" for="codigoActividadTerciaria">
                Categoría de Actividad Terciario:
            </label>
            <select class="form-control" name="codigoActividadTerciaria" id="codigoActividadTerciaria">
                <option value="" selected>Ninguna</option>
                @foreach ($codigosActividades as $actividad)
                    @if(session()->get('empresa.codigoActividadTerciaria') == $actividad->id)
                        <option value={{$actividad->id}} selected>{{$actividad->descripcion}}</option>
                    @else
                        <option value={{$actividad->id}}>{{$actividad->descripcion}}</option>
                    @endif
                @endforeach
            </select>
        </fieldset>

        <input type="text" name="numeroIngresosBrutos" class="form-control" placeholder="Numero de Ingresos Brutos (*)" maxlength="9" value="{{ session()->get('empresa.numeroIngresosBrutos') }}"><br>

        {{-- <hr>

        <h2>Seccion A: Datos generales - Domicilios</h2>
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

        <h3>Datos de contacto</h3>
        <input type="text" name="domicilioContactoApellido" class="form-control" placeholder="Apellido" maxlength="30" value="{{ session()->get('empresa.domicilioContactoApellido') }}"><br>
        <input type="text" name="domicilioContactoNombre" class="form-control" placeholder="Nombre" maxlength="30" value="{{ session()->get('empresa.domicilioContactoNombre') }}"><br>
        <input type="text" name="domicilioContactoCargoEnLaEmpresa" class="form-control" placeholder="Cargo en la empresa" maxlength="30" value="{{ session()->get('empresa.domicilioContactoCargoEnLaEmpresa') }}"><br>
        <input type="text" name="domicilioContactoTelefono" class="form-control" placeholder="Telefono contacto" maxlength="25" value="{{ session()->get('empresa.domicilioContactoTelefono') }}"><br>
        <input type="text" name="domicilioContactoDomicilioElectronico" class="form-control" placeholder="Domicilio Electrónico constituido (Email)" value="{{ session()->get('empresa.domicilioContactoDomicilioElectronico') }}"><br>
        <input type="text" name="domicilioContactoEmailAlternativo" class="form-control" placeholder="Email Alternativo" value="{{ session()->get('empresa.domicilioContactoEmailAlternativo') }}"><br> --}}

     <a type="button" href="/registro" class="btn btn-warning">Vuelta al paso 1</a>
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
