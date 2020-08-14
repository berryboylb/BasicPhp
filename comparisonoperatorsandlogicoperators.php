<?php
    //comparison operators
        $number1='10';
        $number2=10;

        #Equal
    /*if ($number1==$number2) {
        echo "Equal";
    } 
    else 
    {
        echo "Not Equal";
    }*/
        #Not Equal
    /*if ($number1===$number2) {
        echo "Equal";
    } 
    else 
    {
        echo "Not Equal";
    }*/
        #Checking for non equality to(!+) comparison
    // if ($number1!=$number2) {
    //     echo "Equal";
    // } 
    // else 
    // {
    //     echo "Not Equal";
    // }
        #also checking for non equality (<>) comparison
    // if ($number1<>$number2) {
    //     echo "Equal";
    // } 
    // else 
    // {
    //     echo "Not Equal";
    // }
        #checking for less than or equal to
    // if ($number1<=$number2) {
    //     echo "Equal";
    // } 
    // else 
    // {
    //     echo "Not Equal";
    // }

       #checking for greater than or equal to
    //    if ($number1>=$number2) {
    //     echo "Equal";
    // } 
    // else 
    // {
    //     echo "Not Equal";
    // }
        #Logical Operators
    $number3=30;
    $number4=15;

       #using the and logical operator
       if (($number1<=$number2) and ($number3>=$number4)) {
        echo "Equal";
    } 
    else 
    {
        echo "Not Equal";
    }
       #using the or logical operator
       if (($number1<=$number2) or ($number3>=$number4)) {
        echo "Equal";
    } 
    else 
    {
        echo "Not Equal";
    }
    
?>