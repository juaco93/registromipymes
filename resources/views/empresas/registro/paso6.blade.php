@extends('layouts.master')
@section('content')
<div class="form-group">
    <h2>Sección E: Realidad y Expectativas</h2>
    <input type="range" class="form-control-range" id="step" min="1" max="6" value="6">
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
     <form action="/" method="POST">
        @csrf
     <input type="text" name="name" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('registro.nombre') }}">
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
