<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Tour;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $tours=Tour::all()->random(3);

        return view('home', ['tours' => $tours]);
    }
}
