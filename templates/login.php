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
    <p>
    	<small>
    	    No necesitas registrarte para acceder.
    	</small>
    </p>
    <a href="/login/google" class="site-btn btn-primary">
      <img src="/assets/imgs/google.png" height=20px> Ingresar con <b>Google</b>
    </a>
    <hr>
    <center><font color=red>A partir del 20 de Mayo del 2019, MultiDATA no requiere crear una cuenta especial. <br>Desde ahora, solo necesitas una cuenta en una de las redes sociales listadas m&aacute;s arriba. Este cambio busca facilitar el accesso, mantener los datos de nuestros usuarios como privados al no contar con un registro de cuentas, y simplificar el funcionamiento de la web. Adem&aacute;s desde ahora puedes descargar el c&oacute;digo fuente de MultiDATA desde GitHub</font></center>
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
