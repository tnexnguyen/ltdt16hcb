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
                <li class="active"><a href="{{url('')}}">Maps</a></li>
                <li><a href="{{url('table')}}">Manager location</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row">
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
        <form action="" method="post">
            <div class="form-group">
                <label for="">Lat</label>
                <input name="lat" type="text" placeholder="lat" id="mylat" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Long</label>
                <input name="long" type="text" placeholder="long" id="mylong" class="form-control">
            </div>
            <div class="form-group">
                <label for="">label</label>
                <input name="label" type="text" placeholder="label" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">note</label>
                <input name="note" type="text" placeholder="note" id="" class="form-control">
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/lodash.js')}}"></script>
<script>
    var nameVer = <?php echo $vertexs ?>;
    var matrix = <?php echo $matrix; ?>;
    //prevent submint enter
    _.map(matrix, function(val){
       console.log(val);
    });
    console.log(matrix[0][0]);
</script>
</body>
</html>
