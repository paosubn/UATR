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
 
<!--nav-->
<div class="col-md-12">
    <br>
    <nav>
        <div class="nav nav-tabs color-nav-tab" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                <i class="fa fa-address-card-o"></i> Datos del Solicitante 
            </a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                <i class="fa fa-check-circle"></i> Hechos 
            </a>
            <a class="nav-item nav-link" id="nav-delitos-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <i class="fa fa-gavel"></i> Delitos 
            </a>
            <a class="nav-item nav-link active" id="nav-investigacion-tab" data-toggle="tab" href="#nav-investigacion" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <i class="fa fa-archive"></i> Investigado 
            </a>
            <a class="nav-item nav-link" id="nav-victimas-tab" data-toggle="tab" href="#nav-victimas" role="tab" aria-controls="nav-victimas" aria-selected="false">
                 <i class="fa fa-male"></i> Victimas 
            </a>
            <a class="nav-item nav-link" id="nav-victimas-tab" data-toggle="tab" href="#nav-victimas" role="tab" aria-controls="nav-contact" aria-selected="false">
                <i class="fa fa-list-ul"></i> Medidas de Proteccion
            </a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                <i class="fa fa-list-ul"></i> Medidas de atención
            </a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                <i class="fa fa-handshake-o"></i> Acuerdo Reparatorio
            </a>
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

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
@endsection

@section('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
	{{-- <script src="{{ asset('js/slidebar.js')}}"></script> --}}
	<script>
		$(function () {
			$('#fechanac').datetimepicker({
				format: 'YYYY-MM-DD',
            	minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            	maxDate: moment().subtract(18, 'years').format('YYYY-MM-DD')
			});
		});


		$(function () {
			$('#fechanac2').datetimepicker({
				format: 'YYYY-MM-DD',
            	minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            	maxDate: moment().subtract(18, 'years').format('YYYY-MM-DD')
			});
		});


		// $("#fechanac").on("change.datetimepicker", function (e) {
		// 	$('#edad').val(moment().diff(e.date,'years'));
		// });

		// $( "#edad" ).change(function() {
		// 	var anios = $('#edad').val();
		// 	$('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
		// });


	</script>
@endsection
  
  