<p>contact page</p>
<a href="{{url('/')}}">Back Home</a>

<form action="{{route('about.store')}}" method="post"><br><br>

	@csrf

	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!-- 
	 //<input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
	<label for="">Name::</label>
	<input type="text" name="name" placeholder="Enter your name"><br><br>
	<label for="">Email::</label>
	<input type="text" name="email" placeholder="Enter your email"><br><br>
	<button type="submit">SUBMIT</button>
	
</form>