<?php
    if(isset( $_GET["stu_name"]) && isset($_GET["stu_age"]) && isset($_GET["stu_weight"]))
    {
        $name=$_GET["stu_name"];
        $age=$_GET["stu_age"];
        $weight=$_GET["stu_weight"];
    if(!empty($name) && !empty($age) && !empty($weight))
    {
    //using get variables in php
    echo "Name:". $_GET["stu_name"]."<br>";
    echo "Age:".$_GET["stu_age"]."<br>";
    echo "Weight:".$_GET["stu_weight"]."<br>";
    //in the url add "?stu_name=anything you want" this way the value is passed
    }
    else {
        echo "<h1> Please input all fields anishoriburuku o</h1>";
    }
    }
   
?>