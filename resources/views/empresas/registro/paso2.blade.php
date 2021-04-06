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
    <h3>Registro de la Empresa de: {{ $empresa['titularNombre'] }}</h3>
     <form action="/registro3" method="POST">
        @csrf
     <input type="text" name="description" class="form-controll" placeholder="Enter description" value="{{ session()->get('register.description') }}">
       <a type="button" href="/registro" class="btn btn-warning">Vuelta al paso 1</a>
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
