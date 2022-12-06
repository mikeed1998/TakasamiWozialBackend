<html>
<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$data['asunto']}}</title>
</head>

<body style="
			margin: 0;
			background: rgb(255, 255, 255);
			background-size: cover;
			background-repeat: no-repeat;
    		background-position: center;
			font-family: Arial, Helvetica, sans-serif;
			">

<div style="width: 450px; margin-left: auto; margin-right: auto; box-shadow: 10px 5px 5px grey;">
	<div style="text-align: center">
		<div style="background-color: black; padding-top: 15px; padding-bottom: 15px;">
			<img src="{{asset('img/design/logo_nombre.png')}}" style="text-align:center">
		</div>
	<div style="padding-top: 10px">
		@if ($config->telefono)
			Tel: {{$config->telefono}}
			<br /><br/>
		@endif
	</div>
		<div>
			<div>
				<p>Nombre: <b> {{$data['nombre']}}</b></p>
			
			<p>Telefono: <b> {{$data['telefono']}}</b></p>
			<p>Email: <b> {{$data['correo']}}</b></p>
			<div class="cont-back-txt-centrado">
			<p class="back-txt-centrado">Comentarios: <br> <b style="text-align:justify;"> {{$data['mensaje']}}</b></p>
			</div>
			<!-- Fecha -->
			<div style="
					width:100%;
					text-align:center;
					color:#333;
					font-size:15px;
					padding:1em 0;
					">
				{{$data['hoy']}}
			</div><!-- Fecha -->
			</div>
		</div>
	</div>
</div>
				
	{{-- <div style="
		background: #fff;
		margin: 250px auto 50px;
		border: 1px gray dashed;
		border-radius: 20px;
		max-width:700px;
		width:100%;
		
		">
		<div class="" style="
			margin: .6em auto;
			text-align:center;
			color:#333;
			font-size:25px;
			">
			{{$data['asunto']}}
		</div>
		<!-- Cuerpo del correo -->
		<div style="
				box-sizing: border-box;
				width:100%;
				text-align:center;
				color:#333;
				font-size:18px;
				padding:20px;
				">
			<p>Nombre: <b> {{$data['nombre']}}</b></p>
			<p>empresa: <b> {{$data['empresa']}}</b></p>
			<p>Telefono: <b> {{$data['telefono']}}</b></p>
			<p>Email: <b> {{$data['correo']}}</b></p>
			<p>Comentarios: <br> <b style="text-align:justify;"> {{$data['mensaje']}}</b></p>
			<!-- Fecha -->
			<div style="
					width:100%;
					text-align:center;
					color:#333;
					font-size:15px;
					padding:1em 0;
					">
				{{$data['hoy']}}
			</div><!-- Fecha -->
		</div><!-- Cuerpo del correo -->
	</div> --}}
{{-- 
	<div style="
		text-align:center;
		color:#000;
		margin-bottom: 3em;
		">
		<a href="{{url('/')}}"><img src="{{asset('img/design/logo.png')}}" style="width: 200px;background:#FFF;padding: 5px;border-radius: 5px;"></a>
		<br /><br />

		
	</div> --}}


</body>
</html>
