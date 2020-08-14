<?php

    //How to use arrays in php
    $names=array('Mark','Bob','Sam');

    //you can also add to the array at runtime
    $names[3]='Shem';
    //echo $names[3];

    //to print narrays you don't use echo instead you use print_r
    print_r($names)."<br>";

    //types of arrays


    //associative arrays 
    $names=array('Mark'=>56,'Bob'=>32,'Sam'=>20);
    echo "Weight of mark is ". $names['Mark'];

    //Multidimensional arrays(it is used for complex calculations)
    /* students
    Name    Age     weight
    mark    15      46
    john    13      65
    Tom     14      56
    */
    $students=array(array('Mark',15,46),
                    array('John',13,65),
                    array('Tom',14,56));

    //i will always leave notes for myself multidimensional array coulb be printed out using echo by specify
    //the row and column see example below

    echo $students[0][0].'<br>';
    //the output is mark is on row zero and column zero do not forget


    //how about we print everybody out
    echo $students[0][0].'<br>'; echo $students[0][2].'<br>';
    echo $students[0][2].'<br>'; echo $students[1][0].'<br>';
    echo $students[1][1].'<br>'; echo $students[1][2].'<br>';
    echo $students[2][0].'<br>'; echo $students[2][1].'<br>';
    echo $students[2][2].'<br>';

    //spoiler alert we could also use the associative array property in a multidimensional array
    //see how it's done
    $students=array(array('Name'=>'Mark',
                          'Age'=>15,
                          'Weight'=>46),
                    array('Name'=>'John',
                          'Age'=>13,
                          'Weight'=>65),
                    array('Name'=>'Tom',
                          'Age'=>14,
                          'Weight'=>56));

    //to print it out we have
    echo $students[0]['Name'].'<br>'; echo $students[0]['Age'].'<br>';
    echo $students[0]['Weight'].'<br>'; echo $students[1]['Name'].'<br>';
    echo $students[1]['Age'].'<br>'; echo $students[1]['Weight'].'<br>';
    echo $students[2]['Name'].'<br>'; echo $students[2]['Age'].'<br>';
    echo $students[2]['Weight'].'<br>';
    // Because we've assigned keys to this the default automatic key values which is 0,1,2 were
    //replaced by name,age and weight
?>