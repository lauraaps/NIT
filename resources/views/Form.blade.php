<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="{{ asset('styleSheet.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('scripts.js') }}"></script>
  <title>Form</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
   <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('AboutUsPage') }}?api_token={{ $api_token }}" alt="logo"> 
         <img src="Carrer Training School.png" alt="logo" class="LogoSize">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{ route('FormPage') }}?api_token={{ $api_token }}">New User</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('AboutUsPage') }}?api_token={{ $api_token }}">About Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('users.index') }}?api_token={{ $api_token }}">Users</a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="{{ route('logout') }}?api_token={{ $api_token }}">Logout</a>
            </li>
         </ul>
         <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
      </div>
   </div>
</nav>
<div class="container-form">
<div class="container-form2">
<h3 class="onlineform">Online Form</h3>
<!-- PHP -->
<form method="POST" action='/users/store'>
@csrf 
<input type="hidden" value="{{$api_token}}" name = "api_token">
<div class="mb-3">
    <label for="exampleInputFirstName" class="form-label">First Name</label>
    <input name ="first_name" type="text" class="form-control" id="exampleInputFirstName">
</div>
<div class="mb-3">
    <label for="exampleInputLastName" class="form-label">Last Name</label>
    <input name ="last_name" type="text" class="form-control" id="exampleInputLastName">
</div>
<div class="mb-3">
    <label for="exampleInputAge" class="form-label">Age</label>
    <input name ="age" type="number" class="form-control" id="exampleInputAge">
</div>
<div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input name = "phone" type="phone" class="form-control" id="exampleInputPhone">
</div>
<div class="mb-3">
    <label for="exampleInputAddress" class="form-label">Address</label>
    <input name = "address" type="address" class="form-control" id="exampleInputAddress">
</div>
<div class="mb-3">
    <label for="exampleInputProfessionalSummary" class="form-label">Professional Summary</label>
    <textarea name="professional_summary" class="form-control" id="exampleInputProfessionalSummary" rows="4"></textarea>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
</div>
<input type="hidden" value="{{$api_token}}" name="api_token">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<!-- new footer -->
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <div class="logo-position">
       <h5 class="card-title"><img src="Carrer Training School.png" class="LogoSize"></h5>
       </div>
    <ul class="social-icons">
    <i class="fab fa-instagram"></i>
    <i class="fas fa-envelope"></i>
    <i class="fab fa-facebook-f"></i>
    <i class="fab fa-linkedin-in"></i>
</ul>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <ul class="dotted-list">
    <li><a href="{{route('users.index')}}?api_token={{$api_token}}" type="button" class="btn btn-link">Users</a></li>
    <li><a href="{{route('AboutUsPage')}}?api_token={{$api_token}}" type="button" class="btn btn-link">About Us</a></li>
    <li><a href="{{route('FormPage')}}?api_token={{$api_token}}" type="button" class="btn btn-link">New User</a></li>
    <li><a href="{{route('homePage')}}?api_token={{$api_token}}" type="button" class="btn btn-link">Logout</a></li>
</ul>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <ul class="info-list">
    <li>+ 0451 984 760</li>
    <li>251-255 Stirling Street, Perth WA 60000</li>
    <li>CarrerTraining@gmai;.com.au</li>
    <li>monday to friday - 6am until 4pm</li>
</ul>
    </div>
  </div>
</div>
</div>
<div class="card-credits">
    <div class="creditBox">
      <div class="card-header">
        <p class="footer-text">Carrer Training Colege - RTO Number: 411443 | CRICOS Provider Number: 03420M | ABN:79 168
          536 016</p>
        <p class="footer-text">Carrer Training College @ All Rights Reserved -2024 - The website is designed and
          developed by Laura Abrao</p>
      </div>
</div>  
</body>
</html>
