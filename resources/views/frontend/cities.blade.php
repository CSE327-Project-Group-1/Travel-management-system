@extends('layouts.frontend')

@section('title')
home
@stop

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tourist Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <style>


    </style>

  <body>
<html>

   <head>
      <title>Home</title>
   </head>

   <body onload="myFunction()" style="margin:0">
     <div class="wrapper" style="min-height: 100vh">

       <div>
         <h4 class="subtitle">city</h4><hr class="divider">
       </div>

      <div id="loader"></div>

       <div class="feature-package  animate-bottom" id="myDiv" style="display: none">
        <div class="card">
                  <a href="#" style="text-decoration: none">
                 <div class="card-image"><img src="images/dhaka.jpg" height="120" width="240"></div>
                 <div class="container">
                   <h5><b>Dhaka</b></h5>
                 </div></a>
                 </div>
       </div>
     </div>

      <script>
        var myVar;
        function myFunction() {
          myVar = setTimeout(showPage, 500);
        }
          function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "flex";
        }
      </script>
   </body>
</html>

@stop

@section('scripts')

@stop