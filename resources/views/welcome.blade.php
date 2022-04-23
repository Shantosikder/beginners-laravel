<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>This is home page::</h1>

       <ul>
           <li> <a href="{{url('about')}}">About Us</a> </li>
           <li> <a href="{{url('contact')}}">Contact Us</a> </li>
           <li> <a href="{{url('mypage')}}">myparsonal</a> </li>
       </ul>

    </body>
</html>
