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

        .aboutus{
          border-radius: 1rem;
        }

        .title{
          padding-top: 1%;
          color: #02587B;
        }

        .isi{
          margin-top: 5%;
          color: #000000;
        }
    </style>
    
    <title>MYTODOLIST - About Us</title>
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
              <a class="nav-link" href="{{url('/dashboard/myaccount')}}">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/dashboard/aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid aboutus bg-secondary" style="max-width : 80%; margin-top: 100px; height: 450px;">
      <div class="row title">
        <h1>About Us</h1>

        <div class="row isi">
          <a>Welcome to mytodolist. <br>
            a modern solution for managing and optimizing your time! With our app, <br>
            you will discover a more efficient way to schedule, manage tasks, and plan your daily activities. <br>
            mytodolist is designed with a user-friendly interface, making it easy for everyone to utilize. Whether you are a busy professional, <br>
            a student in need of organizing your class schedule, or a homemaker looking to plan family activities, we have features tailored for you. <br><br>
            
            "mytodolist" was created in 2023 by a group of Bina Nusantara students.</a>
        </div>
      </div>
    </div>
  </body>
</html>