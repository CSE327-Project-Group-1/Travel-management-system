@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shohoj Vromon</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/welcome.css')}}">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <!--display the pictures in home page -->
    <div class="row">
        <div class="col">
            <h1>Shohoj Vromon</h1>
            <p style="color:black; background-color:white;">Come see the beautiful Bangladesh. A place of joy and happiness.River and hill sings as the nature flows
                through the vein of the country.Everybody exclaims in joy and wonder at the unforgettable and
                unimaginable beauty of this land. Onlookers are immersed in the fathomless depth of the ocean of beauty.
            </p>

        </div>
        <div class="col">
            <div class="card card1">
                <h3>Rangamati</h3>
                <p>rangamati is a beautiful place</p>
            </div>
            <div class="card card2">
                <h3>Kuakata</h3>
                <p>Watch the sun collab with the sea</p>
            </div>

            <div class="card card3">
                <h3>Cox's Bazar</h3>
                <p>The longest sea beach is wating</p>
            </div>

            <div class="card card4">
                <h3>Sundarbans</h3>
                <p>Enjoy the salty mangroves</p>
            </div>

        </div>

    </div>

</body>
</html>
@stop

@section('scripts')

@stop
