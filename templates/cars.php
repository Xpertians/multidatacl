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

     <div class="container">
       <div class="card-deck mb-3 text-center">
         <div class="card mb-4 shadow-sm">
           <div class="card-header text-white bg-warning">
             <h4 class="my-0 font-weight-normal">Veh&iacute;culos</h4>
           </div>
           <div class="card-body">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Para motos agregue un 0. Ejemplo LY391 debe ser <small>LY</small>0<small>391</small>.</small>
  </div>
  <button type="button" class="btn btn-primary">Buscar</button>
</form>
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