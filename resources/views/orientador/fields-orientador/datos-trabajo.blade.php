 <div class="card">
    <div class="card-header" style="text-align: center;">
        <p class="lead">Datos del trabajo <span><i class="fa fa-briefcase"></i></span></p>
    </div>
    </div>

    <div class="row">
        <div class="col-3">
        <div class="form-group">
            {!! Form::label('lugarTrabajo', 'Lugar de trabajo', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('lugarTrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el lugar de trabajo', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('telefonoTrabajo', 'Teléfono del trabajo', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('telefonoTrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono del trabajo', 'required']) !!}
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('idEstado2', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('idEstado2', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('idMunicipio2', 'Municipio', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('idMunicipio2', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('idLocalidad2', 'Localidad', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('idLocalidad2', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('cp2', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('cp2', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('idColonia2', 'Colonia', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('idColonia2', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', ]) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('calle2', 'Calle', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('calle2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('numExterno2', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numExterno2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('numInterno2', 'Número interior', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numInterno2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior', 'required']) !!}
        </div>
    </div>
    </div>
