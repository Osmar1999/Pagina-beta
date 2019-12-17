
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Descarga</title>
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/251/PNG/128/Pictures-01_27083.png">
  </head>
  <body>

        <h5 class="card-title">Detalles del informe N° {{$descarga->id}}</h5>
        <p class="card-text"><b>ID: </b>{{$descarga->id}}</p>
        <p class="card-text"><b>Tipo: </b>{{$descarga->tipo}}</p>
        <p class="card-text"><b>Tecnica: </b>{{$descarga->tecnica}}</p>
        <p class="card-text"><b>Paciente: </b>{{$descarga->paciente}}</p>
        <p class="card-text"><b>Medico: </b>{{$descarga->medico}}</p>
        <p class="card-text"><b>Diagnostico: </b>{{$descarga->diagnostico}}</p>
        <p class="card-text"><b>Obvservaciones: </b>{{$descarga->obvservaciones}}</p>
        <p class="card-text"><b>Area: </b>{{$descarga->area}}</p>
        <p class="card-text"><small class="text-muted">Fecha: {{$descarga->created_at}}</small></p>
        <div class="mt-5 pt-20"></div>
        
       
        <div align="left" class="mt-5" style="margin-top: 100em;"><h2>Imagenes</h2></div>
        <div align="center"><img src="pictures/{{$descarga->imagen}}" style="height:400px; width=500px;"></div>
        <div align="left" class="mt-5 mb-5 pt-5 pb-5"></div>
        <div align="center"><img src="pictures/{{$descarga->avatar2}}" style="height:400px; width=500px;"></div>
        <div align="left" class="mt-5 mb-5 pt-5 pb-5"></div>
        <div align="center"><img src="pictures/{{$descarga->avatar3}}" style="height:400px; width=500px;"></div>
        <div align="left" class="mt-5 mb-5 pt-5 pb-5"></div>
        <div align="center"><img src="pictures/{{$descarga->avatar4}}" style="height:400px; width=500px;"></div>
        <div align="left" class="mt-5 mb-5 pt-5 pb-5"></div>
        <div align="center"><img src="pictures/{{$descarga->avatar5}}" style="height:400px; width=500px;"></div>
        <div align="left" class="mt-5 mb-5 pt-5 pb-5"></div>
        <div align="center"><img src="pictures/{{$descarga->avatar6}}" style="height:400px; width=500px;"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>