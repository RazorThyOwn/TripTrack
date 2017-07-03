<!DOCTYPE html>
<html>
	<head>
		<title>Trip Track</title>
		<!--- Loading bootstrap --->
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<!--- Main loading of the div elements --->
		<div id="container" style="width: 99vw; height: 98vh; overflow-y: auto;">
			<div id="map" style="width: 80%; float: left; height: 100%; background-color: #8DA9B2; position: fixed;">
			</div>
		</div>
	</body>
</html>


<!--- Loading core JS for the application... --->

	<script src="ol.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	
<!-- Bootstrap core JavaScript -->

    <script src="Bootstrap/tether.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

 <script>
	var map = new ol.Map({
	layers: [
	  new ol.layer.Tile({
		source: new ol.source.OSM()
	  })
	],
	target: 'map',
	controls: ol.control.defaults({
	  attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
		collapsible: false
	  })
	}),
	view: new ol.View({
	  center: [0, 0],
	  zoom: 2
	})
	});
</script>