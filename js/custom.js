// JavaScript Document

function onBackbutton() {
    // the intro div is considered home, so exit if use
    // wants to go back with button from there
    if ($('.api-div#api-intro').css('display') === 'block') {
        console.log("Exiting app");
        navigator.app.exitApp();
    } else {    
        $('.api-div').hide();
        $('.api-div#api-intro').show();
        $.mobile.silentScroll(0);
    }
}

$(document).ready(function() {   
    $('.api-div').hide();
    $('.api-div#api-intro').show();
    
    $('#intro').click(function(event) {
        $('.api-div').hide();
        $('.api-div#api-intro').show();
        $.mobile.silentScroll(0);            
    });
    
    $('div ul li a').click(function(event) {
        event.preventDefault();
        //alert('clicked : ' + $(this).attr('href'));
        var attrhref = $(this).attr('href');

        if (attrhref.indexOf("#api-") !== 0) {
            return;
        }
        
        // hide all div's, show only this one
        $('.api-div').hide();
        $(attrhref).show();

        // if small screen and portrait - close after tap
        var disp = $('ul #listdivider').css("display");
        //alert(disp + ' : ' + attrhref);
        if (disp === 'none') {
            $('div.ui-collapsible').trigger("collapse");
        } else {
            $.mobile.silentScroll(0);            
        }
    }); 
    
    $('#listdivider').click(function() {
        event.preventDefault();
        $('.api-div').hide();
        $('.api-div#api-intro').show();
        $.mobile.silentScroll(0);
    });
});

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