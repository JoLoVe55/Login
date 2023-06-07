@extends('layouts.plantilla')
@section('title','Nuevo Usuario')
    
@section('content')
    
<section class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-black col-md-6 col-lg-6">


            <form method="POST"  action="{{route('store')}}" enctype="multipart/form-data">
              @csrf

              <div class="d-flex justify-content-center text-center mb-3 pb-1">
                  <span class="h1 fw-bold">Crea una nueva cuenta<hr><h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Formulario de registro</h5>
                  </span>
                </div>  
<hr>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Nombre1">Nombre</label>
                <input  type="text" id="Nombre1" value="{{old('nombre')}}" name="nombre" class="form-control form-control-lg" placeholder="Escriba su nombre"/>
                  @error('nombre')
                  <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror                
           </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Email1">Dirección de Correo Electrónico</label>
                  <input  type="email" id="Email1" value="{{old('email')}}" name="email" class="form-control form-control-lg" placeholder="Escriba su Email" />
                  @error('email')
                  <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Usuario1">Elija un Nombre de Usuario</label>
                  <input  type="text" id="Usuario1" value="{{old('usuario')}}" name="usuario" class="form-control form-control-lg" placeholder="Asigne un nombre de usuario" />
                  @error('usuario')
                  <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Contraseña1">Contraseña</label>
                  <input  type="password" id="Contraseña1" value="{{old('pass')}}" name="pass" class="form-control form-control-lg" placeholder="Escriba su contraseña"/>
                  @error('pass')
                  <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                  @enderror 
                </div>

                 <div class="form-outline mb-4">
                  <label class="form-label" for="Contraseña2">Repita Contraseña</label>
                  <input  type="password" id="Contraseña2" name="pass2" class="form-control form-control-lg" placeholder="Escriba su contraseña"/>
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
                    <button class="btn px-5 btn-primary btn-block" name="Registrar" type="submit">Registrar</button>
                  </div>
                  <div class="col-2 m-2">
                    <a class="btn px-5 btn-dark btn block" href="{{route('usuarios')}}">Cancelar</a>
                  </div>
                </div>
              </form>

            
          </div>
        </section>          
@endsection