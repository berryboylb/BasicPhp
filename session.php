<?php
    //sessions is a way to store information in form of variables
    //to be used accross multiple pages
    //A session can be use to store information about one user and made being available on other pages
    //To declare a session use 

    session_start();

    //then you start your inputting your data

    $_SESSION['Name']='Bube';
    $_SESSION['Age']=22;
    $_SESSION['Weight']=89;

    echo "Done";

    //we would call this session in another file "View.php" using include
?>