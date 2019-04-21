<?php
$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	var_dump($_GET);
	var_dump($_POST);
}else{
	echo "<b>Access Error</b>";
}
?>
