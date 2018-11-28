    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h4 class="my-0 mr-md-auto font-weight-normal">
			<a href="/"><img src="/assets/imgs/multidata.png" height='60px'></a>
		</h4>
		<img src="<?=$model->getAvatarUrl( $identifier_session );?>" class="rounded-circle" height="40px;">
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="text-dark" href="#">
			    <b>Bienvenid@</b> <br>
			    <?=$model->getFirstName( $identifier_session );?> <?=$model->getLastName( $identifier_session );?>
		    </a>
		</nav>
		<button type="button" class="btn btn-outline-danger" onClick="window.location.href='/logout';">
			Desconectar
		</button>
	</div>