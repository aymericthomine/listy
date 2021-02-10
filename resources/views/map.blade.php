<html>
<head>
<title>A Leaflet map!</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<style>
#map {width: 90%; height:600px; margin: auto; }
</style>

</head>

<body>

  <div id="map"></div>
  
<script>

  // Initialiser la carte
    
var map = L.map('map', {
                 center: [48.11, -1.66],
                 zoom: 13 });
  
  // Fond de carte
  
L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png').addTo(map);
   
 // Ajout des données personnelles
  
$.ajax({
			//URL de l'API
			url: "https://opendata.paris.fr/explore/dataset/coronavirus-commercants-parisiens-livraison-a-domicile/download/?format=geojson&timezone=Europe/Berlin&lang=fr",
			
			//Type de données
			dataType: "jsonp",
			
			//Méthode appelée lorsque le téléchargement a fonctionné
			success: function(geojson) {
				//Affichage des données dans la console
				console.log(geojson);
				
				//Création de la couche à partir du GeoJSON
                var layer = L.geoJSON(geojson);
				
				//Ajout de popup sur chaque objet
				layer.bindPopup(function(layer) {
					console.log(layer.feature.properties);
				});
				
				//Ajout de la couche sur la carte
				layer.addTo(map);
			},
			
			//Méthode appelée lorsque le téléchargement a échoué
			error: function() {
				alert("Erreur lors du téléchargement !");
			}      
		});

</script>
  
</body>
</html>
