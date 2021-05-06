@extends('layouts.master')
@section('content')
    <h1>Seccion A: Datos generales - Paso 1</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Por favor, indicanos tu CUIT:</h2>
     <form action="/registro" method="POST">
        @csrf
     <input type="text" name="cuit" class="form-control" placeholder="Ingrese CUIT" maxlength="11" value="{{ session()->get('empresa.cuit') }}">
     <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
