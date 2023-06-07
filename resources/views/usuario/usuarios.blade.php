@extends('layouts.plantilla')

@section('title','Usuarios')

@section('content')
    <section>
            <div class="table-responsive p-5 m-3 rounded-4 bg-dark">
                    <table class="table align-middle table-dark table-striped">
                      <thead >
                      <tr><a class="btn btn-primary" href="{{route('crear')}}">Nuevo Usuario</a></tr>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Contraseña</th>
                          <th colspan="2">Email</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($usuarios as $usuario)
                        <tr>
                        <td><a href="{{route('show',$usuario)}}">{{$usuario->id}}</a></td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->username}}</td>
                        <td>{{$usuario->password}}</td>
                        <td>{{$usuario->email}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr><td colspan="6">{{$usuarios->links()}}</td></tr>                      </tfoot>
                    </table>
            </div>
    </section>

@endsection