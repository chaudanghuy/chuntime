<div class="container">
	<?php echo $this->Form->create('Events'); ?>
	<?php echo $this->Form->input('title'); ?>
	<?php echo $this->Form->hidden('latitude', array('id' => 'lat')); ?>
	<?php echo $this->Form->hidden('longitude', array('id' => 'lon')); ?>
	<?php echo $this->Form->submit(); ?>
	<?php echo $this->Form->end(); ?>	
	<div id="mapholder"></div>
</div>	
<p id="demo">Click the <button onclick="getLocation()">Try It</button> to get your position.</p>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
      lat=position.coords.latitude;      
      document.getElementById("lat").value = lat;      
	  lon=position.coords.longitude
	  document.getElementById("lon").value = lon;
	  latlon=new google.maps.LatLng(lat, lon)
	  mapholder=document.getElementById('mapholder')
	  mapholder.style.height='250px';
	  mapholder.style.width='100%';

	  var myOptions={
	  center:latlon,zoom:14,
	  mapTypeId:google.maps.MapTypeId.ROADMAP,
	  mapTypeControl:false,
	  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	  };
	  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
	  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>