<?php
$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
include_once("header.php");
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	include_once('navbar_private.php');
}else{
	include_once('navbar_public.php');
}
?>

<section class="page-info-section">
	<div class="container">
		<h2><i class="fa fa-car" onclick="window.location.href='/warpit/html/cars/';"></i> Veh&iacute;culos</h2>
		<div class="site-beradcamb">
			<a href="/">Principal</a>
			<span><i class="fa fa-angle-right"></i> Veh&iacute;culos</span>
		</div>
	</div>
</section>


<!-- Blog section -->
<section class="single-blog-page spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 sideber pt-5 pt-lg-0">
				<div class="widget-area">
					<h4 class="widget-title">Busqueda de vehículos</h4>
					<p>Ingrese la patente a buscar, para patentes de motos debe agregar un 0, por ejemplo AB123 debe ser AB0123.</p>
					<form class="widget-subscribe-from">
						<input type="text" placeholder="AB0123">
						<button class="site-btn sb-full-- sb-gradients">Buscar Patente</button>
					</form>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="blog-item bi-feature">
					<div class="blog-text">
						<h2 class="blog-title"><a href="">Resultados de su busqueda</a></h2>
						<div class="post-meta">
							<div class="post-tags">
								<a href="#">Detalles</a>
								<a href="#">Propietarios</a>
								<a href="#">Policial</a>
							</div>
						</div>

						<h4>DETALLES</h4>
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">First</th>
						      <th scope="col">Last</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td colspan="2">Larry the Bird</td>
						    </tr>
						  </tbody>
						</table>



					</div>
				</div>
			</div>

		</div>
	</div>
</section>



<button id="createPin">xx</button>
<div id="#summary">This text will be replaced when the onclick event (link is clicked) is triggered.</div>


<?php
include_once("facts.php");
include_once("footer.php");
?>
