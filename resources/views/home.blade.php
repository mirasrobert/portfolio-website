<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta
		name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"
	  />
		<meta name="description" content="Robert Miras Portfolio Website" />
		<meta name="keywords" content="robert miras, robert portfolio, miras, miras robert">
		<link rel="icon" href="img/logo.png"/>
	
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap"
      rel="stylesheet"
    />

		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Robert Miras</title>

    </head>
    <body>
		<section class="s2">
		  <div class="main-container">
			<div class="about-wrapper">
			  <div class="about-me">
				<img
				  id="profile_pic"
				  src="https://avatars.githubusercontent.com/u/47776945?v=4"
				/>
				<h4>More about me</h4>
	
				<p>
				  I build new projects just to tickle my brain and I spend a large
				  amount of my free time exploring the latest technology
				  advancements in the back-end web development world.
				</p>
	
				<p>
				  Apart from being a web developer, I enjoy most of my time being
				  outdoors. I was a choir member and I love to sing to relax my mind
				  especially when long facing computers.
				</p>
	
				<hr />
	
				<h4>TOP EXPERTISE</h4>
	
				<p>
				  Web developer with primary focus on PHP + Laravel:
				  <a class="resume-btn" target="_blank" href="resume.pdf">
					Download CV
					<i class="fas fa-download"></i>
				  </a>
				</p>
	
				<div id="skills">
				  <ul>
					<li>PHP</li>
					<li>Laravel</li>
					<li>JavaScript</li>
					<li>jQuery</li>
					<li>MySQL</li>
				  </ul>
	
				  <ul>
					<li>REST API</li>
					<li>GitHub</li>
					<li>Vue</li>
					<li>Heroku</li>
					<li>HTML/CSS</li>
				  </ul>
				</div>
			  </div>
	
			  <div class="social-links">
				<h1>Hi, I'm Robert Miras</h1>
	
				<img id="social_img" src="images/LINKEDIN_ROBERT.PNG" />
				<h3>Find me on LinkedIn & GitHub</h3>
	
				<div>
				  <a
					class="social_link_icon"
					target="_blank"
					href="https://www.linkedin.com/in/robert-miras/"
					><i class="social_icons fab fa-linkedin-in fa-2x"></i
				  ></a>
				  <a
					class="social_link_icon"
					target="_blank"
					href="https://github.com/mirasrobert"
				  >
					<i class="social_icons fab fa-github fa-2x"></i>
				  </a>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	
		<section class="s1">
		  <div class="main-container">
			<h3 style="text-align: center; margin: 50px 0">
			  Some of my personal & official projects
			</h3>
	
			<div class="post-wrapper">
			  <div>
				<div class="post">
				  <img class="thumbnail" src="images/github_finder.PNG" />
				  <div class="post-preview">
					<h6 class="post-title">GitHub Finder</h6>
					<p class="post-intro">
					  Designed & built with vue js and GitHub REST API
					</p>
					<ul class="technologies">
					  <li>VueJS</li>
					  <li>GitHuB API</li>
					  <li>Bootstrap</li>
					</ul>
					<div class="post-footer">
					  <a
						target="_blank"
						href="https://github-finder-vue.herokuapp.com/"
					  >
						<i class="fas fa-laptop-code"></i>
						Demo Project
					  </a>
					  <a
						target="_blank"
						href="https://github.com/mirasrobert/github-finder"
						><i class="fab fa-github"></i> Source Code</a
					  >
					</div>
				  </div>
				</div>
			  </div>
	
			  <div>
				<div class="post">
				  <img class="thumbnail" src="images/fabrique_screenshot.PNG" />
				  <div class="post-preview">
					<h6 class="post-title">Online Store - Fabrique</h6>
					<p class="post-intro">
					  Online store with paypal payments intergration and guest user
					  shopping.
					</p>
					<ul class="technologies">
					  <li>PHP</li>
					  <li>Laravel</li>
					  <li>Bootstrap</li>
					</ul>
					<div class="post-footer">
					  <a target="_blank" href="http://fabrique.epizy.com/">
						<i class="fas fa-laptop-code"></i>
						Demo Project
					  </a>
					  <a
						target="_blank"
						href="https://github.com/mirasrobert/laravel8-ecommerce"
						><i class="fab fa-github"></i> Source Code</a
					  >
					</div>
				  </div>
				</div>
			  </div>
	
			  <div>
				<div class="post">
				  <img
					class="thumbnail"
					src="images/covid_tracker_screenshot.PNG"
				  />
				  <div class="post-preview">
					<h6 class="post-title">Covid Tracker Website</h6>
					<p class="post-intro">
					  Website guide for covid-19, Mini-Dashboard Web for Tracking
					  Covid-19 Cases
					</p>
					<ul class="technologies">
					  <li>JavaScript</li>
					  <li>API</li>
					  <li>Bootstrap</li>
					</ul>
					<div class="post-footer">
					  <a
						target="_blank"
						href="https://mirasrobert.github.io/covid_tracker/"
					  >
						<i class="fas fa-laptop-code"></i>
						Demo Project
					  </a>
					  <a
						target="_blank"
						href="https://github.com/mirasrobert/covid_tracker"
						><i class="fab fa-github"></i> Source Code</a
					  >
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	
		<section class="s2">
		  <div class="main-container">
			<a href=""></a>
			<h3 style="text-align: center">Get In Touch</h3>
	
			<form id="contact-form" method="POST" action="{{ route('contact') }}">
				@csrf
			  <a name="contact"></a>
	
			  <label>Your Name</label>
			  <input class="input-field" type="text" id="name" name="name" />
	
			  <label>Subject</label>
			  <input class="input-field" type="text" id="subject" name="subject" />
	
			  <label>Your Email</label>
			  <input class="input-field" type="text" id="email" name="email" />
	
			  <label>Message</label>
			  <textarea class="input-field" id="message" name="message"></textarea>
	
			  <input id="submit-btn" type="submit" value="Send" />
			</form>
		  </div>
		</section>
	
		<script
		  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		  crossorigin="anonymous"
		  referrerpolicy="no-referrer"
		></script>
	
		<script
		  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
		  integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
		  crossorigin="anonymous"
		  referrerpolicy="no-referrer"
		></script>

		@include('sweetalert::alert')
	
		<script>
		  $(document).ready(function () {
			$('#contact-form').validate({
			  errorElement: 'label',
			  rules: {
				name: 'required',
				subject: 'required',
				message: 'required',
				email: {
				  required: true,
				  email: true,
				},
			  },
			});
		  });
		</script>
	  </body>
</html>
