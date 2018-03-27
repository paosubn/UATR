<div class="row" >
	<!--nombre-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombre1', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
			{!! Form::text('nombre1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
			<div class="help-block with-errors"></div> 
		</div>
	</div>
	<!--RFC-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('rfc1', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('rfc1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<!--Representante legal-->
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('repLegal', 'Representante Legal', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
			{!! Form::text('repLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
			<div class="help-block with-errors"></div> 
		</div>
	</div>
	{{--  telefono  --}}
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefono1', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefono1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required', 'required']) !!}
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado1', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado1', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio1', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipio1', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidad1', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidad1', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp1', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp1', ['' => 'Seleccione un CP'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia1', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia1', ['' => 'Colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle1', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno1', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Exterior', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInterno1', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInterno1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Interior', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idRazon1', 'Razón:', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idRazon1', $razones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una razón', 'required']) !!}
		</div>
	</div>
</div>
