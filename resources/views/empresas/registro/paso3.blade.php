@extends('layouts.master')
@section('content')
    <h1>Paso 3</h1>
    <h3>Domicilio de la Actividad</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
     <form action="/registro4" method="POST">
        @csrf
            <h4>Latitud</h4>
            <input type="text" name="latitud" id="latitud" class="form-controll" placeholder="Domicilio Actividad: Latitud" value="{{ session()->get('empresa.latitud') }}">
            <h4>Longitud</h4>
            <input type="text" name="longitud" id="longitud" class="form-controll" placeholder="Domicilio Actividad: Longitud" value="{{ session()->get('empresa.longitud') }}">

            <br><br><br>
            <p>Marcá la ubicación haciendo click en el mapa:</p>
            <div id="map" style="position: static; width: 400px; height: 400px"></div>

            <a type="button" href="/registro2" class="btn btn-warning">Vuelta al paso 2</a>
            <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
