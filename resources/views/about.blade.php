@unless (Auth::check())
    Login
    @else
   You are not signed in
@endunless
<br>

{{url()->current();}}
<br>
{{url()->full();}}
<br>
{{url()->previous();}}
<br>
{{URL::current();}}

<br>
<a href="{{url('/')}}">Back Home</a>