// JavaScript Document

/* variables */
var appVersion

/* carga inicial de la app */
function onBodyLoad() {    
	document.addEventListener("deviceready", onDeviceReady, false);
}

function onDeviceReady(){
	$.get("config.xml", function(data){
		alert($(data).find('widget').attr('version'));
	});
	 
	 
$.ajax({
   type: 'POST',
   data: postData+'&amp;lid='+landmarkID,
   url: 'http://your-domain.com/comments/save.php',
   success: function(data){
	   console.log(data);
	   alert('Your comment was successfully added');
	},
	error: function(){
		console.log(data);
		alert('There was an error adding your comment');
	}
});
	 
	 
	 
	 
	 
	 
	  $( "#lecturas" ).load( "http://www.parroquiasjc.org/app/php/palabra-diaria.php", function( response, status, xhr ) {
		if ( status == "error" ) {
		  var msg2 = "Error conectando al servidor. Por favor, verifique su conexión a internet.";
		  $( "#error2" ).html( msg2 );
		}
	  });
}

/*
 * Google Maps documentation: http://code.google.com/apis/maps/documentation/javascript/basics.html
 * Geolocation documentation: http://dev.w3.org/geo/api/spec-source.html
 
$( document ).on( "pagecreate", "#map-page", function() {
    var defaultLatLng = new google.maps.LatLng(13.6436097, -89.2803691);  // Default to Hollywood, CA when no geolocation support
    
	if ( navigator.geolocation ) {
        function success(pos) {
            // Location found, show map with these coordinates
            // drawMap(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
			drawMap(defaultLatLng);
        }
        function fail(error) {
            drawMap(defaultLatLng);  // Failed to find location, show default map
        }
        // Find the users current position.  Cache the location for 5 minutes, timeout after 6 seconds
        navigator.geolocation.getCurrentPosition(success, fail, {maximumAge: 500000, enableHighAccuracy:true, timeout: 6000});
    } else {
        drawMap(defaultLatLng);  // No geolocation support, show default map
    }
    
	function drawMap(latlng) {
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        // Add an overlay to the map of current lat/lng
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: "Greetings!"
        });
    }
});*/

/* AS framework - www.adlersystems.com */