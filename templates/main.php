<?php include_once("header.php");?>
</head>
<?php
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	include_once('navbar_private.php');
}else{
	include_once('navbar_public.php');
}
?>
<body>
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/imgs/ca_opengov.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>La mejor información disponible</h1>
            <p>MultiDATA Chile es la base de datos referencial, comunitaria y abierta más grande del país.</p>
            <p><a class="btn btn-lg btn-primary" href="/login" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/imgs/ca_opendata.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Data abierta y p&uacute;blica</h1>
            <p>Con la patente del vehículo podrás encontrar propietarios, multas y encargo por robo.</p>
            <p><a class="btn btn-lg btn-primary" href="/login" role="button"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Consultar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/imgs/ca_opensource.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>MultiDATA es Open Source</h1>
            <p>Descarga el c&oacute;digo de nuestra web e instala tu propia instancia conectando nuestra API.</p>
            <p><a class="btn btn-lg btn-primary" href="https://github.com/xpertians/multidatacl" target="_blank" role="button"><i class="fa fa-github" aria-hidden="true"></i> Descargar</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <i class="fa fa-car fa-5x" style="color:#F0AD4E"></i>
        <h2>Veh&iacute;culos</h2>
        <p><a class="btn btn-outline-primary" href="/login" role="button">Consultar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fa fa-user fa-5x" style="color:#5CB85C"></i>
        <h2>Personas</h2>
        <p><a class="btn btn-outline-primary" href="/login" role="button">Consultar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fa fa-briefcase fa-5x" style="color:#428BCA"></i>
        <h2>Empresas</h2>
        <p><a class="btn btn-outline-primary" href="/login" role="button">Consultar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div><!-- /.container -->


<?php include_once("prefooter.php");?>

    </div>
<?php include_once("footer.php");?>
