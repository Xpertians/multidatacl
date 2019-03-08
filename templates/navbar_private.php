  <!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="/" class="site-logo">
        <img src="<?=$model->getAvatarUrl( $identifier_session );?>" class="rounded-circle" height="40px;">
        <?=$model->getFirstName( $identifier_session );?> <?=$model->getLastName( $identifier_session );?>
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
      <a href="/logout" class="site-btn btn-primary">
        <b>Desconectarse</b>
      </a>
			<nav class="main-menu">
				<ul class="menu-list">
          <li><a href="/"><b>Principal</b></a></li>
          <li><a href="/"><i class="fa fa-car"></i> <b>Veh&iacute;culos</b></a></li>
          <li><a href="/"><i class="fa fa-user"></i> <b>Personas</b> (Pronto)</a></li>
          <li><a href="/"><i class="fa fa-briefcase"></i> <b>Empresas</b> (Pronto)</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->
