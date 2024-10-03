<?php
    session_start();
    // Destroy session
    if(session_destroy()) 
    {
        // Redirecting To Home Page
       $alert="<script>alert('You Have Logout Successfully !!')
    window.location='login.php'</script>";
    echo $alert;
    }
?>