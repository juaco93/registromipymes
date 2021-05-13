@extends('layouts.master')
@section('content')
<div class="form-group">
    <h2>1 - Sección A: Datos generales</h2>
    <input type="range" class="form-control-range" id="step" min="1" max="6" value="1">
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
    <h3>Por favor, indicanos tu CUIT:</h3>
     <form action="/registro" method="POST">
        @csrf
     <input type="text" name="cuit" class="form-control" placeholder="Ingrese CUIT" maxlength="11" value="{{ session()->get('empresa.cuit') }}">
     <br>
     <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
