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
    {{--<script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/emojione/2.2.7/assets/css/emojione.min.css"/>--}}
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
                <li class="active"><a href="{{url('')}}">Maps</a></li>
                <li><a href="{{url('table')}}">Manager location</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="row" style="margin-top: 70px">
    <div class="col-md-offset-2 col-md-8" style="height: 800px">
        @if(isset($validate))
            <div class="alert alert-danger">
                <?php print_r($validate->errors()->toArray()); ?>
            </div>
        @endif
        <div class="alert alert-success" id="emo">
            <h5>Khi chọn đỉnh và nhấn save, server sẽ tính toán khoảncách giữa đỉnh location 1 và location vừa chọn
                trong combobox
                <br><strong>NOTE: giữa khoản cách của 2 đỉnh bất kỳ, thì không được có bất kỳ đỉnh nào xen
                    giữa!. </strong>
            </h5>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Location 1</label>
                <p>
                    id: {{$location_1->id}}<br>
                    label: {{$location_1->label}}<br>
                    lat: {{$location_1->lat}}<br>
                    long: {{$location_1->long}}<br>
                    note: {{$location_1->note}}<br>

                </p>
            </div>
            <div class="form-group">
                <label for="">location 2</label>
                <select name="location_2" id="" class="form-control">
                    @foreach($locations as $item)
                        <option value="{{$item->id}}">id={{$item->id}};label={{$item->label}}
                            ;note={{$item->note}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Two way street</label>
                <div class="checkbox">
                    <label>
                        <input name="twoway" checked type="checkbox" value="1"> Two way street (IMPORTANT!)
                    </label>
                </div>
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

</body>
</html>
