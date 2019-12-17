@extends('plantilla')
@section('seccion')
<h1 class="display-4 mb-4">Imagenes Informe N°{{$informe->id}}</h1>

<div class="container">
    <div class="card-columns" id="galeria">
        
    <div class="card">
        <a href="#" data-target="#exampleModal1" data-toggle="modal">
        <img src="pictures/{{$informe->imagen}}" class="card-img-top"  
         style="height:300px; width=500px;">
        </a>
    </div> 

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        
            <img src="pictures/{{$informe->imagen}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; " >
          
    </div>
    </div> 


        <div class="card">
        <a href="#" data-target="#exampleModal2" data-toggle="modal">
        <img src="pictures/{{$informe->avatar2}}" class="card-img-top"  
         style="height:300px; width=500px;">
        </a>
        </div> 

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
           
            <img src="pictures/{{$informe->avatar2}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; margin-right:100px;">
           
        </div>
        </div> 

        <div class="card">
        <a href="#" data-target="#exampleModal3" data-toggle="modal">
        <img src="pictures/{{$informe->avatar3}}" class="card-img-top "  
         style="height:300px; width=500px;">
        </a>
        </div> 

        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
           
            <img src="pictures/{{$informe->avatar3}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; margin-right:100px;">
           
        </div>
        </div> 

        <div class="card">
        <a href="#" data-target="#exampleModal4" data-toggle="modal">
        <img src="pictures/{{$informe->avatar4}}" class="card-img-top"  
         style="height:300px; width=500px;">
        </a>
        </div> 

        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
           
            <img src="pictures/{{$informe->avatar4}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; margin-right:100px;">
           
        </div>
        </div> 

        <div class="card">
        <a href="#" data-target="#exampleModal5" data-toggle="modal">
        <img src="pictures/{{$informe->avatar5}}" class="card-img-top"  
         style="height:300px; width=500px;">
        </a>
        </div> 

        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
           
            <img src="pictures/{{$informe->avatar5}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; margin-right:100px;">
           
        </div>
        </div> 

        <div class="card">
        <a href="#" data-target="#exampleModal6" data-toggle="modal">
        <img src="pictures/{{$informe->avatar6}}" class="card-img-top"  
         style="height:300px; width=500px;">
        </a>
        </div> 

        <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-2 mt-8" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
           
            <img src="pictures/{{$informe->avatar6}}" alt="" class="img-Fluid rounded mx-auto d-block"  
            style="height:500px; width=800px; margin-right:100px;">
           
        </div>
        </div> 


    </div>
</div>



@endsection