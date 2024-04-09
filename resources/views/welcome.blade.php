<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="remus,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="Dreambuzz">

  <title>Rizz.</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/portfolio_assets/assets/favicon/favicon.ico"/>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/animate-css/animates.css">
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/themify/css/themify-icons.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/magnific-popup/dist/magnific-popup.css">
   <link rel="stylesheet" href="portfolio_assets/assets/plugins/animated-text/animated-text.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="portfolio_assets/assets/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="portfolio_assets/assets/css/style.css">

</head>

<body>



<nav class="navbar navbar-expand-lg navigation header-padding site-header" id="navbar">
	<div class="container-fluid">
	  <a class="navbar-brand" href="#slider">
	  	<!-- <h2>Rubi.</h2> -->
	  	<img src="portfolio_assets/assets/images/123.png" alt="Rizz" class="img-fluid">
	  </a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span>
	  </button>
  
	  <div class="collapse navbar-collapse" id="navbarmain">
		<ul class="navbar-nav m-auto">
		  <li class="nav-item">
			<a class="nav-link smoth-scroll active" href="#slider">Home <span class="sr-only">(current)</span></a>
		  </li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#about">About</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#skills">Skills</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#education">Education</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#experience">Experience</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#team">Seminar</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#blog">Blogs</a></li>
		   <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li>
		</ul>

		<nav class="auth-nav">
    <div class="fa fa-angle-right ml-2">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('home') }}" class="btn btn-main btn-rounded smoth-scroll">Dashboard</a>
                @else
                    <div class="auth-buttons">
                        <a href="{{ route('login') }}" class="btn btn-main btn-rounded smoth-scroll small-btn">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-main btn-rounded smoth-scroll small-btn">Register</a>
                        @endif
                    </div>
                @endauth
            </div>
        @endif
    </div>
</nav>

<style>
/* Add this CSS to your existing stylesheet */
.auth-nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.auth-buttons {
    display: flex;
    gap: 10px; /* Adjust as needed */
}

.small-btn {
    padding: 5px 10px; /* Adjust padding as needed */
    font-size: 14px; /* Adjust font size as needed */
}

</style>

</nav>

<!-- Header Close --> 



<!-- Slider Start -->
<section class="slider" id="slider">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="banner-content text-center">
					 <h1 class="cd-headline clip is-full-width mb-4 ">
							This is My Porfolio.<br>
	                    <span class="cd-words-wrapper text-color">
	                        <b class="is-visible">Systems Analyst. </b>
	                        <b>Project Manager.</b>
	                    </span>
	                </h1>
					<p class="font-weight-normal lead mt-3 mb-4">I want to apply a job to your Company.</p>
					<ul class="list-inline socials-icon mb-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/rizgwapo143"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/Jose_Rizaldo447"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/inghug_riz47/"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
					
					<a href="#about" class="btn btn-main btn-rounded smoth-scroll">Learn More <i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="intro section" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pr-lg-5">
				<div class="intro-img">
					<img src="portfolio_assets/assets/images/me.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="intro-content mt-5 mt-lg-0">
					<h2 class="text-lg mb-4">Here are some small details about me: </h2> 
					<ul class="custom-list">
						@foreach ($about as $item)
						<li><h5>Name: </h5><h6>{{ $item->name }}</h6></li>
						<li><h5>From: </h5><h6>{{ $item->from }}</h6></li>
						<li><h5>Lives: </h5><h6>{{ $item->lives }}</h6></li>
						<li><h5>Age: </h5><h6>{{ $item->age }}</h6></li>
						<li><h5>Bio: </h5><h6>{{ $item->bio }}</h6></li>
						@endforeach
						
					</ul>
					<a href="#services" class="btn btn-main mt-4 btn-rounded smoth-scroll">Past Works<i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-bottom experience" id="skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2>Specialized Area</h2>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Analytical Skills </h4></div>
					<div class="progress">
						@foreach($skill as $item)
						<div class="progress-bar" data-percent="{{ $item->first }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Technical Skills</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="{{ $item->second }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Interpersonal Skills </h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="{{ $item->third }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Business Skills</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="{{ $item->forth }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">Computer Science</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="{{ $item->fifth }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">Project Management</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="{{ $item->sixth }}">
							<span class="percent-text"><span class="count">100</span>%</span>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section secondary-bg" id="education">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Education</h2>
					<p>This is my Educational History</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="fas fa-school mr-3"></i>
						@foreach($education as $item)
						<h4>Elementary Graduate at: </h4>
					</div>
					<p>{{ $item->elementary }}</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="fas fa-school mr-3"></i>
						<h4>High School Graduate at: </h4>
					</div>
					<p>{{ $item->highschool }}</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="fas fa-school mr-3"></i>
						<h4>Senior High School Graduate at: </h4>
					</div>
					<p>{{ $item->seniorhigh }}</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="fas fa-graduation-cap mr-3"></i>
						<h4>College Graduate at: </h4>
					</div>
					<p>{{ $item->college }}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- portfolio -->
<section class="section portfolio" id="experience">
  <div class="container">
  	 <div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="section-title text-center">
				<h2 class="mb-4 text-lg">Work Experience</h2>
			</div>
		</div>
	</div>

      <div class="col-12 text-center  mb-5">
        <div class="btn-group btn-group-toggle " data-toggle="buttons">
          <label class="btn active ">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn ">
            <input type="radio" name="shuffle-filter" value="design" />Networking
          </label>
          <label class="btn">
            <input type="radio" name="shuffle-filter" value="branding" />Hardware Repair
          </label>
          <label class="btn">
            <input type="radio" name="shuffle-filter" value="illustration" />Programming
          </label>
        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery">
      	<div class="col-lg-4 col-md-6 col-12 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
	      	<div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/a.webp" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="portfolio_assets/assets/images/a.webp" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>		
				</div>
			</div>
      	</div>

	      <div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/r.jpeg" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="porfolio_assets/assets/images/r.jpeg" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
				</div>
			</div>
	      </div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
       		<div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/b.jpg" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="portfolio_assets/assets/images/b.jpg" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
        	<div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/e.jpg" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="portfolio_assets/assets/images/e.jpg" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>	
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
       		 <div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/c.webp" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="portfolio_assets/assets/images/c.webp" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
				</div>
			</div>
      	</div>

      	<div class="col-lg-4 col-md-6 col-12  mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
       		<div class="portfolio-item mb-4">
				<img src="portfolio_assets/assets/images/d.jpg" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5>Minimal Portfolio Theme</h5>
					<a href="portfolio_assets/assets/images/d.jpg" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
				</div>
			</div>
      </div>
    </div>
  </div>
</section>
<!-- /portfolio -->
<section class="section experience" id="#">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2>Work Experience</h2>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="content mb-4">
					@foreach($experience as $item)
					<h4>{{ $item->firstExp }}</h4>
					<span class="text-color">Since[2018]</span>
					<p>Certified Approved.</p>
				</div>
				<div class="content mb-4">
					<h4>{{ $item->secondExp }}</h4>
					<span class="text-color">Since[2020]</span>
					<p>Certified Approved.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="content mb-4">
					<h4>{{ $item->thirdExp }}</h4>
					<span class="text-color">Since[2021-2022]</span>
					<p>Certified Approved.</p>
				</div>
				<div class="content mb-4">
					<h4>{{ $item->forthExp }}</h4>
					<span class="text-color">Since[2023-2024]</span>
					<p>Certified Approved.</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<section class="section bg-light" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Webinar/Seminar</h2>
					<p>My past Meetings: </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="portfolio_assets/assets/images/g.jpg" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						@foreach($seminar as $item)
						<h4 class="mb-4">{{ $item->firstMeeting }}</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						<h4 class="mb-4">{{ $item->firstMeeting }}</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="portfolio_assets/assets/images/k.jpg" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						<h4 class="mb-4">{{ $item->secondMeeting }}</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						<h4 class="mb-4">{{ $item->secondMeeting }}</h4>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="team-block">
					<img src="portfolio_assets/assets/images/j.png" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						<h4 class="mb-4">{{ $item->thirdMeeting }}</h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block">Seminar/Webinar at: </span>
						<h4 class="mb-4">{{ $item->thirdMeeting }}</h4>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta">
	<div class="container">
		<div class="cta-wrap box-shadow">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-8">
					<div class="cta-content">
						<span class="text-color">All in one Solution</span>
						<h2 class="text-lg">Have you find me compatible to your company?</h2>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="text-lg-right mt-5 mt-lg-0">
						<a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Hire me<i class="fa fa-angle-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Blogs</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 ">
				<div class="blog-item mb-5 mb-lg-0">
					<img src="portfolio_assets/assets/images/AAA.jpg" alt="" class="img-fluid">
					<div class="content mt-4">
						@foreach($blog as $item)
						<h4 class="mb-3 mt-2"><a href="blog-single.html">{{ $item->firstBlog }}</a></h4>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="blog-item mb-5 mb-lg-0">
					<img src="portfolio_assets/assets/images/BBB.jpg" alt="" class="img-fluid">
					<div class="content mt-4">
						<h4 class="mb-3"><a href="blog-single.html">{{ $item->secondBlog }}</a></h4>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="blog-item mb-5 mb-lg-0">
					<img src="portfolio_assets/assets/images/CCC.jpg" alt="" class="img-fluid">
					<div class="content mt-4">
						<h4 class="mb-3"><a href="blog-single.html">{{ $item->thirdBlog }}</a></h4>
					</div>
					@endforeach
				</div>
			</div>

		</div>
	</div>
</section>
<section class="section" id="contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg">Let's Get started</h2>
					<p>If your interested to my profession please leave a message:</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form class="contact__form form-row contact-form" method="post" action="#" id="contactForm">
					 <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Your Email</label>	
								<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Your Subject</label>	
								<input type="text" name="subject" id="subject"  class="form-control" placeholder="Enter Your Subject">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Your Message</label>	
								<textarea id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message"></textarea>	
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="d-lg-flex justify-content-between mt-4">
							<p>* Rest assured.I will not spam at your inbox.</p>
							<input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</section>

<section class="footer ">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-md-12">
				<div class="footer-widget widget mb-5 mb-lg-0">
					<h3 class="mb-3 text-white">Rizz.</h3>
					<p>Systems Analyst and Project Manager. </p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="footer-widget widget mb-5 mb-lg-0">
					<h6 class="mb-4">Get In touch</h6>
					<div class="footer-contact">
						@foreach($contact as $item)
						<h4 style="color: antiquewhite">Email:</h4>
						<h5>{{ $item->email }}</h5>
						<h4 style="color: antiquewhite">Phone: </h4>
						<h5>{{ $item->phone_no }}</h5>
						<h4 style="color: antiquewhite">Address: </h4>
						<h5>{{ $item->address }}</h5>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget widget">
					<h6 class="mb-4">Follow Me</h6>
					<h6 style="color: antiquewhite">Links: </h6>
					<ul class="list-inline footer-socials-icon mb-0">
						<li class="list-inline-item"><a href="https://www.facebook.com/rizgwapo143"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/Jose_Rizaldo447"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/inghug_riz47/"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-btm ">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<p class="mb-0"><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p>
				</div>
				<div class="col-lg-4">
					<form action="#" class="footer-subscribe mt-5 mt-lg-0">
						<input type="text" class="form-control" placeholder="Email Address">
						<i class="ti-email"></i>
					</form>
				</div>
			</div>
		</div>

		<div class="footer-top text-right">
			<a href="#slider" class="top-to-bototm smoth-scroll"><i class="ti-angle-up"></i></a>
		</div>
	</div>
</section>

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="portfolio_assets/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="portfolio_assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="portfolio_assets/assets/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Progress Bar -->
    <script src="portfolio_assets/assets/plugins/counto/apear.js"></script>
    <script src="portfolio_assets/assets/plugins/counto/counTo.js"></script>
    <script src="portfolio_assets/assets/plugins/animated-text/animated-text.js"></script>

    <script src="portfolio_assets/assets/plugins/counterup/waypoint.js"></script>
    <script src="portfolio_assets/assets/plugins/counterup/jquery.counterup.min.js"></script>
    <!--  Magnific Popup-->
    <script src="portfolio_assets/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="portfolio_assets/assets/plugins/shuffle/shuffle.min.js"></script>
  
    <script src="portfolio_assets/assets/plugins/jquery/ajax-contact.js"></script>
    <script src="portfolio_assets/assets/js/script.js"></script>

  </body>
  
</html>
   