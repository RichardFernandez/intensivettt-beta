@extends('layouts.default')

@section('content')

{{-- Galeria principal --}}

  <div id="carousel-container container-fluid">
   <div class="col-xs-12">
    <div id="galeriaPrincipal" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#galeriaPrincipal" data-slide-to="0" class="active"></li>
        <li data-target="#galeriaPrincipal" data-slide-to="1"></li>
        <li data-target="#galeriaPrincipal" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="/images/corre-con.jpg" alt="Filosofia Intensivettt">
          <div class="carousel-caption d-none d-md-block">
              <h3>ESFUERZATE, ADAPTATE, SOBREVIVE Y EVOLUCIONA</h3>
              <span class="btn-azul"><a href="#">INICIA TU ENTRENAMIENTO HOY</a></span>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="/images/PONTE-EN-FORMA.jpg" alt="ponte en forma con intensivetttt">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="/images/logra-la-figura-que-quieres.jpg" alt="logra la fiura que quieres">
        </div>
      </div>
      <a class="carousel-control-prev" href="#galeriaPrincipal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#galeriaPrincipal" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
   </div>	
  </div>   {{-- Final del carrousel --}}

  <div class="flecha-abajo">
  	<a href="#">hacia abajo</a>
  </div>

  {{-- inicia la seccion para el proceso de registro --}}

  <div class="proceso-registro">
    <div class="row text-xs-center">
	  <div class="col-xs-12 text-xs-center">
	  	<h2>¿COMO FUNCIONA?</h2>
	  	<p>Te ofrecemos entrenamiento personal con entrenadores certificados, nuestros servicios van dirigidos a particulares, empresas y atletas profesionales, tenemos suscrpciones accesibles y con INTENSIVETTT obtienes rutinas y dietas diseñadas a tu medida, asistencia las 24 horas
	y la posibilidad de entrenar en tu gimnasio, casa, playa o parque favorito.</p>
	  </div>
    </div>
	  <div class="row text-xs-center">
	  	
	  	<div class="col-xs-12 col-md-3">
	  		<img src="" alt="">
	  		<p>Selecciona tu plan de entrenamiento y registrate</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3">
	  		<img src="" alt="">
	  		<p>Completa tu perfil incluyendo tu historial medico</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3">
	  		<img src="" alt="">
	  		<p>Selecciona a tu entrenador</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3">
	  		<img src="" alt="">
            <p>Recibe tu dieta, tu rutina e inicia tu entrenamiento</p>
	  	</div>

	  </div>
  	
  </div>
  {{-- Final de seccion proceso --}}

  {{-- seccion de testimonios --}}

  <div class="testimonios">
    <div class="row text-xs-center">
    	<div class="col-xs-12">
    		<h2>TESTIMONIOS</h2>
    		<p>Dejamos que nuestros clientes sean los que te cuenten los resultados de entrenar
con INTESIVETTT.</p>
    	</div>
    </div>
  	
  </div>
  {{-- final de testimonios --}}

  {{-- seccion de videos --}}
  <div class="videos">
  	<div class="row text-xs-center">
  		<div class="col-xs-12">
  			<h2>CONOCENOS</h2>
  			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  			  <ol class="carousel-indicators">
  			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			  </ol>
  			  <div class="carousel-inner" role="listbox">
  			    <div class="carousel-item active">
  			      <img class="d-block img-fluid" src="..." alt="First slide">
  			    </div>
  			    <div class="carousel-item">
  			      <img class="d-block img-fluid" src="..." alt="Second slide">
  			    </div>
  			    <div class="carousel-item">
  			      <img class="d-block img-fluid" src="..." alt="Third slide">
  			    </div>
  			  </div>
  			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  			    <span class="sr-only">Previous</span>
  			  </a>
  			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  			    <span class="sr-only">Next</span>
  			  </a>
  			</div>
  		</div>
  	</div>
  </div>	
	 

@stop
