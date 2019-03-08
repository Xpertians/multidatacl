<!-- Header section -->
<header class="header-section clearfix">
  <div class="container-fluid">
    <a href="/" class="site-logo">
      <img src="/assets/imgs/logo.png" alt="">
    </a>
    <div class="responsive-bar"><i class="fa fa-bars"></i></div>
    <a href="" class="user"><i class="fa fa-user"></i></a>
    <a href="/login/google" class="site-btn btn-primary">
      <img src="/assets/imgs/google.png" height=20px> Ingresar usando <b>Google</b>
    </a>
    <nav class="main-menu">
      <ul class="menu-list">
        <li><a href="/"><b>Principal</b></a></li>
        <li><a href="https://odc.xpertians.com/" target='_blank'><b>Desarrolladores</b></a></li>
        <li><a href="https://opendatacollector.com/" target='_blank'><b>APIs</b></a></li>
        <li><a href="https://github.com/Xpertians/odc/issues/new" target='_blank'><b>Ayuda</b></a></li>
        <?php
        if(isset($_GET['err']) && !empty($_GET['err'])) {
          echo '<li><a href="">Ha ocurrido un error, intente nuevamente.</a></li>';
        }
        ?>
      </ul>
    </nav>
  </div>
</header>
<!-- Header section end -->
