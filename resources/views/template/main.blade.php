<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAT</title>
    {{--  Style  --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
   {{--  <link rel="stylesheet" href="https://rawcdn.githack.com/Romaincks/assets/master/style.css"><!--estilo principal--> --}}
    <link rel="stylesheet" href="https://rawcdn.githack.com/Romaincks/assets/master/dist/css/bootstrap.css"><!---bootstrap modificado-->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
	@yield('css')
    {{--  -----  --}}
</head>
<body>
	@include('template.partials.header')
	<div class="container">
		@yield('content')
	</div>
	{{--  Scripts  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-idletimer/1.0.0/idle-timer.min.js"></script>
    <script src="{{asset('js/slidebar.js')}}"></script>
    <script src ="{{asset('js/selects.js')}}"></script>
	<script src="{{ asset('js/moment.js')}}" ></script>
    <script src="{{ asset('js/funciones.js')}}" ></script>
   
    <script>
        $(document).ready(function() {
            $("input:text").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });
            $("textarea").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });
        });
    </script>
	@yield('scripts')
	{{--  ------  --}}
	@include('sweet::alert')
</body>
</html>