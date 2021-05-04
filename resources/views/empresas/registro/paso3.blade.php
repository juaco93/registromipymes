@extends('layouts.master')
@section('content')
    <h1>Paso 3</h1>
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
            <input type="text" name="name" class="form-controll" placeholder="Ingrese nombre" value="{{ session()->get('registro.nombre') }}">
            <a type="button" href="/registro2" class="btn btn-warning">Vuelta al paso 2</a>
            <button type="submit" class="btn btn-primary">Continuar</button>
     </form>
@endsection
