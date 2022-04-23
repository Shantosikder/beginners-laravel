<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function about()
    {
        //dd(app());
        return view('about');
    }

     public function contact()
    {
        //dd(app());
        return view('contact');
    }
}