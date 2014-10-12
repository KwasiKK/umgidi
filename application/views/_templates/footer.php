	<!-- JavaScript -->

	<script src='<?php echo URL; ?>js/jquery-1.10.2.js'></script>
	<script src='<?php echo URL; ?>js/bootstrap.js'></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
	<script src='https://maps.googleapis.com/maps/api/js'></script>
	<script>
		var directionDisplay, map;
		var directionsService = new google.maps.DirectionsService();
		var geocoder = new google.maps.Geocoder();
		 // convert the position returned by the geolocation API to a google coordinate object
		  var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		
		function initialize() {
		  // set the default center of the map
		  var latlng = new google.maps.LatLng(51.764696,5.526042);
		  
		  // set route options (draggable means you can alter/drag the route in the map)
		  var rendererOptions = { draggable: true };
		  directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
		  
		  // set the display options for the map
		  var myOptions = {
		    zoom: 14,
		    center: latlng,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    mapTypeControl: false
		  };
		  
		  // add the map to the map placeholder
		  map = new google.maps.Map(document.getElementById('map_canvas'),myOptions);
		  
		  // bind the map to the directions
		  directionsDisplay.setMap(map);
		  
		  // point the directions to the container for the direction details
		  directionsDisplay.setPanel(document.getElementById('directionsPanel'));
		  
		  // start the geolocation API
		  if (navigator.geolocation) {
		    // when geolocation is available on your device, run this function
		    navigator.geolocation.getCurrentPosition(foundYou, notFound);
		  } 
		  else {
		    // when no geolocation is available, alert this message
		    alert('Geolocation not supported or not enabled.');
		  }
		}
		
		function notFound(msg) {  
		  alert('Could not find your location :(')
		}
		
		function foundYou(position) {
		  // convert the position returned by the geolocation API to a google coordinate object
		  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		  
		  // then try to reverse geocode the location to return a human-readable address
		  geocoder.geocode({'latLng': latlng}, function(results, status) {
		    if (status == google.maps.GeocoderStatus.OK) {
		      // if the geolocation was recognized and an address was found
		      
		      if (results[0]) {
			// add a marker to the map on the geolocated point
			marker = new google.maps.Marker({
			    position: latlng,
			    map: map
			});
			
			// compose a string with the address parts
			var address = results[0].address_components[1].long_name+' '+results[0].address_components[0].long_name+', '+results[0].address_components[3].long_name
			$('#routeStart').val($('#routeStart').val() + address);
			// set the located address to the link, show the link and add a click event handler
			$('.autoLink span').html(address).parent().show().click(function(){
			  // onclick, set the geocoded address to the start-point formfield
			  $('#routeStart').val(address);
			  // call the calcRoute function to start calculating the route
			  calcRoute();
			});
		      }
		    } else {
		      // if the address couldn't be determined, alert and error with the status message
		      alert('Geocoder failed due to: ' + status);
		    }
		  });
		}
		
		function calcRoute() {
		  // get the travelmode, startpoint and via point from the form   
		  var travelMode = $('input[name=\'travelMode\']:checked').val();
		  var start = $('#routeStart').val();
		  var end = $('#routeEnd').val();
		  
		  // compose a array with options for the directions/route request
		  var request = {
		    origin: start,
		    destination: end,
		    unitSystem: google.maps.UnitSystem.IMPERIAL,
		    travelMode: google.maps.DirectionsTravelMode[travelMode]
		  };
		  
		  // call the directions API
		  directionsService.route(request, function(response, status) {
		    if (status == google.maps.DirectionsStatus.OK) {
		      // directions returned by the API, clear the directions panel before adding new directions
		      $('#directionsPanel').empty();
		      // display the direction details in the container
		      directionsDisplay.setDirections(response);
		    } else {
		      // alert an error message when the route could nog be calculated.
		      if (status == 'ZERO_RESULTS') {
			alert('No route could be found between the origin and destination.');
		      } else if (status == 'UNKNOWN_ERROR') {
			alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
		      } else if (status == 'REQUEST_DENIED') {
			alert('This webpage is not allowed to use the directions service.');
		      } else if (status == 'OVER_QUERY_LIMIT') {
			alert('The webpage has gone over the requests limit in too short a period of time.');
		      } else if (status == 'NOT_FOUND') {
			alert('At least one of the origin, destination, or waypoints could not be geocoded.');
		      } else if (status == 'INVALID_REQUEST') {
			alert('The DirectionsRequest provided was invalid.');         
		      } else {
			alert('There was an unknown error in your request. Requeststatus: nn'+status);
		      }
		    }
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	    
		<script src='<?php echo URL; ?>js/uiMorphingButton_fixed.js'></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
		<script type='text/javascript' src='<?php echo URL; ?>js/jquery.stackslider.js'></script>
		<script type='text/javascript'>
			
			$( function() {
				
				$( '#st-stack' ).stackslider();

			});

		</script>
		<script src='<?php echo URL; ?>js/classie.js'></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i').addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect'), 'trash-effect-active' );
			}, false );
		</script>
    
		    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
		    <script>
		    $('#menu-close').click(function(e) {
			e.preventDefault();
			$('#sidebar-wrapper').toggleClass('active');
		    });
		    </script>
		    <script>
		    $('#menu-toggle').click(function(e) {
			e.preventDefault();
			$('#sidebar-wrapper').toggleClass('active');
		    });
		    </script>
		    <script>
			$('#paragraph').addClass('animated bounceInDown');
			$('#paragraph2').addClass('animated wobble');
			$('#paragraph3').addClass('animated bounceInUp');
		    </script>

</body>

</html>