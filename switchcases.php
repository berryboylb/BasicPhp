<?php

        #switch cases
    $number=40;

    switch($number)
    {
        case 1: 
            echo "Number is equal to one";
        break;

        case 2: 
            echo "Number is equal to Two";
        break;

        case 3: 
            echo "Number is equal to Three";
        break;
            //it wasn't part of the tutorials i just tried out if i could haave loops in a switch case and it worked
        case 4: 
            while($number<=20)
                {
                    echo 'Winner did this'.' '.$number.'<br>';
                    $number++;
                }
        break;

        default:
            echo "Number not found";
        break;
    }

    //trying switch cases with strings
    $grade='f';

    switch($grade)
    {
        case 'A':
            case 'a':
            echo "Excellent";
        break;

        case 'B':
            case 'b':
            echo "Very Good";
        break;

        case 'C':
            case 'c':
            echo "Needs to improve";
        break;

        case 'D':
            case 'd':
            echo "Oga repeat this class";
        break;

        case 'F':
            case 'f':
            echo "<h1> Oga wetin you still dey find for school sef, dropout!!!! fool</h1>";
        break;

        default:
            echo "Grades not found";
        break;
    }
    //the small letters case is to stop it from being case sensitive ease capital or small 
    //letters works
?>