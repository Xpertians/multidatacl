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
          <input type="text" class="form-control" id="qryValue" placeholder="AB0123">
          <input type="hidden" id="qryType" value="car">
          <div class="input-group-append">
            <button class="btn btn-secondary" id="runSearch">Buscar</button>
          </div>
        </div>
      </form>
    
    </div>
    
    <div class="col-md-8 order-md-2">
      <h4 class="mb-3">Resultados</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
            <div id="#summary">
                &nbsp;
            </div>

          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>


      </form>
    </div>
    
  </div>

















<?php include_once("prefooter.php");?>

    </div>
<?php include_once("footer.php");?>
