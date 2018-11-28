<?php
$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
include_once("header.php");
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	include_once('navbar_private.php');
}else{
	include_once('navbar_public.php');
}
include_once('modal.php');
if(isset($_GET['err']) && !empty($_GET['err'])) {
	echo '<div>Authentication failed. Please try again</div>';
}
?>

     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
       <h1 class="display-4">MultiDATA Chile</h1>
       <p class="lead">
				 Somos es la base de datos referencial, comunitaria y abierta más grande del país. Ofrecemos un servicio de consulta de datos publicos y abiertos al alcance de cualquier persona que requiera obtener datos de referencia sobre vehículos, personas y sociedades.
			 </p>
     </div>
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
						 <button type="button" class="btn btn-md btn-block btn-warning" onClick="window.location.href='/home/cars';">Realizar busqueda</button>
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
       
<?php
include_once("footer.php");
?>