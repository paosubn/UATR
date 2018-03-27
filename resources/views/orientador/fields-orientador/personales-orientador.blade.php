

  <div class="card">
    <div class="card-header" style="text-align: center;">
        <p class="lead">Datos de la persona denunciante <span><i class="fa fa-file-text-o"></i></span></p>
    </div>
</div>  
{!!Form::open(['route' => 'solicitante.store'])!!}
<div class="row">
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('nombre2', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
            {!! Form::text('nombre2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','required']) !!}
            <div class="help-block with-errors"></div> 
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','required']) !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>
    
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido']) !!}
        </div>
    </div>
    

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('rfc2', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('rfc2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.']) !!}
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('telefono2', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('telefono2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required', 'required']) !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>
    
    <div class="col-2">
        <div class="form-group">
            {!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
            <div class="input-group date" id="fechanac" data-target-input="nearest">
                {!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
                <div class="input-group-append" data-target="#fechanac" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            <div class="help-block with-errors"></div>  
        </div>
    </div>

    <div class="col-1">
                <div class="form-group">
                    {!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
                    {!! Form::select('sexo', ['SIN INFORMACION' => 'SIN INFORMACION', 'HOMBRE' => 'HOMBRE', 'MUJER' => 'MUJER'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
                    <div class="help-block with-errors"></div>
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
            {!! Form::select('cp2', ['' => 'Seleccione CP'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('idColonia2', 'Colonia', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('idColonia2', ['' => 'colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
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
            {!! Form::text('numExterno2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Exterior', 'required']) !!}
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('numInterno2', 'Número interior', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numInterno2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Interior', 'required']) !!}
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('docIdentificacion', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('docIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificacion'],'required') !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('numDocIdentificacion', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación']) !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            {!! Form::label('', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación']) !!}
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="col-3">
                <div class="form-group">
                    {!! Form::label('idEstadoCivil', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
                    {!! Form::select('idEstadoCivil', [''=>'EstadoCivil'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil']) !!}
                </div>
            </div>
        <div class="col-3">
                <div class="form-group">
                    {!! Form::label('idOcupacion', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
                    {!! Form::select('idOcupacion', [''=>'Ocupación'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la ocupación']) !!}
                </div>
            </div>
        <div class="col-3">
                <div class="form-group">
                    {!! Form::label('idEscolaridad', 'Escolaridad', ['class' => 'col-form-label-sm']) !!}
                    {!! Form::select('idEscolaridad', [''=>'Escolaridad'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la escoalridad']) !!}
                </div>
            </div>

        <div class="col-3">
                <div class="form-group">
                    {!! Form::label('idNacionalidad', 'Nacionalidad', ['class' => 'col-form-label-sm']) !!}
                    {!! Form::select('idNacionalidad', [''=>'Nacionalidad'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la nacionalidad']) !!}
                </div>
            </div>
    </div>


    <!--domicilio para el trabajo-->

   @include('orientador.fields-orientador.datos-trabajo')


<!---domicilio para notificaciones-->
@include('orientador.fields-orientador.domicilio-notificaciones')

<!--asesor juridico-->

<div class="card">
<div class="card-header">
        <div class="boxtwo">
            <div class="form-group" align="center">
                <div class="col">
                    <label class="col-form-label col-form-label-sm" >¿Viene acompañado de un asesor juridico?</label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label col-form-label col-form-label-sm">
                            <input class="form-check-input" type="radio" id="conAsesor1" name="Asesor" value="1"> Sí
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label col-form-label col-form-label-sm">
                            <input class="form-check-input" type="radio" id="conAsesor2" name="Asesor" value="0"> No
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!--en caso de si llevar asesor juridico-->

<div id="datosAsesor">
@include('orientador.fields-orientador.asesor-juridico')
</div>

<!--razon por la que acude-->

@include('orientador.fields-orientador.razon-orientador')

<div class="boxtwo">
            <div class="row">
                
                <div class="col">   
                    <div class="text-right">
                           
                            {!!Form::submit('Guardar',array('class' => 'btn  button button1'))!!}
                    
                    </div>
                </div>
            </div>
        </div>
{!!Form::close()!!}

{{-- <div class="col-md-6">
<button class="button button1">Siguiente <span><i class="fa fa-arrow-right"></i></span></button>
</div> --}}