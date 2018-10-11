<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Guia de Negocios</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <style>
   	#mapid { height: 580px; }
   </style>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript" ></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-new.min.css">
  <script src="<?php echo base_url() ?>/assets/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" >Tu Agenda</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
				<li class="active"><a href="#" >Inicio <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Acerca de</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#" >Lista de Contactos</a></li>
						<li><a href="#">Crear Contacto</a></li>
						<li class="divider"></li>
						<li><a href="#">Mapa de contactos</a></li>            
						<li class="divider"></li>
						<li><a href="#">Avanzado</a></li>
					</ul>
				</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
					  	<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			  	Estos son los resultados encontrados
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-9">
			  	<div id="mapid">Entro</div>
			</div>
			<div class="col-lg-3 col-md-3">
			  	Seleccione un marcador del mapa para poder ver en este lugar detalles sobre ese negocio.
			</div>
		</div>
	</div>

	













	<script>
		var data = [
			{
				lat:-17.39489,
				lng:-66.16001,
				text: "<div><span>Esto es un nuevo contenido</span></div>",
			},
			{
				lat:-16.39489,
				lng:-66.16001,
				text: "Este es el primero",
			}
		];

		var markerArray = [];

		var mymap = L.map('mapid').setView([-17.39489, -66.16001], 8);
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		    maxZoom: 8,
		    id: 'mapbox.streets',
		    accessToken: 'pk.eyJ1IjoiaHBlcmV6IiwiYSI6ImNqbjI5ajh6aTJpZngzcG5vejRnYjlvMGkifQ.DJOQ29dnnukUR0GNBEBhAA'
		}).addTo(mymap);

		$.each(data, function(index, val) {
			markerArray.push(L.marker([val.lat, val.lng]).addTo(mymap));	
			markerArray[markerArray.length-1].bindPopup(val.text, {closeOnClick: false, autoClose: false});
		});


	</script>
</body>
</html>
