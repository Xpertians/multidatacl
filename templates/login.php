<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Pricing example for Bootstrap</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<!--<link href="/assets/css/jumbotron.css" rel="stylesheet">-->
		<link href="/assets/css/multidata.css" rel="stylesheet">
	</head>
	<body>

<nav class="navbar navbar-default navbar-expand-md navbar-static-top" style="margin-bottom: 0">
	<div class="mx-auto order-0">
		<a class="navbar-brand" href="/warpit/html/main/">
      <img width="auto" style="max-height:30px;vertical-align:middle;" src="/assets/imgs/icon_multidata.jpg">
      <b>MultiDATA</b>
    </a>
	</div>
	<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		<ul class="nav navbar-top-links mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Principal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Nosotros</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Desarrolladores</a>
			</li>
		</ul>
	</div>
	<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		<ul class="nav navbar-top-links ml-auto" style="padding-left:1em;">
			<li class="nav-item">
				<a class="nav-link" href="#">Login with</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-primary" id="btn_google" href="/login/google">
					<img src="/assets/imgs/google.png" width="20"> <b>Google</b>
				</a>
			</li>
		</ul>
	</div>
</nav>

		<main role="main">

			<div class="jumbotron">
				<div class="container">
					<h1 class="display-3">Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
					</div>
					<div class="col-md-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
					</div>
					<div class="col-md-4">
						<h2>Heading</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
					</div>
				</div>
				<hr>
				<?php
				$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
				if (isset( $identifier_session ) && ! empty( $identifier_session )) {
					echo '<a href="/welcome">Return to Control Panel</a>';
				}

				if(isset($_GET['err']) && !empty($_GET['err'])) {
				    echo '<div>Authentication failed. Please try again</div>';
				}
				?>
			</div> <!-- /container -->

		</main>

		<footer class="container">
			<p>&copy; Company 2017-2018</p>
		</footer>

		<script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/vendor/popper.min.js"></script>
		<script src="/assets/js/vendor/holder.min.js"></script>
		<script>
			Holder.addTheme('thumb', {
			bg: '#55595c',
			fg: '#eceeef',
			text: 'Thumbnail'
			});
		</script>

	</body>
</html>
