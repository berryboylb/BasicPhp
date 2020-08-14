<?php

    #loops
    #A loop is a piece of code that runs again and again depending if the conditions are true or false
    #types of loops while loop,do while loops,for loops and for each loop

    //while loop
    $counter=1;
    while($counter<=10)
    {
        echo 'Programming Knowledge'.' '.$counter.'<br>';
        $counter++;
    }
    // to check if it actually counts you could add th value of counter to if for every line it prints

    // time to try ou what is in my head before moving to do while loop

    $anothercounter=20;
    while($anothercounter>=20)
    {
        echo 'Winner did this'.' '.$anothercounter.'<br>';
        $anothercounter--;
    }
    //it worked but ran once

    #moving to do while loop
    $recount=1;
    do
    {
        echo 'Me do do do do do do do'.' '.$recount;
        $recount++;
    }
    while($recount<=0);
    //do while loops always execute your code at least once even if it's not true

    /* in esscence if you want to check the conditions first use while loops but if you
    want your code to run at least once use do while loops*/

    #for loops  
    for ($couter=1 ; $couter<=10 ; $couter++)
     {
        echo 'what\'s popping i gat new ice on my wrist'.' '.$couter.'<br>';
    }

    # for each loops
    $names=array('Mark','tolanibaj','Dorathy','Ozo','Prince');

    foreach($names as $name)
    {
        echo $name.' '.'<br>';
    }

    //it's is used to iterate the values one by one i.e listing them out
    //this is for single dimensional array let's try multi-dimensional array

    $students=array(array('Name'=>'Mark',
                          'Age'=>15,
                          'Weight'=>46),
                    array('Name'=>'John',
                          'Age'=>13,
                          'Weight'=>65),
                    array('Name'=>'Tom',
                          'Age'=>14,
                          'Weight'=>56));

    foreach($students as $student=> $innerarray)
    {
        echo '<strong>'. $student.'</strong><br>';
        foreach($innerarray as $item)
        {
            echo $item.'<br>';
        }
    }
    //we need two foreach loops one to iterate the value of students the other to iterate the values
    //inside students

    
?>