<?php
    //so we used include to call the file
    #include 'session.php';
    // but it is not necessary we could just call the session normally since we could use it throughout 
    //our pages
    session_start();
    $name = $_SESSION['Name'];
    $Age = $_SESSION['Age'];
    $Weight = $_SESSION['Weight'];

    // we could print it out to confirm

    echo $name.'<br>';
    echo $Age.'<br>';
    echo $Weight.'<br>';

    //it works


?>