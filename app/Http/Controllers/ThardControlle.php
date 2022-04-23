<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThardControlle extends Controller
{
    public function test()
    {
       return View::make('about', ['name' => 'shanto']);
    }
}
