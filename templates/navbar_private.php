    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h4 class="my-0 mr-md-auto font-weight-normal">
			<a href="/"><img src="/assets/imgs/multidata.png" height='60px'></a>
		</h4>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="/">Bienvenid@: <?=$model->getFirstName( $identifier );?> <?=$model->getLastName( $identifier );?></a>
		</nav>
		<button type="button" class="btn btn-outline-danger" onClick="window.location.href='/logout';">
			Salir
		</button>
	</div>