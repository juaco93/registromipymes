@extends('layouts.master')
@section('content')
<div class="form-group">
    <h2>5 - Sección D: Financiamiento</h2>
    <input type="range" class="form-control-range" id="step" min="1" max="6" value="5">
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
     <form action="/registro5" method="POST">
        @csrf
     <input type="text" name="name" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('registro.nombre') }}">
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
