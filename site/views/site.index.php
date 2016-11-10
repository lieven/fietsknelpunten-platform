<!DOCTYPE html>
<html>
	<head>
		<title>fietsknelpunten.be</title>
		
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php ShowResourcePath('leaflet-v0.7.7/leaflet.css'); ?>" />
		
		<style type="text/css">
			body {
				padding: 0;
				margin: 0;
				font-family: "Helvetica", sans-serif;
			}
			html, body, #map {
				height: 100%;
				width: 100%;
			}
			
			.info {
				background-color: white;
				padding: 10px;
				border-color: 1px solid #AAA;
			}
			
		</style>
	</head>
	<body>
		
		<div id="map"></div>
		
		<script src="<?php ShowResourcePath('leaflet-v0.7.7/leaflet.js'); ?>"></script>
		
		<script>

			var map = L.map('map').setView([51.0, 4.2], 9);
			var url = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
			
			L.tileLayer(url, {
				maxZoom: 18,
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
			}).addTo(map);
			
			var infoControl = L.Control.extend({
				options: {
					position: 'topright'
				},

				onAdd: function (map) {
					var container = L.DomUtil.create('div', 'info');
					container.innerHTML = '<a href="/blog/2015/01/16/intro.html">Wat wordt dit?</a>';
					return container;
				}
			});

			map.addControl(new infoControl());

		</script>
	</body>
</html>


