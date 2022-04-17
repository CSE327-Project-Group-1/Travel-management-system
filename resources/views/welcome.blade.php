<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
       <div class="menu-bar">
        <ul>
           <li><a><i class="fas fa-book"></i>Home</a>
           <div class="sub-menu-1">
                <ul>
                    <li><a href="offer.php"><i class="fas fa-money-check-alt"></i>Offers</a></li>
                    <li><a href="info.php"><i class="far fa-question-circle"></i>Info</a>
                </ul>
            </div>
           </li>

           <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        </div>




            
            <li>
            <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            

            <li><a href="place.php"><i class="fas fa-location-arrow"></i>Places</a></li>
            <li><a><i class="fas fa-book"></i>Know us</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="contact.php"><i class="fas fa-phone"></i>Contact</a></li>
                    <li><a href="mobile.php"><i class="fas fa-mobile"></i>Mobile app</a></li>
                    <li><a href="about_us.php"><i class="fas fa-bullseye"></i>About Us</a></li>

                </ul>
            </div>
            </li>


        </ul>

        </div>
        <div class="row">
           <div class="col">
               <h1>Tourist Guide</h1>
               <p>Come see the beautiful Bangladesh. A place of joy and happiness.River and hill sings as the nature flows through the vein of the country.Everybody exclaims in joy and wonder at the unforgettable and unimaginable beauty of this land. Onlookers are immersed in the fathomless depth of the ocean of beauty. </p>

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
               <h3>Sundarbans</h3>
               <p>Enjoy the salty mangroves</p>
           </div>
           <div class="card card4">
               <h3>Cox's Bazar</h3>
               <p>The longest sea beach is wating</p>
           </div>
            </div>

        </div>
    </body>
</html>
