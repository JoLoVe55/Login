@extends('layouts.plantilla')

@section('title','Login')

@section('content')


          <section class="container-fluid my-5"> 
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">

                <form method="post" action="{{route('login.login')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="d-flex justify-content-center text-center mb-3 pb-1">
                      <span class="h1 fw-bold">Iniciar Sesión <hr><h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia Sesión en tu Cuenta</h5>
                      </span>
                    </div>  
    <hr>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="Usuario1">Usuario</label>
                    <input type="text" id="Usuario1" value="{{old('usuario')}}" name="usuario" class="form-control form-control-lg" />
                    @error('usuario')
                <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                @enderror 
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="Clave1">Contraseña</label>
                    <input type="password"  id="Clave1" name="contrasena" class="form-control form-control-lg" />
                    @error('contrasena')
                <br>
                       <small class="alert alert-danger">*{{$message}}</small>
                   <br>
                @enderror 
                  </div>

                  <div class="pt-1 mb-4">
                    
                    <button class="btn btn-dark btn-lg btn-block" name="ingresar" type="submit">Ingresar</button>
                   
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Aún no Tienes una Cuenta? <a href="{{route('signin.login')}}"
                      style="color: #393f81;">Registrate Aquí</a></p>
                  
                </form>
              </div>
             </div>
</section>
@endsection