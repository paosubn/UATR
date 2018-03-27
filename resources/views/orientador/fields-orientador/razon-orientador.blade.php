<div class="card">
    <div class="card-header" style="text-align: center;">
        <p class="lead">Razon por la que acude<span></span></p>
     </div>
</div>
		<div class="container">
			<div class="row">
			 <div class="col-6">
            <div class="form-group" >
                    <div class="clearfix"></div>
                    <div class="form-check ">
                        <label class="form-check-label col-form-label col-form-label-sm">
                            <input class="form-check-input" type="radio" id="razon1" name="razon" value="0"> Orientacion/Asesoría
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label col-form-label col-form-label-sm">
                            <input class="form-check-input" type="radio" id="razon2" name="razon" value="1"> Presentación de Denuncia
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label col-form-label col-form-label-sm">
                            <input class="form-check-input" type="radio" id="razon3" name="razon" value="2"> Presentación Querella 
                        </label>
                    </div>
                </div>
            </div>
                    <div class="col-6">
                    <div class="form-group">
			{!! Form::label('razon', 'La Denuncia o querella se presenta por:', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('razon', ['' => 'Seleccione una razon'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
                </div>
            </div>
            </div>
       

		


	




