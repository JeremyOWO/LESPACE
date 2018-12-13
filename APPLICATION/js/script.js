      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 10,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          var first = 1;
          var lat = 1;
          var lng = 1;
          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
            // List all of if and adress marker
            if(first == 1)
            {
              document.getElementById("div2").innerHTML += 'Magasin: <a href="fiche.php">'+place.name+'</a>';
              first = 0;
            }
            else{
              document.getElementById("div2").innerHTML += 'Magasin: <a href="fiche.php">'+place.name+'</a>';
            }
            
            document.getElementById("div2").innerHTML += '<br>';
            document.getElementById("div2").innerHTML += 'Adresse:'+place.formatted_address;
            document.getElementById("div2").innerHTML += '<br>';
            document.getElementById("div2").innerHTML += 'Note: '+place.rating;
            document.getElementById("div2").innerHTML += '<br>';
            document.getElementById("div2").innerHTML += '<br>';
            
            lat = place.geometry.location.lat();
            lng = place.geometry.location.lng();

            console.log(place);
            console.log(place.geometry.location.lat());
            $.ajax({

                // Adresse à laquelle la requête est envoyée
                url : "createFiche.php",
                type : "POST",
                // Le délai maximun en millisecondes de traitement de la demande
                data : 'id_google=' + place.place_id + '&addresse=' + place.formatted_address + '&latitude=' + lat + '&longitude=' + lng + '&nlat=' + place.geometry.viewport.j.j +
                  '&nlong=' + place.geometry.viewport.l.j + '&slat=' + place.geometry.viewport.j.l + '&slong=' + place.geometry.viewport.l.l + '&name=' + place.name + '&rating=' + place.rating + ''
                  /*'photo_html_attributions' : place.photos[0].html_attributions,
                  'photo_photo_reference' : place.photos[0].photo_reference,
                  'photo_width' : place.photos[0].width,
                  'photo_height' : place.photos[0].height,*/
            });

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              //title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

      
       