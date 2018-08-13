$(document).ready(function(){ // On window load

	// API Keys
	var HOTWIRE_API_KEY = 'nh66uu2cm4au5ytg4cecf2q4'; // Hotwire key
	var GOOGLE_MAPS_API_KEY = 'AIzaSyDxCFGOkAibs__awsnk_EycGB7FieUISOA'; // Google maps key
	var ebKey = "6TQP4FQ6Y4VLCMBGFN4E"; // EventBrite Key

	// Generic hotel image array
	var hotelImg = ["room01.jpg", "room02.jpg", "room03.jpg", "room04.jpg", "room05.jpg","room06.jpg", "room07.jpg", "room08.jpg", "room09.jpg", "room10.jpg", "room11.jpg","room12.jpg", "room13.jpg", "room14.jpg","room15.jpg", "room16.jpg", "room17.jpg"];


	// Search submit functionality

	$("#search_btn").on("click",function(x) { // Submit results page search with magnifying glass icon
		x.preventDefault(); // Prevent refresh on click
		$("#search-form").submit(); // Submit results search form
	});

	$("body").on("click","#search_btn_home",function() { // Submit home page search with magnifying glass icon
		$("#home-search").submit(); // Submit home search form
	});

	$('#search-form').submit(function(e) { // Search form submit
		e.preventDefault(); // Prevent refresh on submit
		$.ajax({ // Hotwire AJAX call
			// Hotwire endpoint query string with JSONP format
			url: 'http://api.hotwire.com/v1/deal/hotel?apikey=' + HOTWIRE_API_KEY + '&limit=18&dest=' + encodeURIComponent($('#dest').val()) + '&distance=*~25&sort=price&sortorder=' + sortOrder + '&starrating=' + starRating + '&format=jsonp', 
			dataType: 'jsonp', // Receives data as JSONP (couldn't get it to work with regular JSON)
			success: function(data) { // If successful, information is received as a data parameter
				var mainDiv = $("#main-div"); // Selects hotel div from results page
				mainDiv.html(''); // Empties out the div to prevent stacking results on top of each other with multiple searches
				var mainStr = ''; // Sets up string to be later appended to div
				for(var i = 0; i < data.Result.length; i++) { // For each result item in the data received
					var randPic = hotelImg[Math.floor(Math.random()*hotelImg.length)]; // Grab a random image from the hotel image array
					var result = data.Result[i]; // Directly targets a specific hotel using i
					mainStr += '<li>'; // Create list item
					mainStr += '<div class="uk-card uk-card-small uk-margin">'; // Create card div
					mainStr += '<a href="javascript:getCoordinates(' + result.NeighborhoodLatitude + ',' + result.NeighborhoodLongitude + ')">'; // Create map coordinates link
					mainStr += '<div class="uk-card-media-top">'; // Card image div
					mainStr += '<img src="img/rooms/' + randPic + '" alt="Hotel">'; // Card image
					mainStr += '</div>'; // End image div
					mainStr += '<div class="uk-card-body">'; // Hotel name div
					mainStr += '<h5>' + result.Headline + '</h5>'; // Hotel info
					mainStr += '</div>'; // End hotel name div
					mainStr += '</a>'; // End map coordinates link
					mainStr += '<div class="uk-card-footer">'; // Footer div
					mainStr += '<a href="' + result.Url + '" class="uk-button uk-button-default" target="_blank">Book Hotel</a>'; // Explore link
					mainStr += '</div></div>';// End footer div and card div
					mainStr += '</li>'; // End list item
				}

				mainDiv.append(mainStr); // Add card string to hotel div
				
				var location = "&location.latitude=" + result.NeighborhoodLatitude + "&location.longitude=" + result.NeighborhoodLongitude;
				var settings = { // Settings for Eventbrite AJAX call
					"async": true,
					"crossDomain": true,
					"url": "https://www.eventbriteapi.com/v3/events/search/?token=" + ebKey + location + "&location.within=50mi", // Endpoint query string for Eventbrite
					"method": "GET",
				};

				$.ajax(settings).done(function(data) { // AJAX call with data being received
					var eventDiv = $("#event-div"); // Selects events container div
					eventDiv.html(''); // Empties out div
					var mainStr = ''; // Resets string to be appended to div
					for (i in data.events) { // For every event found in the data
						var event = data.events[i];
						var title = event.name.text;

						if(event.logo) { // If event data contains an image
							image = "<img src='" + event.logo.url + "' alt='" + title + "'>";
						} else { // If not, uses a generic image from eventbrite
							image = "<img src='https://www.eventbrite.com/static/images/search/placeholder1.png' alt='" + title + "'>";
						}

						if (i <= 18) { // Creates a card for 18 events to prevent excess pages in carousel
						
							mainStr += '<li>'; // Create list item
							mainStr += '<div class="uk-card uk-card-small uk-margin">'; // Create card div
							mainStr += '<div class="uk-card-media-top">'; // Card image div
							mainStr += image; // Card image
							mainStr += '</div>'; // End image div
							mainStr += '<div class="uk-card-body">'; // Event name div
							mainStr += '<h5 class="uk-text-truncate">' + title + '</h5>'; // Event name
							mainStr += '</div>'; // End hotel name div
							mainStr += '<div class="uk-card-footer">'; // Footer div
							mainStr += '<a href="' + event.url + '" class="uk-button uk-button-default" target="_blank">More Info</a>'; // Event link
							mainStr += '</div></div>';// End footer div and card div
							mainStr += '</li>'; // End list item
						} // End card creation		
					} // End if statement for each item in data

					eventDiv.append(mainStr); // Append card string to event div

				}); // End Eventbrite AJAX request
			} // End AJAX success
		}); // End Hotwire AJAX request
	}); // End form submit function




	// Sorting functionality

	var sortOrder = 'asc';
	var starRating = '3~*';

	function setSortOrder() { // Sort by price
		var idx = $('#price-select')[0].selectedIndex;
		sortOrder = $('#price-select')[0].options[idx].value;
		$('#search-form').submit();
	}

	function setStarRating() { // Sort by pating
		var idx = $('#star-select')[0].selectedIndex;
		starRating = $('#star-select')[0].options[idx].value;
		$('#search-form').submit();
	}

	// Check if filter dropdown was changed
	$('#price-select').change(setSortOrder);
	$('#star-select').change(setStarRating);


	// Fullpage functionality
	$('#fullpage').fullpage({ // Initialize Fullpage
		scrollOverflow: true,
	});


	// Updates URL string with search form info
	var url = window.location.href;
	var tail = url.split('?')[1];
	if(tail) {
		var mySearch = tail.split('=')[1];
		$('#dest').val(mySearch);
		$('#search-form').submit();
	}

}); // End window onload


// Google Maps functionality

var map, marker = '';

function getCoordinates(lat, lng) { // Google Maps call with longitude and latitude data received

	var placeIcon = './img/marker.png'; // Custom marker to set on latitude and longitude selected
	var latlng = new google.maps.LatLng(lat, lng); // Converts latitude and longitude into a string

	marker = new google.maps.Marker({ // Place marker
		position: latlng, // Position for marker to be placed (latlng variable)
		map: map,
		icon: placeIcon // Custome marker used
	});
	
	map.panTo(latlng); // Pan to area selected when hotel is clicked
	map.setZoom(14); // Map zoom when hotel is clicked
	
	infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);

    service.nearbySearch({ // Information to be displayed on map when a hotel is selected
        location: latlng, // Location selected
        radius: 3000, // Radius
        type: ['restaurant'] // Type of category to search for
    },	callback); // Activate callback function afterwards


    function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
        	// Array of categories to avoid in search results
        	var avoid = ["accounting","airport","atm","bicycle_store","bus_station","car_dealer","car_rental","car_repair","car_wash","cemetery","church","city_hall","convenience_store","courthouse","dentist","doctor","electrician","embassy","electronics_store","fire_station","funeral_home","gas_station","gym","hair_care","hardware_store","hindu_temple","hospital","insurance_agency","laundry","lawyer","local_government_office","locksmith","lodging","mosque","moving_company","painter","parking","pharmacy","physiotherapist","plumber","police","post_office","pet_store","real_estate_agency","roofing_contractor","rv_park","school","storage","subway_station","synagogue","taxi_stand","train_station","transit_station","travel_agency","veterinary_care"];
			for (var i = 0; i < results.length; i++) { // For each result location, place a marker
				for (x = 1; x < avoid.length; x++){ // Avoid each item in the array
		    		var typefilter = avoid[x];
		    		if(results[i].types.includes("test")){
			    		return;
			    	} else {
			    		createMarker(results[i]);
			    	}
		    	} // End avoid statement
			} // End results statement
		}
    } // End callback

	function isInArray(a, b) {
		return !!~a.indexOf(b)
	}
		
    function createMarker(place) { // Creates a marker on each result location
        var marker = new google.maps.Marker({ // Creates and places marker
			map: map,
			position: place.geometry.location,
        });

        google.maps.event.addListener(marker, 'click', function() { // Adds click event listener to each marker
			infowindow.setContent("<b><a href='https://www.google.com/maps/place/?q=place_id:" + place.place_id + "'target='_blank'>" + place.name + "</a></b><br>" + place.vicinity);
			infowindow.open(map, this);
        });
    }
} // End Google Maps call

var mapDiv = document.getElementById('map-div'); // Map div selector

function initMap() { // Initial map location and zoom level
	map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(37.09024, -95.712891),
		zoom: 4
	});
}

