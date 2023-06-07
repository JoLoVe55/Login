@extends('layouts.plantilla')
@section('title','Usuario: '.$usuarios->nombre)
@section('content')
  
<h1 class="p-2">Bienvenido Usuario: {{$usuarios->username}}</h1>
<h2 class="p-2">Su nombre es: {{$usuarios->nombre}}</h2>
<a class="btn btn-primary m-2" href="{{route('edit',$usuarios)}}">Actualizar Datos</a>
<a class="btn btn-primary m-2" href="{{route('logout.login')}}">Cerrar Sesión</a>

@endsection

