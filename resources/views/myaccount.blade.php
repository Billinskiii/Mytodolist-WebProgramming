<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
    
    <style>
      .navbar {
            font-family: 'Koulen';
            color: #FFFFFF;
        }
      body {
            font-family: 'Koulen';
            color: #FFFFFF;
        }
        .nav-item{
            font-size: 25px;
        }

        .myaccount{
          border-radius: 1rem;
        }

        .title{
          color: #02587B;
        }

        .profinfo{
          position: relative;
          justify-content: center;
          padding-left : 10%;
          border-radius: 1rem;
        }

        .col{
          padding: 8px 8px;
          color: #5CB3C2;
        }

        .isi{
          color: #02587B;
        }
    </style>
    
    <title>MYTODOLIST - My Account</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/tasks')}}">Tasks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/dashboard/myaccount')}}">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid myaccount bg-light" style="max-width : 80%; margin-top: 100px; height: 450px;">
        <div class="row title">
        <h1 style="margin-top: 1%">Profile</h1>
        <div class="container-fluid profinfo bg-light" style="margin-top: 100px; max-width: 80%">
            <div class="row">
              <div class="col">Name</div>
              <div class="col isi">Michael Willy</div>
            </div>
            <div class="row">
              <div class="col">Email</div>
              <div class="col isi">michael.willy@gmail.com</div>
            </div>
            <div class="row">
              <div class="col">Password</div>
              <div class="col isi">******</div>
            </div>
        </div>
        
      </div>
    </div>
  </body>
</html>