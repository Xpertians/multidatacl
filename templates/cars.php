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
         
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
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
          </div>
          <div class="col-sm-8">
            <div class="card">
               <div class="card-header text-white bg-warning">
                 <h4 class="my-0 font-weight-normal">Veh&iacute;culos</h4>
               </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">89k</div>
                      <div class="text-uppercase text-muted small">Lorem ipsum</div>
                    </div>
                    <div>
                      <div class="text-value">459</div>
                      <div class="text-uppercase text-muted small">Lorem ipsum</div>
                    </div>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
          </div>
        </div>
       
<?php
include_once("footer.php");
?>