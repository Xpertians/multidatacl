<?php
$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
include_once("header.php");
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	include_once('navbar_private.php');
}else{
	include_once('navbar_public.php');
}
?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Datos abiertos<br> <span>simplificado</span>.</h2>
					<h4>Transformamos datos irrelevantes en informaci&oacute;n de valor.</h4>
				</div>
				<div class="col-md-6">
					<img src="/assets/imgs/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Cómo funciona</h2>
				<p>Procesamos datos abiertos de fuentes públicas para generar informaci&oacute;n &uacute;til para la ciudadan&iacute;a.</p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<i class="fa fa-cloud-download fa-5x"></i>
						</figure>
						<br>
						<h4>Recopilamos</h4>
						<p>Buscamos datos abiertos disponibles bajo la Ley de Transparencia o fuentes p&uacute;blicas.</p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<i class="fa fa-cogs fa-5x"></i>
						</figure>
						<br>
						<h4>Procesamos</h4>
						<p>Usamos "Machine Learning" para crear relaciones y enriquecer la informaci&oacute;n,</p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<i class="fa fa-hand-spock-o fa-5x"></i>
						</figure>
						<br>
						<h4>P&uacute;blicamos</h4>
						<p>Los resultados estan disponibles para uso privado o academico. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->

	<?php
	include_once("facts.php");
	include_once("footer.php");
	?>
