<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
       return view('contact');
    }

    public function mobile()
    {
       return view('mobile');
    }

    public function aboutus()
    {
       return view('aboutus');
    }

    public function places()
    {
       return view('places');
    }
}
