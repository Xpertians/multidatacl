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
		<a class="navbar-brand" href="/">
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
				<a class="nav-link" href="https://OpenDataCollector.com">API (OpenDataCollector)</a>
			</li>
		</ul>
	</div>
	<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		<ul class="nav navbar-top-links ml-auto">
			<li class="nav-item" style="vertical-align: middle;">
				<font color="#ffffff">Ingresar:</font>
			</li>
			<li class="nav-item">
				<a class="btn btn-light btn-space" id="btn_google" href="/login/google">
					<img src="/assets/imgs/google.png" width="20"> Google
				</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-light btn-space" id="btn_facebook" href="/login/facebook">
					<img src="/assets/imgs/facebook.png" width="22"> Facebook
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

						<div class="card" style="width: 18rem;">
							<div class="card-header bg-warning text-white">
								<h2>Veh&iacute;culos</h2>
							</div>
							<div class="card-footer">
					      <a href="#" class="btn btn-warning text-white btn-sm float-right">Realizar busqueda</a>
					    </div>
						</div>


					</div>
					<div class="col-md-4">

						<div class="card" style="width: 18rem;">
							<div class="card-header bg-success text-white">
								<h2>Personas</h2>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-success text-white btn-sm float-right">Realizar busqueda</a>
					    </div>
						</div>

					</div>
					<div class="col-md-4">

						<div class="card" style="width: 18rem;">
							<div class="card-header bg-primary text-white">
								<h2>Empresas</h2>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary text-white btn-sm float-right">Realizar busqueda</a>
					    </div>
						</div>


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
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <b>MultiDATA.CL</b> &copy; by <a href="http://xpertians.com">Xpertians</a>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">
					Software Libre bajo licencia GPL-3.0 - <a href="#">Descargar</a>
        </div>
      </div>
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
