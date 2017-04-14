<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}/" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

        #map {
            height: 600px;
        }

        /* Optional: Makes the sample page fill the window. */

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        /*#infowindow-content .title {*/
        /*font-weight: bold;*/
        /*}*/

        /*#infowindow-content {*/
        /*display: none;*/
        /*}*/

        /*#map #infowindow-content {*/
        /*display: inline;*/
        /*}*/

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        .card img {
            width: 16px;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Get Locations google maps</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Get Locations google maps LTDT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row" style="margin-top: 70px">
    <div class="col-md-10" style="height: 800px">
        <div class="pac-card" id="pac-card">
            <div>
                <div id="title">
                    Autocomplete search
                </div>
                <div id="type-selector" class="pac-controls hidden">
                    <input type="radio" name="type" id="changetype-all" checked="checked">
                    <label for="changetype-all">All</label>

                    <input type="radio" name="type" id="changetype-establishment">
                    <label for="changetype-establishment">Establishments</label>

                    <input type="radio" name="type" id="changetype-address">
                    <label for="changetype-address">Addresses</label>

                    <input type="radio" name="type" id="changetype-geocode">
                    <label for="changetype-geocode">Geocodes</label>
                </div>
                <div id="strict-bounds-selector" class="pac-controls hidden">
                    <input type="checkbox" id="use-strict-bounds" value="">
                    <label for="use-strict-bounds">Strict Bounds</label>
                </div>
            </div>
            <div id="pac-container" style="padding-top: 15px;">
                <input id="pac-input" type="text" placeholder="Enter a location">
            </div>
        </div>
        <div id="map"></div>
        <div id="infowindow-content">
            <img src="" width="16" height="16" id="place-icon">
            <span id="place-name" class="title"></span><br>
            <span id="place-address"></span>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Lat</label>
            <input type="text" placeholder="lat" id="mylat" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Long</label>
            <input type="text" placeholder="long" id="mylong" class="form-control">
        </div>
        <button class="btn btn-success">Save</button>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/lodash.js')}}"></script>
<script>
    var json = <?php echo $locations; ?>;
    //prevent submint enter
    $('#createsite').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
        }
    })


    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var marker;

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 10.765857581097057,
                lng: 106.68179512023926
            },
            zoom: 15
        });

        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            anchorPoint: new google.maps.Point(0, -29)
        });
        //show all marker
        showAllMarker();

        marker.addListener('dragend', dragMarker);
        map.addListener('click', function (event) {
            addMarker(event.latLng, {});
        });


        function dragMarker() {
            var lat = this.position.lat();
            var lng = this.position.lng();
            console.log(lat + ',' + lng);
            $('#mylat').val(lat);
            $('#mylong').val(lng);
        }


        function showAllMarker() {
//            var flightPlanCoordinates = [
//                new google.maps.LatLng(10.76800773240284, 106.69552803039551),
//                new google.maps.LatLng(10.769651955400242, 106.70578479766846),
//                new google.maps.LatLng(10.770748099079162, 106.70628905296326),
//                new google.maps.LatLng(10.780623752104708, 106.70788764953613),
//            ];
//            var flightPath = new google.maps.Polyline({
//                path: flightPlanCoordinates,
//                editable: true,
//                strokeColor: '#FF0000',
//                strokeOpacity: 1.0,
//                strokeWeight: 2,
//                map: map
//            });
            marker.setMap(null);
            _.map(json, function (value) {
                addMarker({lat: value.lat, lng: value.long}, value);
            })

//            console.log(flightPath.getPath());

        }


        function addMarker(location, option) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                label: _.toString(option.id),
                draggable: true
            });
            var lat = marker.position.lat();
            var lng = marker.position.lng();
            $('#mylat').val(lat);
            $('#mylong').val(lng);
            marker.addListener('dragend', dragMarker);
            var infowindow = new google.maps.InfoWindow({
                content: option.note
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }


        autocomplete.addListener('place_changed', function () {
            marker.setVisible(false);

            var place = autocomplete.getPlace();

            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var lat = marker.position.lat();
            var lng = marker.position.lng();
            $('#sitelocation').val(lat + ',' + lng);
            console.log(lat + ',' + lng);
            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindowContent.children['place-icon'].src = place.icon;
            infowindowContent.children['place-name'].textContent = place.name;
            infowindowContent.children['place-address'].textContent = address;
            infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function () {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function () {
                console.log('Checkbox clicked! New state=' + this.checked);
                autocomplete.setOptions({
                    strictBounds: this.checked
                });
            });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT45o6yraEoNjpCpcA8IpEcp3G7eLtsYQ&libraries=places&callback=initMap"
        async defer></script>
</body>
</html>
