@extends('template.main')
@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        UAT
                    </a>
                </li>
                <li>
                    <a href="#"><span>Guardar</span><i class="fa fa-floppy-o"></i></a>
                </li>
                <li>
                    <a href="#"><span>Editar</span><i class="fa fa-pencil"></i></a>
                </li>
                <li>
                    <a href="#"><span>Cancelar</span><i class="fa fa-ban"></i></a>
                </li>
                <li>
                    <a href="#"><span>Ausentó</span><i class="fa fa-user-times"></i></a>
                </li>
                <li>
                    <a href="#"><span>Turnar</span><i class="fa fa-user-times"></i></a>
                </li>
                <li>
                    <a href="#">Busquedas<span><i class="fa fa-search"></i></span></a>

                </li>
                <li>
                    <a href="#"><span>Nuevo</span> <i class="fa fa-plus"></i> </a>
                </li>
                <li>
                    <a href="#"><span>Rastrear persona</span> <i class="fa fa-users"></i></a>
                </li>
                 <li>
                    <a href="#"><span>Obtener audiencia</span> <i class="fa fa-clock-o"></i></a>
                </li>
                <li>
                    <a href="#"><span>Agenda</span><i class="fa fa-calendar"></i></a>
                </li>
                <li>
                    <a href="#"><span>Notificaciones </span>1</i></a>
                </li>
            </ul>
      </div>


		<div id="page-content-wrapper"> 
    

            
				    <div class="btn-group" role="group" aria-label="Basic example">
				    	<button type="button" class="btn btn-secondary" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></button>   
				    </div>



		<div class="col-md-12">
				  	<br>
				 	<nav>
				 		<div class="nav nav-tabs color-nav-tab" id="nav-tab" role="tablist">
				 			<a class="nav-item nav-link active color-nav-tab" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos del Solicitante <span><i class="fa fa-address-card-o"></i></span></a>
				 			<a class="nav-item nav-link color-nav-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Hechos <span><i class="fa fa-check-circle"></i></span> </a>
				 			<a class="nav-item nav-link" id="nav-delitos-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Delitos <span><i class="fa fa-gavel"></i></span></a>
				 			<a class="nav-item nav-link" id="nav-investigacion-tab" data-toggle="tab" href="#nav-investigacion" role="tab" aria-controls="nav-contact" aria-selected="false">Investigado <span><i class="fa fa-archive"></i></span></a>

				 			<a class="nav-item nav-link" id="nav-victimas-tab" data-toggle="tab" href="#nav-victimas" role="tab" aria-controls="nav-victimas" aria-selected="false">Victimas <span><i class="fa fa-male"></i></span></a>
				 			<a class="nav-item nav-link" id="nav-victimas-tab" data-toggle="tab" href="#nav-victimas" role="tab" aria-controls="nav-contact" aria-selected="false">Medidas de Proteccion <span><i class="fa fa-list-ul"></i></span></a>
				 			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Medidas de atención <span><i class="fa fa-list-ul"></i></span></a>
				 			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Acuerdo Reparatorio <span><i class="fa fa-handshake-o"></i></span></a>

				 		</div>
				 	</nav>
				 	<div class="tab-content" id="nav-tabContent">
				 		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				 			@include('orientador.fields-orientador.personales-orientador')
				 		</div>
				 		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				 			@include('orientador.hechos-orientador')
				 		</div>
				 		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-delitos-tab">
				 		@include('orientador.delitos-orientador')
				 	</div>
				 	<div class="tab-pane fade" id="nav-investigacion" role="tabpanel" aria-labelledby="nav-investigacion-tab">
				 		@include('orientador.investigado-orientador')
				 	</div>
				 	<div class="tab-pane fade" id="nav-victimas" role="tabpanel" aria-labelledby="nav-victimas-tab">
				 		@include('orientador.victimas')
				 	</div>
				 	</div>

				 </div>



@endsection