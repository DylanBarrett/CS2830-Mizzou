<?php
    
    // If the session was propagated using a cookie, remove that cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', 1,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
	header("Location: login.php");
	exit;
?>
