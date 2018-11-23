<html>
<head>
	<title>Login - HybridAuth App</title>
</head>
<body>

<?php
$identifier_session = !empty( Hybrid_Auth::storage() ) ? Hybrid_Auth::storage()->get( 'user' ) : null;
if (isset( $identifier_session ) && ! empty( $identifier_session )) {
	echo '<a href="/welcome">Return to Control Panel</a>';
}

if(isset($_GET['err']) && !empty($_GET['err'])) {
    echo '<div>Authentication failed. Please try again</div>';
}
?>


<h1>HybridAuth Demo App</h1>

<p>Click any of the link below to login with a social network of your choice</p>

<a href="/login/facebook">Facebook</a> |
<a href="/login/twitter">Twitter</a> |
<a href="/login/google">Google</a>

</body>
</html>
