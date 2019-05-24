<?php
include_once("header.php");
?>
<link href="/assets/css/login.css" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin">
    <a href="/">
	     <img class="mb-4" src="/assets/imgs/multidata.png" alt="" height="65px">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">Ingresa en segundos</h1>
    <p align='center'>
        MultiDATA no requiere registro, solo necesitas una cuenta en una red social.
    </p>
    <p align='center'>
      <a href="/login/twitter" class="btn btn-outline-info btn-block btn-lg">
        <span class="fa fa-twitter"></span> <b>Twitter</b>
      </a>
    </p>
    <p align='center'>
      <a href="/login/facebook" class="btn btn-outline-primary btn-block btn-lg">
        <img src="/assets/imgs/facebook.png" width="30"> <b>Facebook</b>
      </a>
      <span class="fa fa-facebook"></span>
    </p>
    <p align='center'>
      <a href="/login/github" class="btn btn-outline-secondary btn-block btn-lg">
        <img src="/assets/imgs/github.png" width="30"> <b>Github</b>
        <span class="fa fa-github"></span>
      </a>
    </p>
    <!--
    <p align='center'>
      <a href="/login/google" class="btn btn-primary btn-block">
        <img src="/assets/imgs/google.png" width="20"> Ingresar con <b>Google</b>
      </a>
      <br>
      <small>
          <font color=red>
              Este sitio web esta en proceso de verificaci&oacute;n por Google, por lo que se muestra un mensaje de error o de advertencia de seguridad. Es NORMAL, ser&aacute; eliminado una vez que Google complete el proceso.
          </font>
      </small>
    </p>
    -->
    <hr>
    <p align='justify'>
    	<small>
    	    Este cambio busca facilitar el accesso, mantener tus datos como privados, y simplificar nuestra web.
    	</small>
    </p>
    <button class="btn btn-xs btn-outline-danger" type="button" onClick="window.location.href='/';">&laquo; volver</button>
    <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y'); ?> Xpertians</p>
</form>

<?php
if(isset($_GET['err']) && !empty($_GET['err'])) {
	echo '<center><a href="/">Ha ocurrido un error, intente nuevamente.</a></center>';
}
?>
<?php
include_once("footer.php");
