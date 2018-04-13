<!DOCTYPE html>
<html>
<head>
    <title>Warcumi Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <![endif]-->

<style>
html { height: 100% }
body { height: 100% }
#map-container { height: 30% }
</style>

   <style>
      body { background-color:#CCC }
      #map-outer {  height: 850px; 
	  				padding: 10px; 
					border: 2px solid #CCC; 
					margin-bottom: 20px; 
					background-color:#FFF }
	  #map-container { height: 450px }
	  @media all and (max-width: 991px) {
		#map-outer  { height: 800px }
		}
    </style>
 
    <style>
      #map-container { height: 310px }
    </style>
</head>
<body>
    <div class="container">
  <div class="row">
      <div id="map-outer" class="col-md-12">
          <div id="address" class="col-md-4">
            <address>
			<blockquote>
				<h2>Our Location</h2>
				Jl. Panatayuda I, Nagasari, Karawang Barat, Kabupaten Karawang, Jawa Barat 41312.<br><br/>
                Ruko Citywalk Galuh Mas Blok.A/No.20<br>
				Kerawang Barat.                
				<abbr> +39 041 240 5411</abbr><br/>
				</blockquote>
				<blockquote>
            <strong><h2>WARCUMI</h2></strong>
                Utami 		   : +62 813 1305 2004<br>
                Asep Fahrurozi : +62 857 1925 8633<br>
				</blockquote>
           </address>
          </div>
        <div id="map-container" class="col-md-8"></div>
      </div><!-- /map-outer -->
  </div> <!-- /row -->
  
</div><!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(-6.3055741,107.3005834);
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
            map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
    <script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(-6.3055741,107.3005834);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script> 
	<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAKP2vl4cSKjlqMkO5nGxlDYD0PSM28vVA&callback=initMap"
    async defer></script>
</body>
</html>