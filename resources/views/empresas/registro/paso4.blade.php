@extends('layouts.master')
@section('content')
    <div class="form-group">
    <h2>4 - Sección B: Características de la Actividad y Operatividad</h2>
    <input type="range" class="form-control-range" id="step" min="1" max="6" value="4">
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
     <form action="/registro4" method="POST">
        @csrf
     <input type="text" name="name" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('registro.nombre') }}">
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
