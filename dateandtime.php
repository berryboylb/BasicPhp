<?php
    //printing date and time of a server

    //format day/month/year
    $date = date('d/m/Y');
    echo $date.'<br>';

    //it works an it's pretty simple
    // d = day
    // m = month
    // Y = Year
    // if we replace "d" with "D" it gives us the day of the week in string instaed of a date


    //we could change formaT though
    $plug = date('Y/d/m');
    echo $plug.'<br>';

    $lug = date('Y.d.m');
    echo $lug.'<br>';

    $ug = date('Y-d-m');
    echo $ug.'<br>';

    //it works

    //we could also use this for time 
    //format hours/minutes/seconds
    $time = date('H-i-s');
    echo $time;

    //check php.net for more tutorials
?>