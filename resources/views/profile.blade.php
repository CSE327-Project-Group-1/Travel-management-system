@extends('layouts.app')
<!--add title name -->
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
     <title>Document</title>
 </head>
 <body>
 <div class="card" style="width: 18rem;">
  <!--fetch the data from login details and show the name ,email in profile page-->
 @foreach ($profile as $n)
  <div class="card-body">

    <h5 class="card-title">{{$n -> name}}</h5>
    <h6 class="card-title">{{$n -> email}}</h6>
    <h6 class="card-title">{{$n -> created_at}}</h6>
  </div>
</div>
 </body>
 </html>
<div>

@endforeach
@stop

@section('scripts')

@stop