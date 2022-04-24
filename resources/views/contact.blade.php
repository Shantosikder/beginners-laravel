<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel Form</title>

  </head>
  <body>

    <div class="row card">
      <div class="card ml-4 col-lg-6">
     
        <h2>Contact Form:</h2>
           <div class="mb-3">
             <form action="{{url('store')}}" method="post">

              @csrf
 <div>
      <label for="exampleInputEmail1" class="form-label">Full Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" >

@error('name')
    <strong class="text-danger">{{ $message }}</strong>
@enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{old('email')}}" >

@error('email')
    <strong class="text-danger">{{ $message }}</strong>
@enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}"  name="password">

@error('password')
    <strong class="text-danger">{{ $message }}</strong>
@enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
      </div>
    </div>
  </body>
</html>