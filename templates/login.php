<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>MultiDATA.CL</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/multidata.css" rel="stylesheet">
		<link href="/assets/css/pricing.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<i class="fas fa-stroopwafel"></i>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
			<h4 class="my-0 mr-md-auto font-weight-normal">
				<a href="/"><img src="/assets/imgs/multidata.png" height='60px'></a>
			</h4>
       <nav class="my-2 my-md-0 mr-md-3">
         <a class="p-2 text-dark" href="/">Principal</a>
         <a class="p-2 text-dark" href="#">Proyecto</a>
         <a class="p-2 text-dark" target="_blank" href="https://OpenDataCollector.com">API (OpenDataCollector)</a>
       </nav>
			 <button type="button" class="btn btn-outline-primary active" data-toggle="modal" data-target="#sem-login">
		     Ingresar
		   </button>
     </div>


		   <!-- The Modal -->
		   <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-login">
		     <div class="modal-dialog modal-dialog-centered">
		       <div class="modal-content">

							<!-- Modal body -->
							<div class="modal-body seminor-login-modal-body">
							<h5 class="modal-title text-center">Ingresar usando</h5>
								<button type="button" class="close" data-dismiss="modal">
									<span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
								</button>
	
								<div class="btn-check-log">
									<a type="button" class="btn-check-login" href="/login/google"><img src="/assets/imgs/google.png" height=20px>Google</a>
								</div>

						</div>
				</div>
			</div>
		 </div>


     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
       <h1 class="display-4">MultiDATA Chile</h1>
       <p class="lead">
				 Somos es la base de datos referencial, comunitaria y abierta más grande del país. Ofrecemos un servicio de consulta de datos publicos y abiertos al alcance de cualquier persona que requiera obtener datos de referencia sobre vehículos, personas y sociedades.
			 </p>
     </div>

		 <?php
		 $identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
		 if (isset( $identifier_session ) && ! empty( $identifier_session )) {
		   echo '<a href="/welcome">Return to Control Panel</a>';
		 }

		 if(isset($_GET['err']) && !empty($_GET['err'])) {
		     echo '<div>Authentication failed. Please try again</div>';
		 }
		 ?>


     <div class="container">
       <div class="card-deck mb-3 text-center">
         <div class="card mb-4 shadow-sm">
           <div class="card-header text-white bg-warning">
             <h4 class="my-0 font-weight-normal">Veh&iacute;culos</h4>
           </div>
           <div class="card-body">
             <h2 class="card-title pricing-card-title">Informaci&oacute;n</h2>
						 <ul class="list-styled mt-3 mb-4">
               <li>Datos veh&iacute;culo</li>
               <li>Transporte p&uacute;blico</li>
               <li>Registro policial</li>
							 <li>Propietarios</li>
             </ul>
           </div>
					 <div class="card-footer bg-transparent border-warning">
						 <button type="button" class="btn btn-md btn-block btn-warning">Realizar busqueda</button>
					 </div>
         </div>
         <div class="card mb-4 shadow-sm">
           <div class="card-header text-white bg-success">
             <h4 class="my-0 font-weight-normal">Personas</h4>
           </div>
           <div class="card-body">
						 <h2 class="card-title pricing-card-title">Informaci&oacute;n</h2>
						 <ul class="list-styled mt-3 mb-4">
               <li>Registro electoral</li>
               <li>Informaci&oacute;n tributaria</li>
               <li>Gobierno transparente</li>
             </ul>
           </div>
					 <div class="card-footer bg-transparent border-success">
						 <button type="button" class="btn btn-md btn-block btn-outline-success">Pronto</button>
					 </div>
         </div>
         <div class="card mb-4 shadow-sm">
           <div class="card-header text-white bg-primary">
             <h4 class="my-0 font-weight-normal">Sociedades</h4>
           </div>
           <div class="card-body">
						 <h2 class="card-title pricing-card-title">Informaci&oacute;n</h2>
						 <ul class="list-styled mt-3 mb-4">
               <li>Informaci&oacute;n tributaria</li>
               <li>Mercado y licitaciones</li>
							 <li>Previsional y laboral</li>
							 <li>Gobierno transparente</li>
             </ul>
           </div>
					 <div class="card-footer bg-transparent border-primary">
						 <button type="button" class="btn btn-md btn-block btn-outline-primary">Pronto</button>
					 </div>
         </div>
       </div>

			 <footer class="footer">
				 <hr>
	       <div class="row py-4 d-flex align-items-center">
	         <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
	           <a href="https://odc.xpertians.com/docs/terminos-de-servicio/">Condiciones</a> &bull;
						 <a href="https://OpenDataCollector.com">API (OpenDataCollector)</a><br>
						 <b>MultiDATA.CL</b> &copy; by <a href="http://xpertians.com">Xpertians</a>
	         </div>
	         <div class="col-md-6 col-lg-7 text-center text-md-right">
	 					Puedes descargar el c&oacute;digo en <a target="_blank" href="https://github.com/Xpertians/multidatacl">GitHub</a><br>
						Software Libre bajo licencia <a target="_blank" href="https://github.com/Xpertians/multidatacl/blob/master/LICENSE">GPL-3.0</a>
	         </div>
	       </div>
	 		</footer>

     </div>

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
