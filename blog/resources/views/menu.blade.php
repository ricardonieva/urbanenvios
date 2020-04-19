<<<<<<< HEAD
@extends('plantilla')

@section('contenido')
    <br><br><br><br>
    <h4 class="text-center">Menu principal locura</h4>
    
    <div class="container-fluid">
        <div class="d-flex justify-content-center mt-5">            
                <img src="images/motoneta.png" width="80">                
        </div>

        <div class="d-flex justify-content-center">            
            <a href="">Realizar Pedido</a>
        </div>
    </div>

  

@endsection
=======
<!doctype html>
<html lang="en">
  <head>
    <title>Ventana de prueba</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<<<<<<<< HEAD:blog/resources/views/menu.blade.php
========
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <p class="navbar-brand"> UrbanEnvios |  
                @if ( session('usuario') )
                  {{ session('usuario') }}
                @endif    
              </p>
            </li>
          </ul> 

          <a class="btn btn-primary" href="../controller/cerrarSesionController.php">Cerrar Sesion</a> 
      </div>
    </nav>
>>>>>>>> parent of ad7f607... alta de licente completa:blog/resources/views/plantilla.blade.php
    @yield('contenido')        
  
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
>>>>>>> parent of ad7f607... alta de licente completa
