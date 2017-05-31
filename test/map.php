<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
    integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
    integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
    crossorigin=""></script>
    <style>
        #mapid   {
            margin-left: auto;
            margin-right: auto;
            width: 600px;
            height: 400px;
        }
    </style>
</head>
    <?php
        
    ?>
        <div id="mapid" ></div>
        <script>

	       var mymap = L.map('mapid').setView([-27.478271, 153.029403], 11);
           var marker = L.marker([-27.478271, 153.029403]).addTo(mymap);
            
	       L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', 
        {
		      maxZoom: 18,
		      attribution: 'Map data &copy; <a  href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	       }).addTo(mymap);

        </script>
</html>