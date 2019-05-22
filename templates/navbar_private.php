<!-- Header section -->
<header>
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #ffffff;">
        <a class="navbar-brand" href="/">
            <img src="/assets/imgs/multidata.png" height="50px">
        </a>
        <button class="navbar-toggler" data-target="#navbarCollapse" data-toggle="collapse" aria-expanded="false" >
            <span class="line"></span>
            <span class="line"></span>
            <span class="line" style="margin-bottom: 0;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
		    <a class="nav-link" href="/home/cars" target="_self">
		    <i class="fa fa-car"></i>
                    <b>Veh&iacute;culos</b>
		    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/" target="_self">
			<i class="fa fa-user"></i>
			<b>Personas</b> (Pronto)
		    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/" target="_self">
			<i class="fa fa-briefcase"></i>
			<b>Empresas</b> (Pronto)
		    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="/logout" target="_self" style="color:#F1744A;">
			<i class="fa fa-sign-out"></i>
			<b>Salir</b>
		    </a>
                </li>
            </ul>
	    <div class="d-none d-lg-block">
	    <form class="form-inline mt-2 mt-md-0" action="/logout">
		<div class="form-group mb-2">
		    <img src="<?=$model->getAvatarUrl( $identifier_session );?>" class="rounded-circle" height="40px;">
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    <?=$model->getFirstName( $identifier_session );?> <?=$model->getLastName( $identifier_session );?>
		</div>
		<button class="btn btn-primary mb-2" type="submit">Salir</button>
            </form>
	    </div>
        </div>
    </nav>
</header>
<!-- Header section end -->
