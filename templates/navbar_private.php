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
          <li><a href="https://odc.xpertians.com/" target='_blank'><b>Desarrolladores</b></a></li>
          <li><a href="https://opendatacollector.com/" target='_blank'><b>APIs</b></a></li>
          <li><a href="https://github.com/Xpertians/odc/issues/new" target='_blank'><b>Ayuda</b></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->
