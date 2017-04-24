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
            font-size: 12px;
            margin: 15px;
            padding-top: 50px;
        }

        .starter-template {
            text-align: center;
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
                <li class=""><a href="{{url('')}}">FLOYD</a></li>
                <li class="active"><a href="{{url('show')}}">Maps</a></li>
                <li><a href="{{url('table')}}">Manager location</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row" style="margin-top: 70px">
    <div class="col-md-12" style="height: 800px">
        <table class="table ">
            <tr>
                <th>option</th>
                <th>id</th>
                <th>label</th>
                <th>lat</th>
                <th>long</th>
                <th>vertexes</th>
            </tr>
            @foreach($locations as $item)
                <tr>
                    <td>
                        <a href="{{url('del/' . $item->id)}}" class="btn btn-xs btn-danger">del</a>
                        <br>
                        <a class="btn btn-success btn-xs" href="{{url('createdis/' . $item->id)}}">add Distances</a>
                    </td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->label}}
                        <br>
                        <i>{{$item->note}}</i>
                    </td>
                    <td>{{$item->lat}}</td>
                    <td>{{$item->long}}</td>
                    <td>
                        @if(count($item->vetexes))
                            <table class="table table-striped">
                                <tr>
                                    <th>id</th>
                                    <th>label</th>
                                    <th>lat</th>
                                    <th>long</th>
                                    <th>distances(m)</th>
                                    <th>option</th>
                                </tr>
                                @foreach($item->vetexes as $v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->label}}</td>
                                        <td>{{$v->lat}}</td>
                                        <td>{{$v->long}}</td>
                                        <td>{{$v->pivot->distances}}</td>
                                        <td>
                                            <a href="{{url('deldistance/' .$v->pivot->id)}}" class="btn btn-xs btn-danger">del</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/lodash.js')}}"></script>

</body>
</html>
