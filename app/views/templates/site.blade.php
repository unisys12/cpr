<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Corinth Alcorn Parks and Recreation')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src=""></script>
  </head>
<body class="background">
  	<header class="row">
      <section class="large-10 medium-10 columns home">
        <a href="{{ route('site.index') }}">
          <h1>Corinth/Alcorn Parks &amp; Recreation Department</h1>
        </a>
      </section>
  		  <figure class="large-2 medium-2 columns logo">
          <img src="{{ asset('imgs/park-logo-svg.svg') }}" alt="park logo">
        </figure>
  	</header>
    <nav class="row top-menu">
      <ul class="large-12 large-offset-3 small-centered">
          <li><a href="/facilities">Facilities</a></li>
          <li><a href="/sports">Sports</a></li>
          <li><a href="/staff">Staff</a></li>
          <li><a href="/contact">Contact Us</a></li>
      </ul>
    </nav>
    <br>
  	<main class="row">
  		<aside class="large-3 medium-3 columns">
  			<nav class="side-menu">
          <ul>
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="/announcements">Park Announcements</a></li>
            <li><a href="/schedules">Athletic Schedules</a></li>
            <li><a href="/sports/youth">Youth Sports</a></li>
            <li><a href="/sports/adult">Adult Sports</a></li>
            <li><a href="/facilities">Facilities</a></li>
            @yield('side-nav')
          </ul>
        </nav>
  		</aside>
      <section class="large-9 medium-9 columns">
        @yield('content')
      </section>
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