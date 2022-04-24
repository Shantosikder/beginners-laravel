<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ThardControlle;



class SecondController extends Controller
{
    public function myparsonal()
    {
        return view('mypage');

        //dd(app());
    }

    //student store ///

    public function aboutstore(Request $request)
    {
        //dd($request->has('name'));

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        //dd($data);
        //return redirect('');

       //return redirect()->action([ThardControlle::class, 'test']);
        //return redirect()->away('https://www.google.com');

        return redirect()->back()->with('status', 'student updated!');
    }

   public function valildstore(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:55',
        'email' => 'required|unique:users|min:7',
        'password' => 'required|min:5|max:12',

        dd($request->all())
    ]);
 
    // The blog post is valid...
}

    // public function show(Request $request)
    // {
    //   return $request->session()->all();
 
        
    // }
}
