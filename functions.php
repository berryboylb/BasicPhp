<?php
    //a fuction is a block of code designrd to do a particular task
    //functions are used 
    //to increase the readability of a program
    //to perform a task in a repetitive manner

    function hello_world ()
    {
        echo "Hello world<br>";
        echo "Hello ,world<br>";
        echo "<b>Hello world</b><br><br><br>";
    }
    //call the function

    hello_world ();

    //functions could also take arguements or parameters 
    //this function sums up num1 and num2 you could pass as much values you want


    function add($num1, $num2)
    {
        echo $num1 + $num2."<br>";
    }

    //call the function inputing the values you wish to add
    add(200,300);

    //it works so we could use it for more values

    add(400,200);
    //works

    add(250,750,200);
    //we would only get 1000 because the function only sums up the first two
    //others would be ignored


    //functions cold also have a return value

    function new_add($num1, $num2)
    {
        $result= $num1 + $num2."<br>";
        return $result;
    }
    //it just basically returns the result so it could be subject to further processing
    $add1 = new_add(12, 2);
    echo new_add(12, 2)."<br>";
    $add2 = new_add(13, 4);
    echo new_add(13, 4)."<br>";

    echo $add1 * $add2 ."<br>";

    //declaring global variables in  your functions

    $name = "FRED";

    function Name(){
        global $name;
        echo 'The name of the student is'. $name;
    }

    Name();

    //it is important to declare global variables in your functions in order to 
    //in order not to get an error  use "global" then whatever the name is as used above
    // we could also declare multiple global variables
    //example "global $name, $class, $age, $height;" etc in our function
    

?>