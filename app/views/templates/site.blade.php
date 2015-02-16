<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Corinth Alcorn Parks and Recreation')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body class="background">
    	<header class="header-main">
            <section class="header-name">
                <a href="{{ route('site.index') }}">
                  <h1>Corinth/Alcorn Parks &amp; Recreation Department</h1>
                </a>
            </section>
            <section class="header-logo">
                <figure class="logo">
                    <img src="{{ asset('imgs/park-logo-svg.svg') }}" alt="park logo">
                </figure>
            </section>
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
                    <li><a href="/news">Park Announcements</a></li>
                    <li><a href="/schedules">Athletic Schedules</a></li>
                    <li><a href="/sports/youth">Youth Sports</a></li>
                    <li><a href="/sports/adult">Adult Sports</a></li>
                    <li><a href="/facilities">Facilities</a></li>
                    @foreach (Page::all() as $page)
                    <li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </aside>
        <article class="large-9 medium-9 columns">
            @yield('content')
        </article>
    </main>
    	<nav class="row">
            <div class="large-4 columns">
                <header class="blue-button">
                    <a href="/news"><h5>News &amp; Events</h5></a>
                </header>
                <p>Get the latest news, game cancellations and event info ... Click here</p>
            </div>
            <div class="large-4 columns">
                <header class="green-button">
                    <a href="/facilities"><h5>Parks &amp; Facilites</h5></a>
                </header>
                <p>To see more information on each of our facilities... Click Here</p>
            </div>
            <div class="large-4 columns">
                <header class="brown-button">
                    <a href="/registration"><h5>Registration Information</h5></a>
                </header>
                <p>To access the forms nessecary to sign-up for any of our activities or rent any facility... Click Here</p>
            </div>
    	</nav>
    	<footer class="row">
    		<section class="large-6 columns">
    			<h3>Contact Us</h3>
    			<ul>
          			<li>Office Hours: Monday - Friday 8am - 5pm</li>
          			<li>Phone: <a href="tel://(662)286-3067" class="tele">(662)286-3067</a></li>
          			<li>Fax: (662)286-1310</li>
          			<li>Mailing Address: P.O. Box 1372, Corinth, MS 38835</li>
          			<li>Shipping Address: 309 S. Parkway St, Corinth, MS 38834</li>
          		</ul>
    		</section>
            <section class="large-3 columns">
                <h3>Weather Conditions</h3>
                <span style="display: block !important; width: 180px; text-align: center; font-family: sans-serif; font-size: 12px;"><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:38834.1.99999&bannertypeclick=wu_blueglass" title="Corinth, Mississippi Weather Forecast" target="_blank"><img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_blueglass&pwscode=KMSCORIN4&ForcedCity=Corinth&ForcedState=MS&zip=38834&language=EN" alt="Find more about Weather in Corinth, MS" width="160" /></a><br><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:38834.1.99999&bannertypeclick=wu_blueglass" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" target="_blank">Click for weather forecast</a></span>
            </section>
    		<section class="large-3 columns">
    			<header>
    				<h3>Social Media</h3>
    			</header>
    			<section>
                    <span>
                        <a href="https://www.facebook.com/corinthalcornparks">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                            <g id="icomoon-ignore">
                            </g>
                            <path d="M26.667 0h-21.333c-2.933 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334l21.333-0c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM27.206 16h-5.206v14h-6v-14h-2.891v-4.58h2.891v-2.975c0-4.042 1.744-6.445 6.496-6.445h5.476v4.955h-4.473c-1.328-0.002-1.492 0.692-1.492 1.985l-0.007 2.48h6l-0.794 4.58z" fill="#000000" class="facebook-icon"></path>
                            </svg>
                        </a>
                    </span>
        				 <a href="https://twitter.com/corinthparks">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                            <g id="icomoon-ignore">
                            </g>
                            <path d="M26.667 0h-21.333c-2.934 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334h21.333c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM26.189 10.682c0.010 0.229 0.015 0.46 0.015 0.692 0 7.069-5.288 15.221-14.958 15.221-2.969 0-5.732-0.886-8.059-2.404 0.411 0.050 0.83 0.075 1.254 0.075 2.463 0 4.73-0.855 6.529-2.29-2.3-0.043-4.242-1.59-4.911-3.715 0.321 0.063 0.65 0.096 0.989 0.096 0.479 0 0.944-0.066 1.385-0.188-2.405-0.492-4.217-2.654-4.217-5.245 0-0.023 0-0.045 0-0.067 0.709 0.401 1.519 0.641 2.381 0.669-1.411-0.959-2.339-2.597-2.339-4.453 0-0.98 0.259-1.899 0.712-2.689 2.593 3.237 6.467 5.366 10.836 5.589-0.090-0.392-0.136-0.8-0.136-1.219 0-2.954 2.354-5.349 5.257-5.349 1.512 0 2.879 0.65 3.838 1.689 1.198-0.24 2.323-0.685 3.338-1.298-0.393 1.249-1.226 2.298-2.311 2.96 1.063-0.129 2.077-0.417 3.019-0.842-0.705 1.073-1.596 2.015-2.623 2.769z" fill="#000000" class="twitter-icon"></path>
                            </svg> 
                         </a>                       
                     </span>
    			</section>
    		</section>
    	</footer>
    </body>
</html>