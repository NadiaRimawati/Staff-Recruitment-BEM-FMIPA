<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- css custom --}}
        <link rel="stylesheet" href="style/template.css">
        <link rel="stylesheet" href="style/deocumentation.css">
        <link rel="shortcut icon" href="images/blue.png" type="image/x-icon">

        <title>@yield('judul')</title>
    </head>


<body>

<ul>
<li><a class="active" href="/home" style=""><img src="Images/1.png" alt="logo" width="32px" height="32px"></a></li>
<li><div class="logobem"><img src="Images/logo bem 1.png" alt="logo-bem" width="33px" height="33px"></div></li>
<li><div class="usk"><img src="Images/usk.png" alt="usk" width="49px" height="33px"></div></li>
  <li><a href="{{ URL('/information') }}">Information</a></li>
  <li><a href="{{ URL('/formregis') }}">Registration Form</a></li>
  <li><a href="{{ URL('/about') }}">About Us</a></li>
  <li><a href="{{ URL('/documentation') }}">Documentation</a></li>
 
  <li><a href="{{ URL('/login') }}">Log out</a></li>
</ul>

@yield('content')
</body>

</html>

