<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lobster|Playfair+Display" rel="stylesheet">
		<!--<link rel="script" herf="./assets/css/jquery-validate.js"> -->
		<!-- Custom CSS -->
		<link rel="stylesheet" href="./assets/css/style.css">
		<!-- jQuery (required for Bootstap's JS plugins)-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="assets/js/jquery-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<title>Digital Lotus</title>
	</head>

	<body>
		<!-- adding nav bar-->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">DigitalLotus</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#myPage">HOME</a></li>
					<li><a href="#about me">ABOUT ME</a></li>
					<li><a href="#portfolio">PORTFOLIO</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
			</div>
		</nav>
		<!--home page-->
		<section id="myPage">
			<div class="container-fluid">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="assets/images/pwp03.jpg" alt="img0">
						</div>

						<div class="item">
							<img src="assets/images/pwp06.jpg" alt="img1">
						</div>

						<div class="item">
							<img src="assets/images/pwp05.jpg" alt="img2">
						</div>

						<!--head tag in the carousel-->
						<div class="carousel-text">
							<h1>DANNIELLE BOJORQUEZ</h1>
							<p class="carouselp"><em>Web Developer</em></p>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>

		<!-- section about me-->
		<section id="about me">
			<div class="container-fluid text-center">
				<div class="title">
					<h2 class="main">About Me</h2>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<img src="assets/images/standing.jpg" alt="Random Name" class="img-responsive">
					</div>
					<div class="col-sm-7">
						<p> Hello, I am Dannielle,<br>Web Development is my way of helping to build your website so that it is functional and user friendly but attractive at the same time. I add a personal touch to your product and make sure that is eye-catching and easy to use. I aim to bring across your message and identity in the most creative way. </p>
					</div>
				</div>
			</div>
		</section>

		<!-- portfolio section-->
		<section id="portfolio">
		<div class="panel panel-default">
			<div class="container-fluid text-center">
				<div class="portfolio">
					<h2 class="main">Portfolio</h2>
					<div class="row">
						<div class="col-md-3">
							<img src="assets/images/foodquisition.jpg" alt="foodquisition" class="img-responsive thumbnail">
						</div>
						<div class="col-md-9 text-left">
							<h3>Foodquisition</h3>
							<p> A website that tells Albuquerque residents of the inspection results at their<br>
								favorite restaurants allowing them to make better informed dining choices</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<img src="assets/images/pwp02.jpg" alt="img filler2" class="img-responsive thumbnail">
						</div>
						<div class="col-md-9 text-right col-md-pull-3">
							<h3>Project Title</h3>
							<p>statement about project here and maybe a little about what it does. This is filler text waiting for fun projects to fill it</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<img src="assets/images/lotus.jpg" alt="img filler" class="img-responsive thumbnail">
						</div>
						<div class="col-md-9 text-left">
							<h3>Project Title</h3>
							<p>statement about project here and maybe a little about what it does. This is filler text waiting for fun projects to fill it</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>

		<!-- contact Me section-->
		<section id="contact carouselp">
			<div class="container-fluid text-center">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="main">Contact Me</h2>
						<p>I am available for freelance. <br>Can't wait for the next exciting project!</p>
					</div>
					<div class="col-sm-6 col-md-6 scrollimation fade-up d1 in">
						<p><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
							(505) 433-0504</p>
						<p><strong><i class="fa fa-envelope"></i> Email Address</strong><br>
							dannielle.bojorquez@gmail.com</p>
					</div>
					<!--=== Contact Form ===-->
					<div class="col-md-6 carouselp">
					<form id="contact-form" action="php/mailer.php" method="post" novalidate>
						<div class="form-group">
							<label for="name">Name</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</div>
								<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil"></i>
								</div>
								<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment"></i>
								</div>
								<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
							</div>
						</div>

						<!-- Google reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LeF5y4UAAAAAFETrCdCbOWezond_YN8QTWVRwBq"></div>

						<button class="btn btn-default" type="reset">Reset</button>
						<button class="btn btn-info" type="submit">Submit</button>
					</form>
					<!-- End contact-form -->

					<!--empty area for form error/success output-->
						<!-- Form error/success message area -->
						<div id="output-area"></div>

					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->
			</div>

		</section>

		<!-- added footer to project -->
		<footer class="footer">
			<div class="container-fluid text-center">
				<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="social-links text-center">
					<p><a href="https://www.linkedin.com/in/dannielle-bojorquez/" target="_blank"><i
								class="fa fa-linkedin fa-fw"></i></a> <a href="https://github.com/Dannielle-Bojorquez"
																					  target="_blank"><i class="fa fa-github""></i></a>
					</p>
				</div>
			</div>
		</footer>
	</body>
</html>