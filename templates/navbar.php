    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h4 class="my-0 mr-md-auto font-weight-normal">
			<a href="/"><img src="/assets/imgs/multidata.png" height='60px'></a>
		</h4>
		<nav class="my-2 my-md-0 mr-md-3">
			<?php
			if (isset( $identifier_session ) && ! empty( $identifier_session )) {
			?>
				<a class="p-2 text-dark" href="/">Principal</a>
			<?php 
			}else{
			?>
				<a class="p-2 text-dark" href="/home">Principal</a>
			<?php
			}
			?>
			<a class="p-2 text-dark" href="#">Proyecto</a>
			<a class="p-2 text-dark" target="_blank" href="https://OpenDataCollector.com">API (OpenDataCollector)</a>
		</nav>
		<?php
		if (isset( $identifier_session ) && ! empty( $identifier_session )) {
		?>
		<button type="button" class="btn btn-outline-primary active" data-toggle="modal" data-target="#sem-login">
			Ingresar
		</button>
		<?php }else{ ?>
		<button type="button" class="btn btn-outline-primary active" onClick="window.location.href='/logout';">
			Salir
		</button>
		<?php } ?>
	</div>