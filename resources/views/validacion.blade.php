<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UAT</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
	<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">

	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <form class="needs-validation" id="formExemplo" data-toggle="validator" role="form"> 
     <div class="form-group"> 
      <label for="textNome" class="control-label">Nome</label>
      <input id="textNome" class="form-control" placeholder="Digite seu Nome..." type="text" required>    
    </div>  
        <div class="form-group"> 
            <label for="inputEmail" class="control-label">Email</label>  
             <input id="inputEmail" class="form-control" placeholder="Digite seu E-mail" type="email" data-error="Por favor, informe um e-mail correto." required>  
                <div class="help-block with-errors"></div>  
        </div> 
    <div class="form-group">   
        <label for="inputPassword" class="control-label">Senha</label> 
        <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha..." data-minlength="6" required>
            <span class="help-block">Mínimo de seis (6) digitos</span> 
    </div>       
    <div class="form-group"> 
        <label for="inputConfirm" class="control-label">Confirme a Senha</label>      
        <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha..." data-match="#inputPassword" data-match-error="Atenção! As senhas não estão iguais." required>
    <div class="help-block with-errors"></div>   
    </div>
<div class="form-group">
   <div class="checkbox"> 
    <label> <input type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.</label> 
    <div class="help-block with-errors">
    </div>
</div> 
</div>          
<div class="form-group">     
   <button type="submit" class="btn btn-primary">Enviar</button> 
</div>    
</form>

<script src = "js/validator.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div>
    <button class="ok">ok</button>
    <button class="adios">adios</button>
</div>

<div class="genial">
    sip
</div>

<script>
$(document).ready(function(){
    $(".genial").hide();

    $(".ok").click(function(){

        $(".genial").show("slow");
});
});
</script>