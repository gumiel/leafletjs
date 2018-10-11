<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
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
</head>
<body>
	
	<div id="mapid">Entro</div>
	

	<script>
		var data = [
			{
				lat:-17.39489,
				lng:-66.16001,
				text: "<div><span></span></div>",
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

		$.each(markerArray, function(index, val) {
			// val.bindPopup(val.text, {closeOnClick: false, autoClose: false});
			// console.log(val.getLatLng());
			// L.popup()
		 //    .setLatLng(val.getLatLng())
		 //    .setContent('<p>Hello world!<br />This is a nice popup.</p>')
		 //    .openOn(mymap);
		});
			// var popup = L.popup()
		 //    .setLatLng([val.lat, val.lng])
		 //    .setContent('<p>Hello world!<br />This is a nice popup.</p>')
		 //    .openOn(mymap);

		// var marker = L.marker([-17.39489, -66.16001]).addTo(mymap);
		// var marker1 = L.marker([-16.39489, -66.16001]).addTo(mymap);

		// marker1.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();


		// marker.on('click', onMapClick);

		// function onMapClick(e) {
		//     alert("You clicked the map at " + e.latlng);
		// }


	</script>
</body>
</html>