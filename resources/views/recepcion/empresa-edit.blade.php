<div class="form-group">
	<div class="form-row" >
		<!--nombre-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('nombres', 'Nombre: ', ['class' => 'col-form-label-sm ']) !!}
				{!!Form::label('nombre',$preregistro->nombre ,['class'=> 'col-form-label-sm labelCambioNombre'])!!}
				<div class="input-group inputOculto" id="inputNombre">
					{!! Form::text('nombres', $preregistro->nombre, ['class' => 'form-control  form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<input type="button" id="botonCambioNombre" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
				<div class="help-block with-errors"></div> 
			</div>
		</div>
		<!--RFC-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('rfc', 'R.F.C.: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$preregistro->rfc ,['class'=> 'col-form-label-sm labelCambioRfc'])!!}
				<div class="input-group inputOculto" id="inputRfc">
					{!! Form::text('rfc', $preregistro->rfc, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
					<input type="button" id="botonCambioRfc" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<!--Representante legal-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('repLegal', 'Representante Legal: ', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
				{!!Form::label('nombre',$preregistro->representanteLegal ,['class'=> 'col-form-label-sm labelCambioRepLegal'])!!}
				<div class="input-group inputOculto" id="inputRepLegal">
					{!! Form::text('repLegal', $preregistro->representanteLegal, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
					<input type="button" id="botonCambioRepLegal" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
				<div class="help-block with-errors"></div> 
			</div>
		</div>
		<!--telefono-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('telefono', 'Teléfono: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$preregistro->telefono ,['class'=> 'col-form-label-sm labelCambioTelefono'])!!}
				<div class="input-group inputOculto" id="inputTelefono">
					{!! Form::text('telefono', $preregistro->telefono, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required']) !!}
					<input type="button" id="botonCambioTelefono" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
				<div class="help-block with-errors"></div>
			</div>
		</div>

		{{--  direccion  --}}
		{{--  V V V V V  --}}

		<div class="col-4">
			<div class="form-group">
				{!! Form::label('idEstado', 'Entidad federativa: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$nombreEstado ,['class'=> 'col-form-label-sm labelCambioDireccion'])!!}
				<div class="input-group inputOculto" id="inputDireccionEstado">
					{!! Form::select('idEstado', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required','disabled']) !!}
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('idMunicipio', 'Municipio: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$nombreMunicipio ,['class'=> 'col-form-label-sm labelCambioDireccion'])!!}
				<div class="input-group inputOculto" id="inputDireccionMunicipio">
					{!! Form::select('idMunicipio', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm', 'required','disabled']) !!}
				</div>
			</div>
		</div>

		<div class="col-4">
			<div class="form-group">
				{!! Form::label('idLocalidad', 'Localidad: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$nombreLocalidad ,['class'=> 'col-form-label-sm labelCambioDireccion'])!!}
				<div class="input-group inputOculto" id="inputDireccionLocalidad">
					{!! Form::select('idLocalidad', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm', 'required','disabled']) !!}
				</div>
			</div>
		</div>
				
		<!--Codigo Postal-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('cp', 'Código Postal :', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$nombreCP ,['class'=> 'col-form-label-sm labelCambioDireccion'])!!}
				<div class="input-group inputOculto" id="inputDireccionCp">
					{!! Form::select('cp', ['' => 'Seleccione un CP'], null, ['class' => 'form-control form-control-sm', 'required','disabled']) !!}
				</div>
			</div>
		</div>

			<!--colonia-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('idColonia', 'Colonia: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$nombreColonia ,['class'=> 'col-form-label-sm labelCambioDireccion'])!!}
				<div class="input-group inputOculto" id="inputDireccionColonia">
					{!! Form::select('idColonia', ['' => 'Colonia'], null, ['class' => 'form-control form-control-sm', 'required','disabled']) !!}
					<input type="button" id="botonCambioDireccion" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
			</div>
		</div>
		{{--  A A A A A  --}}
		{{--  ---------  --}}

			<!--CALLE-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('calle', 'Calle: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$direccionTB[0]->calle ,['class'=> 'col-form-label-sm labelCambioCalle'])!!}
				<div class="input-group inputOculto" id="inputCalle">
					{!! Form::text('calle',$direccionTB[0]->calle, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
					<input type="button" id="botonCambioCalle" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
			</div>
		</div>
			<!--Numero exterior-->
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('numExterno', 'Número exterior: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$direccionTB[0]->numExterno ,['class'=> 'col-form-label-sm labelCambioNumExterno'])!!}
				<div class="input-group inputOculto" id="inputNumExterno">
					{!! Form::text('numExterno', $direccionTB[0]->numExterno, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
					<input type="button" id="botonCambioNumExterno" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('numInterno1', 'Número interior: ', ['class' => 'col-form-label-sm']) !!}
				{!!Form::label('nombre',$direccionTB[0]->numInterno ,['class'=> 'col-form-label-sm labelCambioNumInterno'])!!}
				<div class="input-group inputOculto" id="inputNumInterno">
					{!! Form::text('numInterno',$direccionTB[0]->numInterno, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior', 'required']) !!}
					<input type="button" id="botonCambioNumInterno" value="Cancelar" class="btn btn-sm btn-danger">
				</div>
			</div>
		</div>
	</div>
</div>