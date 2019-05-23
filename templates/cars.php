<?php include_once("header.php");?>
</head>
<?php
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	include_once('navbar_private.php');
}else{
	include_once('navbar_public.php');
}
?>

 <body class="bg-light">

<div class="container">

  <div class="py-5">
    <h2 style="color:#F0AD4E">
        <i class="fa fa-car" style="color:#F0AD4E"></i>
        Veh&iacute;culos
    </h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-1 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Ingresa el dato a buscar</span>
      </h4>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" name="qryValue" id="qryValue" placeholder="AB0123" style="text-transform: uppercase" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;">
          <input type="hidden" name="qryType" id="qryType" value="car">
          <div class="input-group-append">
            <button class="btn btn-secondary" id="runSearch">
							<i class="fa fa-search" aria-hidden="true"></i>
							Buscar
						</button>
          </div>
        </div>
      </form>

    </div>

    <div class="col-md-8 order-md-2">
      <h4 class="mb-3">Resultados</h4>
			<div id="#summary">
          &nbsp;
      </div>
      <div id="loading_animation" style="display: none;">
          <center>
              <img src='/assets/imgs/loading-icon-animated-gif-1.jpg' class="rounded">
              </center>
        </div>
    </div>

  </div>

















<?php include_once("prefooter.php");?>

    </div>
<?php include_once("footer.php");?>
