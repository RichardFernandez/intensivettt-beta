@extends('layouts.default')
@SECTION('title', 'planes de entrenamiento Intensivettt')

@section('content')
    <div class="encabezado-planes">
    	
    </div>

	<section id="informacion">
	  <h3 class="text-xs-center">¿QUE NECESITO PARA ENTRAR AL PROGRAMA?</h3>
       <h4>Te puedo enumerar muchas cosas para entrar al programa, pero solamente te mencionare los puntos estrictamente necesarios y que sé que cualquiera puede cumplir:</h4>
       <ul class="requisitos-informacion">
       	<li>1.- Compromiso.</li>
       	<li>2.- Mente abierta.</li>
       	<li>3.- Disponibilidad de máximo una hora y media al día, durante 5 días a la semana.</li>
       	<li>4.- Contar con lo más necesario de la tecnología que actualmente la mayoria de deportista usa, lo más importante es adoptar la creencia de que si puedes hacerlo aceptar una segunda opción, una opción diferente a la que todos creen; incluso a lo que tú crees de ti mismo.</li>
       </ul>
	
	</section>

	<section class="planes">
	  <div class="container-fluid">
	  
		   <h3 class="text-xs-center">SELECCIONA TU PLAN PARA EMPEZAR A ENTRENAR</h3>

		   <div class="card-deck">
		     <div class="card">
		       <div class="card-block">
		         <h4 class="card-title text-xs-center titulo-azul">PLAN 10 KG</h4>
		         <p class="card-text text-xs-center subtitulo-azul">$150.00 pesos/semana</p>
		         <ul class="list-group list-group-flush">
		         	<li class="list-group-item">1.- Opción de elegir tu metodologia de entrenamiento (Fuerza y cardio, Spinning, Cross training, Box).</li>
		         	<li class="list-group-item">2.- Entrenamiento personalizado y a medida.</li>
		         	<li class="list-group-item">3.- Seguimiento diario.</li>
		         	<li class="list-group-item">4.- Comunicación 24/7 con tu entrenador.</li>
		         	<li class="list-group-item">5.- Entrega de diploma por cada fase completada.</li>
		         </ul>
		       </div>
		       <div class="card-block text-center boton-card">
		           <a href="#" class="btn btn-primary btn-block">REGISTRARME</a>
		       </div>
		     </div>
		     <div class="card">
		       <div class="card-block">
		         <h4 class="card-title text-center titulo-azul">PLAN 50 KG</h4>
		           <p class="card-text text-xs-center subtitulo-azul">$250.00 pesos/semana</p>
		           <ul class="list-group list-group-flush">
		            <li class="list-group-item">Todas las caracterÍsticas del plan 10 KG más:</li>
		           	<li class="list-group-item">1.- Plan de nutrición y suplenetación diseñado por nutriólogos profesionales en base a tus objetivos.</li>
		           	<li class="list-group-item">2.- Acceso a una metodología extra de entrenamiento (Spinning, Cross Training, Box).</li>
		           </ul>
		        </div>
		        <div class="card-block text-center boton-card">
		             <a href="#" class="btn btn-primary btn-block">REGISTRARME</a>
		        </div>
		     </div>
		     <div class="card">
		       <div class="card-block">
		         <h4 class="card-title text-center titulo-azul">PLAN 100 KG</h4>
		           <p class="card-text text-center subtitulo-azul">$750.00 pesos/semana</p>
		           <ul class="list-group list-group-flush">
		           	<li class="list-group-item">Todas las caracterÍsticas del plan 10 KG más:.</li>
		           	<li class="list-group-item">1.- Plan de nutrición y suplementación diseñado por nutriólogos profesionales en base a tus objetivos.</li></li>
		           	<li class="list-group-item">2.- Acceso a todas metodologías de entrenamiento (Spinning, Cross Training, Box).</li>
		           </ul>
		        </div>
		        <div class="card-block text-center boton-card">
		             <a href="#" class="btn btn-primary btn-block">REGISTRARME</a>
		        </div>
		     </div>
		     <div class="card">
		       <div class="card-block">
		         <h4 class="card-title text-center titulo-azul">PLAN EMPRESARIAL</h4>
		         <p class="card-text text-center subtitulo-azul">Precio a medida</p>
		         <ul class="list-group list-group-flush">
		           	<li class="list-group-item">Mejora el rendimiento y la eficacia de tus colaboradores manteniéndolos ejercitados, ejecuta las estrategias que usan las mejores empresas de países desarrollados para mantener a sus equipos de trabajo más productivos. <br/> Llámanos a los teléfono: (664) 9765767 o (664) 527 13 76 para mayores informes o agendar una cita.</li>
		         </ul>
		       </div>
		       <div class="card-block text-center boton-card">
		            <a href="#" class="btn btn-primary btn-block">SOLICITAR INFORMACIÓN</a>
		       </div>
		     </div>
	     </div>
	     {{-- final del container fluid --}}
	   </div>
		
	</section>


@stop