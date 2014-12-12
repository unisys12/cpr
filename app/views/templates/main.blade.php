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
		<section class="large-2 small-centered columns">
			<!-- <div class="clearfix"> -->
				<!-- <span class="left heading"> --><img src="imgs/park-logo.jpg" alt="logo">
    </section>
				<!-- <span class="right heading"> -->
    <section class="large-6 columns">
      <h4>Corinth/Alcorn Parks &amp; Recreation Department</h4>
    </section>
		    @include('partials.conditions')
      <!-- </div> -->
    </section>
  	</header>
  	<main class="row">
  		<aside class="large-3 columns">
  			<nav>
  				<ul>
  					<li><a href="#">Home</a></li>
  					<li><a href="#">Park Announcements</a></li>
  					<li><a href="#">Athletic Schedules</a></li>
  					<li><a href="#">Youth Sports</a></li>
  					<li><a href="#">Adult SPorts</a></li>
  					<li><a href="#">Facilities &amp; Locations</a></li>
  				</ul>
  			</nav>
  		</aside>
  		<section class="carosale large-9 columns">
  			<img src="imgs/slider05.jpg" alt="Park Header Image">
  		</section>
  		<article class="large-9 columns">
  			<p>Crossroads Regional Park, southeast of downtown Corinth, Mississippi, offers 38 acres of opportunities for outdoor recreation. Facilities include a 1-mile paved walking or jogging trail, a soccer field, 10 tennis courts, 6 fields for baseball or softball, a 9 hole disc golf course and 3 picnic pavilions. A major attraction is the Crossroads Fun Station mega playground.</p>
  		</article>
  	</main>
  	<nav class="row">
  			
  			<aside class="large-4 columns">
          <a href="#">
	  				<header class="blue-button">
		  				<h3>News &amp; Events</h3>
		  			</header>
          </a>
		  		<p>Get the latest news, game cancellations and event info ... Click here</p>
	  		</aside>
  			
  			
  			<aside class="large-4 columns">
          <a href="#">
	  				<header class="green-button">
		  				<h3>Parks &amp; Facilites</h3>
		  			</header>
          </a>
	  			<p>To see more information on each of our facilities... Click Here</p>
  			</aside>
  			
  			<aside class="large-4 columns">
          <a href="#">
	  				<header class="brown-button">
		  				<h3>Registration Forms</h3>
		  			</header>
          </a>
	  			<p>To access the forms nessecary to sign-up for any of our activities or rent any facility... Click Here</p>
  			</aside>

			<!-- <a href="#" class="brown-button">
				<h5>Registration Forms</h5>
				<p>To access the forms nessecary to sign-up for any of our activities or rent any facility... Click Here</p>
			</a> -->

  		</nav>
  	<footer class="row">
  		<section class="large-8 columns">
  			<h3>Contact Us</h3>
  			<ul>
	  			<li>Office Hours: Monday - Friday 8am - 5pm</li>
	  			<li>Phone: <a href="tel://(662)286-3067">(662)286-3067</a></li>
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