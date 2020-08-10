@extends('layouts.master')
@section('content')
<ul>
    @foreach ($empresas as $empresa)
        <li>{{$empresa->nombreFantasia}}</li>
    @endforeach
</ul>
@endsection


