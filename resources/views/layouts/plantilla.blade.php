<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <!--Barra de navegacion-->
    

      <nav class="navbar bg-dark bg-gradient navbar-expand-sm shadow-lg">
          
          <div class="container-fluid">
          <a href="index.php" class="navbar-brand"></a>
          <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
           data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
           aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a href="" class="nav-link px-2">
                    <h3 class="text-light">Laravel</h3>
                </a>
              </li>
              @if(Auth::user())
              <li class="nav-item">
              <a class="nav-link px-2" href="{{route('usuarios')}}">
                    <h3 class="text-light">Tabla</h3>
                </a>
              </li>
              @endif
            </ul>
          </div>
          <div class="d-flex mx-auto pt-3 ">
              @if(Auth::user())
          <a class="btn btn-outline-light me-2" href="{{route('show',$id=auth()->user()->id)}}">{{auth()->user()->username}}</a>
              <a class="btn btn-warning" href="{{route('logout.login')}}">Cerrar Sesión</a>

              @else
              <a class="btn btn-outline-light me-2" href="{{route('index.login')}}">Login</a>
              <a class="btn btn-warning" href="{{route('signin.login')}}">Sign-Up</a>
    
              @endif
        </div>
      </div>
    </nav>
    
   

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>