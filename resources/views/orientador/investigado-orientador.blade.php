<div class="card">
    <div class="card-header" style="text-align: center;">
        <p class="lead">Datos del investigado <span><i class="fa fa-file-text-o"></i></span></p>
    </div>
</div>  

<div class="row">
	{!!Form::open(['route' => 'solicitante.store'])!!}
	<div class="col-3">
    <div class="form-group">
			{!! Form::label('nombresC', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombresC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
	</div>
</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('primerApC', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerApC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<!---FECHA NACIMIENTO-->




	<div class="col-3">
		<div class="form-group">
			{!! Form::label('aliasC', 'Alias', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('aliasC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias', 'required']) !!}
		</div>
	</div>

	<!--DIRECCION DENUNCIADO-->

	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEstadoC', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoC', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idMunicipioC', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipioC', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idLocalidadC', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidadC', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('cpC', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cpC', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idColoniaC', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColoniaC', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('calleC', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calleC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('numExternoC', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExternoC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('numInternoC', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInternoC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior', 'required']) !!}
		</div>
	</div>


	</div>