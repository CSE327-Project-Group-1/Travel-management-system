<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class CityController extends Controller
{
    function city()
    {
       return City::all();
    }
}
