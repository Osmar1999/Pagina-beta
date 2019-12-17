<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Hospital Nazareno</title>
    <link rel="icon" href="imagenes/icono3.ico">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-primary navbar navbar-expand-sm fixed-top">
    <a class="navbar-brand" href="http://laravelproyectos1.com.devel/">
    <img src="http://4.bp.blogspot.com/-KMXlSMncz84/VWYhcK6rIoI/AAAAAAAAADM/TwHE44nSkJw/s1600/medicina-logo.png" width="60" height="60" class="d-inline-block align-top " alt="¿">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <!--<span class="navbar-toggler-icon"></span> -->
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto  text-center ">
    <a href="{{ route('ruta_inicio')}}" class="nav-item nav-link active">Inicio</a>
    <a href="{{ route('ruta_paciente')}}" class="nav-item nav-link">Pacientes</a>
    <a href="{{ route('ruta_medico')}}" class="nav-item nav-link">Medicos</a>
    <a href="{{ route('ruta_informe')}}" class="nav-item nav-link">Informes</a>
    <a href="{{ route('ruta_solicitud')}}" class="nav-item nav-link">Solicitudes</a>
    
    
  </div >
    <a href="{{ route('ruta_manual')}}"  class="btn btn-outline-light float-right mr-4" >Manual</a>
    <img src="https://myrealdomain.com/images/cruz-roja-mexicana-logo-clipart-3.png" width="50" height="50" class="d-inline-block align-top mr-5" alt="¿">  
  </div>
</nav>





    <div class="container mt-5 pt-5">
    @yield('seccion')
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 <footer class="footer">
		<div class="container">
			<span class="mr-auto ml-auto"style="color:#fff;">Place sticky footer content here.</span>
		</div>
	</footer>
  </body>
</html>