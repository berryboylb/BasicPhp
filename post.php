<?php 
    echo "Username:". $_POST["username"]."Password:".$_POST["password"]."<br>";

    if( ($_POST["username"]==="mark") &&  ($_POST["password"]==="pass"))
    {
        echo "USERNAME AND PSSWORD IS CORRECT";
    }
    else {
        echo "USERNAME AND PSSWORD IS NOT CORRECT";
    }
?>