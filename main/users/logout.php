<?php
    session_start();
    // destroy session
    if(session_destroy()) {
        // redirecting to home page
        header("Location: ../index.php");
    }
?>