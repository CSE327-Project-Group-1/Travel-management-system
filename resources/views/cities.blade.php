@extends('layouts.navbar')

@section('title')
Cities
@stop
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- add css -->
	<link rel="stylesheet" href="{{ asset('css/cities.css')}}">
	<title>CSE327Project</title>
</head>
<body>

<table>
<div class="feature-package  animate-bottom" id="myDiv" style="display: none">
<div class="card">
<div class="container">
		<div class="card-image">
			<!--here a user can view the  list of cities which we get from our database -->
			<!--display image of cities  from databse -->
			@foreach ($cities as $c)
				<img src="{{ asset('images/'.$c -> city_image)}}" height="120" width="240">
		</div>
		 <!--display name of cities  from database -->
		<h5><b>{{$c -> city_name}}</b></h5>
		</div></a>
		</div>
</div>
</div>
</table>
</body>
</html>
@endforeach
@stop

@section('scripts')

@stop
