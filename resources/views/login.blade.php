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
                <li class=""><a href="{{url('floyd')}}">FLOYD</a></li>
                <li class="active"><a href="{{url('')}}">Maps</a></li>
                <li><a href="{{url('table')}}">Manager location</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row" style="margin-top: 70px">
    <div class="col-md-offset-3 col-md-6" style="height: 800px">
        <form action="" method="post">
            <div class="form-group">
                <label for="">UserName</label>
                <input name="username" type="text" placeholder="username" id="mylat" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input name="password" type="password" placeholder="password" id="mylong" class="form-control">
            </div>
            <button class="btn btn-primary"> Login</button>
        </form>
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
