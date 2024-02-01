<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/home-styles.css') }}" rel="stylesheet">

    <title>Leads Management System</title>

  </head>

  <body>
    <div class="bgImage">
      <div class="container">
        <h1 class="heading">Leads Management System</h1>
            <div class="loginRegister text-center mt-5">
                <button class="btn btn-success"><a href="{{ route('login') }}">Login</a></button>
                <button class="btn btn-primary"><a href="{{ route('register') }}">Register</a></button>
            </div>
        
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>