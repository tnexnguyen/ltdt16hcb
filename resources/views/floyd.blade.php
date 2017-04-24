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
            margin: 15px;
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

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

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
                <li class="active"><a href="{{url('')}}">Maps</a></li>
                <li><a href="{{url('table')}}">Manager location</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row">
    <div class="col-md-10" style="height: 800px">
        <div class="pac-card" id="pac-card">
        </div>
        <div id="map"></div>
        <div id="infowindow-content">
            <img src="" width="16" height="16" id="place-icon">
            <span id="place-name" class="title"></span><br>
            <span id="place-address"></span>
        </div>
    </div>
    <div class="col-md-2">
        <form action="" method="post">
            <div class="form-group">
                <label for="">From</label>
                <select name="" class="form-control" id="start">
                    <option value="">-----</option>
                    @foreach($vertexs as $k => $item)
                        <option value="{{$k}}">{{$item['id']}} - {{$item['note']}} - {{$item['label']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">To</label>
                <select name="" class="form-control" id="destination">
                    <option value="">-----</option>
                    @foreach($vertexs as $k => $item)
                        <option value="{{$k}}">{{$item['id']}} - {{$item['note']}} - {{$item['label']}}</option>
                    @endforeach
                </select>
            </div>

            <button type="button" class="btn btn-success btnsearch">Search</button>
        </form>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/lodash.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT45o6yraEoNjpCpcA8IpEcp3G7eLtsYQ&libraries=places&callback=initMap"
        async defer></script>
<script>
    var nameVer = <?php echo $vertexs ?>;
    var grarp = <?php echo $matrix; ?>;
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
                lat: 10.779179840134843,
                lng: 106.69230937957764
            },
            zoom: 15
        });

        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var markerStart = null;
        var markerEnd = null;

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);


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

        map.addListener('click', function (event) {
            addMarker(event.latLng, {});
        });

        function addMarker(location, option) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: {
                    url: '{{url('assets/iconmarker.png')}}', // url
                    scaledSize: new google.maps.Size(20, 25), // scaled size
                    origin: new google.maps.Point(0, 0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                },
                label: _.toString(option.id),
                draggable: true
            });
            var infowindow = new google.maps.InfoWindow({
                content: option.label + '<br/>' + option.note
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }


        _.map(nameVer, function (vertexes) {
            addMarker({lat: vertexes.lat, lng: vertexes.long}, vertexes);
            _.map(vertexes.vetexes, function (aVer) {
                var disCoordinates = [
                    new google.maps.LatLng(vertexes.lat, vertexes.long),
                    new google.maps.LatLng(aVer.lat, aVer.long)
                ];
                var flightPath = new google.maps.Polyline({
                    path: disCoordinates,
//                        editable: true,
                    strokeColor: '#673AB7',
                    strokeOpacity: 0.8,
                    strokeWeight: 1.5,
                    icons: [{
                        icon: {path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW},
                        offset: '100%'
                    }],
                    map: map
                });
            })
        })

        $('.btnsearch').click(function () {
            var shortPath = floyds(parseInt($('#start').val()), parseInt($('#destination').val()));
            console.log(shortPath);
            drawLine(shortPath);
        })
        $('#start').change(function (e) {
            if ($('#start').val() == '') {
                alert('Vui lòng chọn đỉnh bắt đầu!');
                return;
            }

            var index = $('#start').val();
            if (markerStart !== null)
                markerStart.setMap(null);
            markerStart = new google.maps.Marker({
                position: new google.maps.LatLng(nameVer[index].lat, nameVer[index].long),
                map: map,
                label: 'FROM',
                draggable: true
            });
        })

        $('#destination').change(function (e) {
            if ($('#destination').val() == '') {
                alert('Vui lòng chọn đích đến');
                return;
            }
            var index = $('#destination').val();
            if (markerEnd !== null)
                markerEnd.setMap(null);
            markerEnd = new google.maps.Marker({
                position: new google.maps.LatLng(nameVer[index].lat, nameVer[index].long),
                map: map,
                label: 'To',
                draggable: true
            });
        })


        var flightPath = null;

        function drawLine(shortPath) {

            indexPath = 1;
            if (flightPath !== null)
                flightPath.setMap(null);
            var shortPathLine = [];
            var setTimeDraw = setInterval(function () {
                try {
                    console.log(nameVer[shortPath[indexPath]]);
                    var coorA = nameVer[shortPath[indexPath - 1]];
                    var coorB = nameVer[shortPath[indexPath]];

                    if (flightPath !== null)
                        flightPath.setMap(null);
                    shortPathLine.push(new google.maps.LatLng(coorA.lat, coorA.long), new google.maps.LatLng(coorB.lat, coorB.long));
                    flightPath = new google.maps.Polyline({
                        path: shortPathLine,
                        editable: false,
                        strokeColor: '#FF0000',
                        strokeOpacity: 1.0,
                        strokeWeight: 4,
                        icons: [{
                            icon: {path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW},
                            offset: '100%'
                        }],
                        map: map
                    });
                    indexPath++;
                    if (indexPath === shortPath.length)
                        clearInterval(setTimeDraw);
                }
                catch (ex) {
                    clearInterval(setTimeDraw);
                    alert('khong tim thay duong di');
                }
            }, 1000);
        }

    }


    var numvers = _.size(nameVer); // số đỉnh
    var max = 2100000; // trọng số các cạnh lớn nhất

    function floyds(start, end) {
        var shortestLength = new Array(numvers);
        var pre = [];
        for (var i = 0; i < numvers; i++) {
            shortestLength[i] = new Array();
            pre[i] = new Array();
        }
        for (var i = 0; i < numvers; i++) {

            for (var j = 0; j < numvers; j++) {

                if (grarp[i][j]) {
                    shortestLength[i][j] = grarp[i][j];
                }
                else {
                    shortestLength[i][j] = max;
                }
                pre[i][j] = i;
            }
        }

        for (var k = 0; k < numvers; k++) {
            for (var i = 0; i < numvers; i++) {  // thay doi do dai duong di cua cac dinh
                for (var j = 0; j < numvers; j++) {
                    if (shortestLength[i][j] > shortestLength[i][k] + shortestLength[k][j]) {
                        shortestLength[i][j] = shortestLength[i][k] + shortestLength[k][j];
                        pre[i][j] = k;
                    }
                }
            }
        }

        var flagEnd = end; // cờ cho đỉnh cuối 1

        var shortestPath = [];
        shortestPath.push(end); // đưa đỉnh cuối vào mảng
        var ver;
        while (shortestPath.length < numvers && flagEnd != start) {

            var flag = pre[start][flagEnd];
            var min = shortestLength[flag][flagEnd];
            while (flag != flagEnd && flag != pre[flag][flagEnd]) {
                flag = pre[flag][flagEnd];
                if (min > shortestLength[flag][flagEnd]) {
                    min = shortestLength[flag][flagEnd];
                    ver = flag;
                }

            }
            flagEnd = flag;
            shortestPath.push(flag);
        }
        if (start == end) {
            console.log("Shortest path's length:", 0);
            console.log("Shortest path's:", start);
        } else if (start == pre[start][end]) {
            return [];
        } else {
            console.log("Shortest path's length:", shortestLength[start][end]);
            console.log("Shortest path's:", shortestPath);
        }
        return _.reverse(shortestPath);
    }


</script>


</body>
</html>
