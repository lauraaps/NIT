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
  <title>About Us</title>
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
               <a class="nav-link" href="{{ route('homePage') }}">Logout</a>
            </li>
         </ul>
         <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
      </div>
   </div>
</nav>
<!-- Home Page -->
<div class="FirstImage-container">
<p class="homePageImageText">Investing in education today ensures a future filled with possibilities and achievements.</p>
<img src="homePage6.jpg" alt="" class="FirstImage">
</div>
<div class="text-HomePage">
<h3>Pathway to Universeties and Highter Education</h3>
</div>
<!-- events -->
<div class="events-cards">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="1 events.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carrer Fair</h5>
        <p class="card-text">An event where companies and organizations present their job and internship opportunities to students.
Activities: Company booths, networking sessions, distribution of promotional materials and resumes.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Click here to enjoy</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="2 events.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">industry Panels</h5>
        <class="card-text">TDiscussion panels with professionals from various industries to talk about trends, challenges, and opportunities.
        Activities: Panel discussions, audience Q&A, networking sessions0.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Click here to enjoy</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="3 events.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Job Shadowing Day</h5>
        <p class="card-text">A day where students accompany professionals at their workplaces to observe their daily routine.
        Activities: Workplace observation, Q&A sessions, reflective reports.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Click here to enjoy now</small>
      </div>
    </div>
  </div>
</div>
</div>
<div class="big-container">
<div class="logos-homePage">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="homePage2.png" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="homePage3.png" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="homePage4.png" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="homePage5.png" class="card-img-top" alt="...">
    </div>
  </div>
</div>
</div>
<div class="texthomePage">
<p>Unlock Your Future with Career Training College!
Are you ready to take the next step toward a fulfilling and successful career? At Career Trainning College , we are dedicated to helping you achieve your professional goals with our comprehensive and dynamic programs. Here’s why you should choose us:</p>
<p><b>1.</b> Diverse Course Offerings:
Whether you’re passionate about technology, healthcare, business, or the arts, we have a wide range of programs designed to equip you with the skills and knowledge you need to excel in your chosen field.</p>
<p>,<b>2.</b> Expert Instructors:
Learn from industry professionals who bring real-world experience into the classroom. Our instructors are dedicated to providing personalized guidance and support to help you succeed.</p>
<p><b>3.</b> Hands-On Training:
We believe in learning by doing. Our state-of-the-art facilities and practical training sessions ensure that you gain the hands-on experience employers are looking for.</p>
<p><b>4.</b> Flexible Learning Options:
With both online and on-campus classes, we offer flexible learning schedules that fit your busy life. Balance your studies with work or other commitments without compromising on quality.</p>
<p><b>5.</b> Career Services:
Our commitment to your success doesn’t end at graduation. Benefit from our robust career services, including resume workshops, interview preparation, and job placement assistance. We’re here to support you every step of the way.</p>
<p><b>6.</b> Network Opportunities:
Join a vibrant community of like-minded individuals and professionals. Take advantage of networking events, guest lectures, and internships that connect you with industry leaders and potential employers.</p>
</div>
</div>
<div class="testimonials">
   <div class="background-container">
    <img src="wallpaper2.jpg" alt="" class="testimonials-background">
    <p class="testimonials-text"><b>Testimonials</b></p>
    <div class="feedback">
    <div class="card-position">
     <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name: John Doe</h5>
        <p class="card-text">"I have had the pleasure of working with Laura for the past six months on our latest marketing campaign. She consistently brings innovative ideas to the table and demonstrates a deep understanding of digital marketing strategies. Laura's ability to analyze data and adjust our approach accordingly has been instrumental in driving the campaign's success. Her positive attitude and excellent communication skills make her a valuable team player. I look forward to seeing her continued growth and contributions."</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name: Jane Smith</h5>
        <p class="card-text">"Laura has been an integral part of our development team over the past year. Her proficiency in coding and problem-solving skills have significantly improved our project timelines. She approaches challenges with a calm and methodical mindset, which has been crucial in debugging and optimizing our code. Laura's eagerness to learn and adapt to new technologies is impressive, and she often takes the initiative to share her knowledge with the team. Her dedication and hard work have not gone unnoticed, and I highly recommend her for any future endeavors."</p>
    </div>
  </div>
  </div>
</div>
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