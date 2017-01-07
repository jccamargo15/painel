<?php
	// calls session
	session_start();
	/* $_SESSION = array(); */
	
	// destroy session
	session_unset();
	session_destroy();
	
	// destroy cookies
	setcookie ("admin_logged", "", time() - 3600);
	setcookie ("user_logged", "", time() - 3600);
	
	// directs to index
	header("Location: index.html");
	
	/* echo '<a href="index.html">Index</a>'; */
	/* echo "<script type='text/javascript'>document.location.href=\"index.php\" </script>"; */
?>