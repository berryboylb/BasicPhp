<?php
    //this file would show us how to destroy sessions in php
    //first we start session

    session_start();

    //depending on the session we want to destroy we use unset and the name of session
    //unset($_SESSION['Name']);

    //it destroys only the name session

    //uncomment it and check the view.php file on the browser

    //to destroy all sessions use 

    //session_destroy();

    //it destroys all sessions uncomment and check view.php
?>