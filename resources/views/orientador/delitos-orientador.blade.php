<div class="card">
    <div class="card-header" style="text-align: center;">
        <p class="lead">Catalogo de delitos<span><i class="fa fa-file-text-o"></i></span></p>
    </div>
</div>  

{!!Form::open(['route' => 'solicitante.store'])!!}

<div class="col-md-12">
	<div class="row">	
		<div class="col-6">
			<div class="form-group">
				<label for="exampleSelect2">Lista de delitos</label>
				<select multiple class="form-control" id="exampleSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="exampleSelect2">Delitos Agregados</label>
				<select multiple class="form-control" id="exampleSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>

		</div>
	</div>
</div>


   
		
    </form>