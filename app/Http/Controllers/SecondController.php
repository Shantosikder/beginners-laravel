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
}