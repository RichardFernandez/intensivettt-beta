@extends('layouts.default')

@section('content')

{{-- Galeria principal --}}

  <div id="carousel-container">
   
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
          <img class="d-block img-fluid" src="/images/logra-la-figura-que-quieres.jpg" alt="logra la figura que quieres">
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
  </div>   {{-- Final del carrousel --}}

  <div class="flecha-abajo">
  	<a href="#">hacia abajo</a>
  </div>

  {{-- inicia la seccion para el proceso de registro --}}

  <div class="proceso-registro">
    <div class="row text-xs-center">
	  <div class="col-xs-12 text-xs-center">
	  	<h2>¿COMO FUNCIONA?</h2>
	  	<p>Te ofrecemos entrenamiento personal con entrenadores certificados, nuestros servicios van dirigidos a particulares, empresas y atletas profesionales, tenemos suscripciones accesibles y con INTENSIVETTT obtienes rutinas y dietas diseñadas a tu medida, asistencia las 24 horas y la posibilidad de entrenar en tu gimnasio, casa, playa o parque favorito</p>
	  </div>
    </div>
	  <div class="row text-xs-center">
	  	<div class="col-xs-12 col-md-3">
        <div class="funcionamiento">
          <img src="/images/selecciona-plan.png" alt="Selecciona tu plan" class="img-fluid">
        </div>
        <h4>1.- Regístrate y selecciona tu plan de entrenamiento</h4>
        <p>Captura tus datos en el área de registro, ya que estés dentro de la plataforma elige cual es el plan que mas se adapta tus necesidades</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3" >
        <div class="funcionamiento">
          <img  src="/images/completar-perfil.png" alt="Completa tu perfil" class="img-fluid">
        </div>	
	  		<h4>2.- Completa tu perfil incluyendo tu historia clínica</h4>
        <p>Para los entrenadores de INTENSIVETTT es fundamental saber datos de tu físico y estado de salud con la finalidad de crearte una rutina y dieta de acuerdo a los resultados de perfil y tus objetivos.</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3">
        <div class="funcionamiento">
          <img src="/images/entrenador.png" alt="Selecciona a tu entrenador" class="img-fluid">
        </div>
	  		<h4>3.- Selecciona a tu entrenador</h4>
        <p>Ahora que has terminado de llenar tu historia clínica podrás ir a la sección de entrenadores para conocerlos mejor y elegir al que quieras que te lleve a un mejor físico y estilo de vida</p>
	  	</div>
	  	<div class="col-xs-12 col-md-3">
        <div class="funcionamiento">
          <img src="/images/entrenando.png" alt="Empieza a entrenar" class="img-fluid">
        </div>
            <h4>4.- Recibe tu dieta, tu rutina e inicia tu entrenamiento</h4>
            <p>Ahora que conoces a tu entrenador, él se encargara de crearte la mejor rutina y dieta para que inicies con tus 8 semanas de entrenamiento y logres tus objetivos.</p>
	  	</div>

	  </div>
  	
  </div>
  {{-- Final de seccion proceso --}}

  <hr/>

  {{-- seccion de testimonios --}}

  <div class="testimonios">
    <div class="row text-xs-center">
    	<div class="col-xs-12">
    		<h2>TESTIMONIOS</h2>
    		<p>Dejamos que nuestros clientes sean los que te cuenten los resultados de entrenar
con INTESIVETTT.</p>
    	</div>
      <div class="col-xs-12">
        <div id="carouseltestimonios" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouseltestimonios" data-slide-to="0" class="active"></li>
            <li data-target="#carouseltestimonios" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="/images/testimonio-1.jpg" alt="testimonio 1">
              <div class="carousel-caption d-none d-md-block">
                    <h3>SERGIO ARPERO</h3>
                    <p>Gracias a INTENSIVETTT me converti en competidor profesional</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="/images/testimonio-1.jpg" alt="testimonio 2">
              <div class="carousel-caption d-none d-md-block">
                    <h3>SERGIO ARPERO JR</h3>
                    <p>Gracias a INTENSIVETTT me converti en competidor profesional</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouseltestimonios" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouseltestimonios" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>
  	
  </div>
  {{-- final de testimonios --}}

  <hr/>

  {{-- seccion de videos --}}
  <div class="videos">
  	<div class="row text-xs-center">
  		<div class="col-xs-12">
  			<h2>ASI TE ENTRENAMOS</h2>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/215063707" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
  	</div>
  </div>	
	 

@stop
