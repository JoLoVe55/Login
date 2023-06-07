@extends('layouts.plantilla')

@section('title','Actualización de usuario: #'.$id->id)

@section('content')
<section class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-black col-md-6 col-lg-6">


            <form method="POST"  action="{{route('update', $id)}}" enctype="multipart/form-data">
              @csrf
              @method('put') 

                <div class="d-flex justify-content-center text-center mb-3 pb-1">
                  <span class="h1 fw-bold">Actualización de Datos<hr><h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Formulario de actualización</h5>
                  </span>
                </div>  
<hr>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Nombre1">Nombre</label>
                <input  type="text" id="Nombre1" value="{{old('nombre',$id->nombre)}}" name="nombre" class="form-control form-control-lg" placeholder="Escriba El nuevo Nombre"/>
                    @error('nombre')
                    <br>
                            <small class="alert alert-danger">*{{$message}}</small>
                        <br>
                    @enderror
            </div>
                
                <div class="form-outline mb-4">
                  <label class="form-label" for="Email1">Dirección de Correo Electrónico</label>
                  <input  type="email" id="Email1" value="{{old('email',$id->email)}}" name="email" class="form-control form-control-lg" placeholder="Escriba el nuevo Email" />
                    @error('email')
                    <br>
                            <small class="alert alert-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                
                <div class="form-outline mb-4">
                  <label class="form-label" for="Usuario1">Nombre de Usuario</label>
                  <input  type="text" id="Usuario1" value="{{old('usuario',$id->username)}}" name="usuario" class="form-control form-control-lg" placeholder="Escribe el nuevo Nombre de Usuario" />
                    @error('usuario')
                    <br>
                            <small class="alert alert-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                
                <div class="form-outline mb-4">
                  <label class="form-label" for="Contraseña1">Contraseña</label>
                  <input  type="password" id="Contraseña1" value="{{old('pass',$id->password)}}" name="pass" class="form-control form-control-lg" placeholder="Escriba la nueva contraseña"/>
                    @error('pass')
                    <br>
                            <small class="alert alert-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
              </div>
            </div>
                
                <div class="row pt-1 mb-4 justify-content-center">
                    <div class="col-2 m-2">
                        <button class="btn px-5 btn-primary btn-block" name="Registrar" type="submit">Actualizar</button>
                      </div>
                    <div class="col-2 m-2">
                        <a class="btn px-5 btn-dark btn block" href="{{route('show',$id)}}">Cancelar</a>
                      </div>
                  </div>
              </form>

            
        </section>          
@endsection