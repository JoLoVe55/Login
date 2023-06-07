@extends('layouts.plantilla')
@section('title','Nuevo Usuario')
    
@section('content')
    
<section class="container-fluid">
    <div class="card-body  my-5 text-black">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
    
            <form method="POST"  action="{{route('register.login')}}" enctype="multipart/form-data">
              @csrf

                <div class="d-flex justify-content-center text-center mb-3 pb-1">
                  <span class="h1 fw-bold">Registro <hr><h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crea Una Nueva Cuenta</h5>
                  </span>
                </div>  
<hr>
                <div class="form-outline mb-4">
                  <label class="form-label" for="Nombre1">Nombre</label>
                <input  type="text" id="Nombre1" value="{{old('nombre')}}" name="nombre" class="form-control form-control-lg" placeholder="Nombre"/>
                @error('nombre')
                <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                @enderror  
              </div>
                 

                <div class="form-outline mb-4">
                  <label class="form-label" for="Email1">Dirección de Correo Electrónico</label>
                  <input  type="email" id="Email1" value="{{old('email')}}" name="email" class="form-control form-control-lg" placeholder="Email" />
                  @error('email')
                    <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Usuario1">Elija un Nombre de Usuario</label>
                  <input  type="text" id="Usuario1" value="{{old('usuario')}}" name="usuario" class="form-control form-control-lg" placeholder="Usuario" />
                  @error('usuario')
                    <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Contraseña1">Contraseña</label>
                  <input  type="password" id="Contraseña1" value="{{old('pass')}}" name="pass" class="form-control form-control-lg" placeholder="Contraseña"/>
                  @error('pass')
                    <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="Contraseña2">Confirmación de Contraseña</label>
                  <input  type="password" id="Contraseña2" name="confirmacion" class="form-control form-control-lg" placeholder="Confirmación"/>
                    @error('confirmacion')
                      <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                        <br>
                    @enderror 
              </div>
<hr>
              </div>

              <div class="container text-center">
                <div class="row pt-1 mb-4 justify-content-center">
                  <div class="col-1 m-2">
                <button class="btn  btn-primary " name="Registrar" type="submit">Registrar</button>
                  </div>
                    <div class="col-1 m-2">
                <a class="btn btn-dark " href="{{route('index.login')}}">Cancelar</a>
                  </div>
                </div>
              </div>

              </form>
              

          </div>
        </div>
      </section>          
@endsection