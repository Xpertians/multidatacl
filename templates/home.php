<?php
$identifier = Hybrid_Auth::storage()->get( 'user' );
$first_name = $model->getFirstName( $identifier );
$last_name  = $model->getLastName( $identifier );
$avatar     = $model->getAvatarUrl( $identifier );

?>

<h1>HybridAuth Demo App</h1>

<div style="float: left"><img src="<?= $avatar; ?>"></div>

<div>Welcome <?= "$first_name $last_name" ?> to your control panel.</div>

<div style="margin-top:50px"><a href="/logout/">Log out</a></div>