<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Corinth Alcorn Parks and Recreation')</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style.css.map" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/weather-icons/1.2/css/weather-icons.min.css">
    <script src=""></script>
  </head>
<body class="background">
  	<header class="row">
  		<section class="large-2 small-centered large-uncentered columns">
  		  <img src="imgs/park-logo-svg.svg" alt="logo">
      </section>
      <section class="large-6 columns">
        <h4>Corinth/Alcorn Parks &amp; Recreation Department</h4>
      </section>
  		  @include('partials.conditions')
  	</header>
    <nav class="row top-menu">
      <ul class="large-12 large-offset-3 small-centered">
          <li><a href="#">Facilities</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Staff</a></li>
          <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <br>
  	<main class="row">
  		<aside class="large-3 columns">
  			<nav class="side-menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Park Announcements</a></li>
            <li><a href="#">Athletic Schedules</a></li>
            <li><a href="#">Youth Sports</a></li>
            <li><a href="#">Adult Sports</a></li>
            <li><a href="#">Facilities &amp; Locations</a></li>
            @yield('side-nav')
          </ul>
        </nav>
  		</aside>
  		@yield('content')
  	</main>
  	<nav class="row">
  			<div class="large-4 columns">
          <header class="blue-button">
            <a href="#"><h5>News &amp; Events</h5></a>
          </header>
          <p>Get the latest news, game cancellations and event info ... Click here</p>
        </div>
        <div class="large-4 columns">
          <header class="green-button">
            <a href="#"><h5>Parks &amp; Facilites</h5></a>
          </header>
          <p>To see more information on each of our facilities... Click Here</p>
        </div>
  			<div class="large-4 columns">
          <header class="brown-button">
            <a href="#"><h5>Registration Forms</h5></a>
          </header>
          <p>To access the forms nessecary to sign-up for any of our activities or rent any facility... Click Here</p>
        </div>
  	</nav>
  	<footer class="row">
  		<section class="large-8 columns">
  			<h3>Contact Us</h3>
  			<ul>
	  			<li>Office Hours: Monday - Friday 8am - 5pm</li>
	  			<li>Phone: <a href="tel://(662)286-3067" class="tele">(662)286-3067</a></li>
	  			<li>Fax: (662)286-1310</li>
	  			<li>Mailing Address: P.O. Box 1372, Corinth, MS 38835</li>
	  			<li>Shipping Address: 309 S. Parkway St, Corinth, MS 38834</li>
	  		</ul>
  		</section>
  		<section class="large-4 columns">
  			<header>
  				<h3>Social Media</h3>
  			</header>
  			<section>
  				FaceBook Icon - Twitter Icon
  			</section>
  		</section>
  	</footer>
  </body>
</html>