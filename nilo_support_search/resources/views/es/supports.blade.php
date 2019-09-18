<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
  		<link href="{{asset('css/style_datelimit.css')}}" rel="stylesheet">
  		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-violet">
	      <img src="{{'img/logo_nilo_blanco.png'}}" width="7%">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">

	        </ul>
	        <form class="form-inline mt-2 mt-md-0">
	          
	            <a class="nav-link" href="#">Sobre Nilo</a> 
	            <a class="nav-link" href="#">Facturación Electrónica</a>	          	          
	            <a class="nav-link" href="#">Módulos</a>
	            <a class="nav-link" href="#">Beneficios</a>	            
	            <a class="nav-link" href="#">Planes</a>
	            <a class="nav-link" href="#">Blog</a>
	            <a class="nav-link" href="#">Contacto</a>
	          	<button class="btn nav-link btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
	        </form>
	    </div>
	</nav>
	<div class="container mt-sl">
		<h1 class="text-center">¿Cómo podemos ayudarte?</h1>
		<div class="row">
			
			<div class="col-md-12 mt-sl">
				<form action="" method="post">
					<div class="form-group">
						<input type="search" class="form-control" placeholder="Describe tu problema">
					</div>
				</form>
			</div>
			<div class="col-md-3">
				<div class="circle-purple">
					<p class="text-center" style="position: relative;font-size: 300%;" >📋</p>
					<p class="text-center">factura</p>
				</div>
			
			</div>
			<div class="col-md-3">
				<div class="circle-purple">
					<p class="text-center" style="position: relative;font-size: 300%;">📞</p>
					<p class="text-center">CRM</p>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="circle-purple">
					<p class="text-center" style="position: relative;font-size: 300%;">📞</p>
					<p class="text-center">CONTACTO</p>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="circle-purple">
					<p class="text-center" style="position: relative;font-size: 300%;">📄 📱 💳</p>
					<p class="text-center">FACTURACIÓN ELÉCTRONICA</p>
				</div>
				<h1></h1>
			</div>

		</div>
		<table class="table table-hover">
			<thead class="bg-violet">
				<th>#</th>
				<th>Pregunta</th>
				<th>Solución</th>
				<th>Video</th>
			</thead>
			<tbody>
				<td>1</td>
				<td>¿Cómo Facturo?</td>
				<td>Nosé</td>
				<td>
					
					<button class="btn btn-primary">Video</button>
				</td>
			</tbody>
		</table>
	</div>
			<script src="{{'js/jquery.min.map.js'}}"></script>
		    <script type="text/javascript" src="{{'js/querymain.js'}}"></script>
</body>
</html>