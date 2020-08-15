<?php

    //che k epoch reference time to know about this time
    $time = time();
    echo $time;
    //A cookie is used to identify a user

    //setcookie (name, value, expire, path, domain);

    //but we are only going to be using three for now

    setcookie ('student', 'bube', $time+10);

    //the +10 stands for ten seconds you could add more if you wish but the reference is from epoch time

    //the data destroys after 10sec click on cookie.php to set cookie then new.php to see cookie data
    //after that keep refreshing till it destroyed after 10 seconds
    //check new.php on how to set cookies
?>