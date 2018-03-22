
@extends('welcome')
@section('title', 'categories')
 @section('aboutlib')


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
  @endsection

<style>
	#fh5co-about {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  background: #e6e6e6;
  width: 100%;
}
#fh5co-about .fh5co-2col {
  width: 50%;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-2col {
    width: 100%;
  }
}
#fh5co-about .fh5co-text {
  padding: 2em 6em;
  text-align: left;
  background: #130d08 url(../images/wood_1.png) repeat;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-text {
    padding: 1em;
  }
}
#fh5co-about .fh5co-text .btn {
  color: #fff;
}
#fh5co-about .fh5co-text .heading {
  margin-bottom: 30px;
  color: #fff;
  font-style: italic;
  font-weight: 300;
  position: relative;
  padding-bottom: 30px;
  text-align: center;
}
#fh5co-about .fh5co-text .heading:after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 40px;
  height: 2px;
  left: 50%;
  background: #fb6e14;
  margin-left: -20px;
}
#fh5co-about .fh5co-text p {
  line-height: 2;
  color: #a99c92;
}
#fh5co-about .fh5co-text p span.firstcharacter {
  float: left;
  color: #903;
  font-size: 75px;
  line-height: 60px;
  padding-top: 4px;
  padding-right: 10px;
  padding-left: 3px;
  font-style: italic;
  top: -20px;
  position: relative;
  color: #fff;
  font-family: "Playfair Display", serif;
}
#fh5co-about .fh5co-bg {
  background-repeat: no-repeat;
  background-size: cover;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-bg {
    width: 100%;
    min-height: 500px;
  }
}
@media screen and (max-width: 768px) {
  #fh5co-about .fh5co-bg {
    width: 100%;
    min-height: 300px;
  }
}

#fh5co-sayings {
  padding: 7em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings {
    padding: 5em 0;
  }
}
#fh5co-sayings .flexslider .slides li {
  font-size: 40px;
  line-height: 1.5;
}
#fh5co-sayings .flexslider .slides li blockquote {
  padding-left: 0;
  border-left: none;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote {
    padding: 0 20px;
  }
}
#fh5co-sayings .flexslider .slides li blockquote p {
  font-size: 40px;
  line-height: 1.5;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote p {
    font-size: 20px;
    line-height: 1.5;
  }
}
#fh5co-sayings .flexslider .slides li blockquote p.quote-author {
  font-size: 20px;
  color: gray;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote p.quote-author {
    font-size: 18px;
  }
}
#fh5co-sayings .flexslider .flex-control-paging {
  position: relative;
}
#fh5co-sayings .flexslider .flex-control-paging.flex-control-nav {
  bottom: -70px;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .flex-control-paging.flex-control-nav {
    bottom: -60px;
  }
}
#fh5co-sayings .flexslider .flex-control-paging li a {
  width: 14px;
  height: 14px;
  background: rgba(0, 0, 0, 0.2);
  box-shadow: none;
}
#fh5co-sayings .flexslider .flex-control-paging li a:active, #fh5co-sayings .flexslider .flex-control-paging li a:focus {
  outline: none;
}
#fh5co-sayings .flexslider .flex-control-paging li a.flex-active {
  top: 2px;
  position: relative;
  background: transparent;
  box-shadow: none;
  border: 2px solid #fb6e14;
}
	</style>
	</head>
	<body>
  @section('aboutus')
	<div id="fh5co-container">
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">About Us</h2>
				<p class="to-animate"><span class="firstcharacter">F</span>ar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
				<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>
		</div>




	</div>
  @endsection
  @section('scaboutus')
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	 @endsection