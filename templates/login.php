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

	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="/warpit/html/main/">
				<img width="auto" style="max-height:30px;vertical-align:middle;" src="/assets/imgs/icon_multidata.jpg">
				<b>MultiDATA</b>
			</a>
		</div>
		<ul class="nav navbar-top-links navbar-right hidden-xs" id="account-settings">
			<li><a href="/warpit/html/login/"><i class="fa fa-user fa-fw"></i> Ingresa</a></li>
		</ul>
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu"></ul>
			</div>
		</div>
	</nav>

<!--

		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<form class="form-inline my-2 my-lg-0">
					<a class="btn btn-primary" href="/login/facebook">Login with Facebook</a>
					<a class="btn btn-primary" href="/login/twitter">Login with Twitter</a>
					<a class="btn btn-primary" href="/login/google">Login with Google</a>
				</form>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
-->

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
