<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- css custom --}}
        <link rel="stylesheet" href="style/login.css">
        <link rel="shortcut icon" href="images/blue.png" type="image/x-icon">

        <title>Beranda</title>
    </head>
    <body>

    <div class="global-container">
        <div class="card login-form">
          <div class="card-body">
            <h1 class="card-title text-center";>HELLO!<br>LET’S JOIN US </h1>       
          </div>
        <div class="card-text">
        <form>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <div class="d-grid gap-2">
  <a class="btn btn-secondary" href="{{ URL('/home') }}" role="button">Login</a>
</div>
<div class="mt-3">
  <p>Don’t have an account? <a href="{{ URL('/regis') }}" class="text-decoration-none text-teal">Click  here</a></p>
</div>
</form>

  </body>
</html>