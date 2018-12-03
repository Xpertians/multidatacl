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
       <div class="card-deck mb-2 text-center">
         <div class="card mb-4 shadow-sm">
           <div class="card-header text-white bg-warning">
             <h4 class="my-0 font-weight-normal">Veh&iacute;culos</h4>
           </div>
           <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="inputPlate">Patente </label>
                    <input type="text" class="form-control" id="inputPlate" aria-describedby="inputPlate" placeholder="ABCD12">
                  </div>
                </form>
           </div>
            <div class="card-footer bg-transparent border-warning">
             <button type="button" class="btn btn-md btn-block btn-warning" onClick="window.location.href='/home/cars';">Buscar</button>
            </div>
         </div>
         <div class="card mb-8 shadow-sm">
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
       </div>
       
<?php
include_once("footer.php");
?>