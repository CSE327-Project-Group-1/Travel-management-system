<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class CityController extends Controller
{
    public function cities()
    {
       $cities = City::all();
       return view('cities', ['cities'=> $cities]);
    }
}
