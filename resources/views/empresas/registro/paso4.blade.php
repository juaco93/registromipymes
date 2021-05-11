@extends('layouts.master')
@section('content')
    <h1>Paso 4</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Seccion B: Características de la Actividad y Operatividad</h2>
    <h3>Empresa CUIT Nº: {{ $empresa['cuit'] }}</h3>
    <hr>
     <form action="/registro4" method="POST">
        @csrf
     <input type="text" name="name" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('registro.nombre') }}">
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
