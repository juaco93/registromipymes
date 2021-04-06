@extends('layouts.master')
@section('content')
    <h1>Paso 1</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
     <form action="/registro" method="POST">
        @csrf
     <input type="text" name="titularNombre" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('empresa.titularNombre') }}">
         <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
