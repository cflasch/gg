<?php 

include_once('phpscripts/mobile_detection.php');

?><!DOCTYPE html>
<html>

<head>

	<title>
		GG DEV
	</title>

	<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="stylesheets/tablet.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="stylesheets/phone.css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="page">
		<a id="disrupter" href="#"><span>Klick<br/>mich!</span></a>
		<section class="carousel">
			<div class="item"><div class="content content-video">
				<iframe width="800" height="400" src="https://www.youtube.com/embed/gJeh_dLjPN4?autoplay=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
			</div></div>
			<div class="item"><div class="content">
				<picture>
					<source media="(max-width: 600px)" 
						srcset="http://placehold.it/600x550, http://placehold.it/1200x1000 2x">
					<source media="(max-width: 800px)" 
						srcset="http://placehold.it/800x550, http://placehold.it/1600x1000 2x">
					<source media="(max-width: 1024px)" 
						srcset="http://placehold.it/1024x550, http://placehold.it/2048x1000 2x">
					<source media="(min-width: 1024px)" 
						srcset="http://placehold.it/1920x550, http://placehold.it/3840x1000 2x">
					<img src="http://placehold.it/1920x550" alt="Placeholder" />
				</picture>
			</div></div>
			<div class="item item-bg" style="background-image: url('images/pattern.png');"><div class="content content-text">
				<h1>Hello World!</h1>
				<span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				 tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
				 At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				 no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				 consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 
				 magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
				 Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</span>
			</div></div>
			<div class="item"><div class="content">
				<picture>
					<source media="(max-width: 600px)" 
						srcset="http://placehold.it/600x550, http://placehold.it/1200x1000 2x">
					<source media="(max-width: 800px)" 
						srcset="http://placehold.it/800x550, http://placehold.it/1600x1000 2x">
					<source media="(max-width: 1024px)" 
						srcset="http://placehold.it/1024x550, http://placehold.it/2048x1000 2x">
					<source media="(min-width: 1024px)" 
						srcset="http://placehold.it/1920x550, http://placehold.it/3840x1000 2x">
					<img src="http://placehold.it/1920x550" alt="Placeholder" />
				</picture>
			</div></div>
			<div class="item"><div class="content">
				<picture>
					<source media="(max-width: 600px)" 
						srcset="http://placehold.it/600x550, http://placehold.it/1200x1000 2x">
					<source media="(max-width: 800px)" 
						srcset="http://placehold.it/800x550, http://placehold.it/1600x1000 2x">
					<source media="(max-width: 1024px)" 
						srcset="http://placehold.it/1024x550, http://placehold.it/2048x1000 2x">
					<source media="(min-width: 1024px)" 
						srcset="http://placehold.it/1920x550, http://placehold.it/3840x1000 2x">
					<img src="http://placehold.it/1920x550" alt="Placeholder" />
				</picture>
			</div></div>
		</section>
		<nav id="main">
			<div class="icon icon-menu"></div>
			<ul>
				<li><a href="#">Nav Link 1</a></li>
				<li><a href="#">Nav Link 2 a bit longer</a></li>
				<li><a href="#">Nav Link 3</a></li>
				<li><a href="#">Nav Link 4</a></li>
				<li><a href="#">Nav Link 5 longer</a></li>
				<li><a href="#">Nav Link 6</a></li>
			</ul>
		</nav>
		<section class="content content-1">
			<h2>Headline</h2>
			<picture>
				<source media="(min-width: 1024px)" 
					srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
				<img src="http://placehold.it/500x250" alt="Placeholder" />
			</picture>
			<p>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
				duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
				Lorem ipsum dolor sit amet.
			</p>
		</section>
		<section class="content content-2 grid_50_50">
			<div class="grid">
				<h2>Headline</h2>
				<picture>
					<source media="(min-width: 1024px)" 
						srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
					<img src="http://placehold.it/500x250" alt="Placeholder" />
				</picture>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
					tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
					vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
					no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
					consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
					dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
					duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
					Lorem ipsum dolor sit amet.
				</p>
			</div>
			<div class="grid">
				<h2>Headline</h2>
				<picture>
					<source media="(min-width: 1024px)" 
						srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
					<img src="http://placehold.it/500x250" alt="Placeholder" />
				</picture>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
					tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
					vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
					no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
					consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
					dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
					duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
					Lorem ipsum dolor sit amet.
				</p>
			</div>
		</section>
		<section class="content content-3">
			<h2>Headline</h2>
			<picture>
				<source media="(min-width: 1024px)" 
					srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
				<img src="http://placehold.it/500x250" alt="Placeholder" />
			</picture>
			<p>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
				duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
				Lorem ipsum dolor sit amet.
			</p>
		</section>
		<section class="content content-4">
			<h2>Headline</h2>
			<picture>
				<source media="(min-width: 1024px)" 
					srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
				<img src="http://placehold.it/500x250" alt="Placeholder" />
			</picture>
			<p>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
				duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
				Lorem ipsum dolor sit amet.
			</p>
		</section>
		<section class="content content-5">
			<h2>Headline</h2>
			<picture>
				<source media="(min-width: 1024px)" 
					srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
				<img src="http://placehold.it/500x250" alt="Placeholder" />
			</picture>
			<p>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
				duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
				Lorem ipsum dolor sit amet.
			</p>
		</section>
		<section class="content content-6">
			<h2>Headline</h2>
			<picture>
				<source media="(min-width: 1024px)" 
					srcset="http://placehold.it/500x250, http://placehold.it/1000x500 2x">
				<img src="http://placehold.it/500x250" alt="Placeholder" />
			</picture>
			<p>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
				duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
				Lorem ipsum dolor sit amet.
			</p>
		</section>
		<section class="content contactform">
			<h2>Headline</h2>
			<form id="contact-form" name="contact-form" action="index.php" method="post">
				<div>
					<label for="contact-form-firstname">Firstname:</label>
					<input id="contact-form-firstname" type="text" name="firstname" placeholder="Firstname" required="required" />
				</div>
				<div>
					<label for="contact-form-lastname">Lastname:</label>
					<input id="contact-form-lastname" type="text" name="lastname" placeholder="Lastname" required="required" />
				</div>
				<div>
					<label for="contact-form-email">E-Mail:</label>
					<input id="contact-form-email" type="email" name="email" placeholder="E-Mail Adress" required="required" />
				</div>
				<div class="checkbox-row">
					<label for="contact-form-terms">Agree with <a href="#">terms?</a>:</label>
					<div class="pretty-checkbox-wrapper">
						<div class="pretty-checkbox">
							<input id="contact-form-terms" type="checkbox" name="terms" required="required" />
							<label for="contact-form-terms"></label>
						</div>
					</div>
				</div>
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</section>
	</div>

	<script type="text/javascript" src="javascripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
	<script type="text/javascript" src="javascripts/main.js"></script>
</body>

</html> 
