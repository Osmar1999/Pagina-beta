@extends('plantilla')
@section('seccion')
<div id="slide1" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/imagen1.jpg" class="d-block w-100" alt="Responsive image">
    </div>
    <div class="carousel-item">
      <img src="imagenes/imagen2.jpg" class="d-block w-100" alt="Responsive image">
    </div>
    <div class="carousel-item">
      <img src="imagenes/imagen5.jpg" class="d-block w-100" alt="Responsive image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#slide1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slide1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<section class="container mt-5 pt-5">
<div class="card-deck">
  <div class="card">
    <img src="imagenes/t1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Laboratorios</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a class="btn btn-primary" href="#" role="button">ver mas..</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/t6.jpg" class="card-img-top " alt="...">
    <div class="card-body">
      <h5 class="card-title">Operaciones</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a class="btn btn-primary" href="#" role="button">ver mas..</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/t2.jpg" class="card-img-top" alt="...">
    <div class="card-body ">
      <h5 class="card-title">Innovando</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a class="btn btn-primary" href="#" role="button">ver mas..</a>
    </div>
  </div>
</div>
</section>

<section class="container mt-5 pt-5">
<div class="jumbotron p-3 mb-2 p-3 mb-2 bg-dark text-white">
  <h1 class="display-4">Unete a nosotros</h1>
  <p class="lead">Las revoluciones científicas -afirma Kuhn- resultan de la progresiva sensación, por parte de un pequeño sector, de que los paradigmas existentes han dejado de ser útiles en la exploración de algún aspecto de la naturaleza. Los protagonistas de este libro son un reducido grupo de científicos que, a partir de mediados del siglo XIX, comenzaron a utilizar los métodos científicos de experimentación y medición para la resolución y comprensión de los problemas médicos, enfrentándose con quienes, posicionados en las viejas ídeas, se resistían a estos progresos.</p>
  <hr class="my-4">
  <p class="pt-2">Es tu hora comienza ahora....</p>
  <a class="btn btn-primary btn-lg mt-4" href="#" role="button">Conocer mas..</a>
</div>
</section>
@endsection