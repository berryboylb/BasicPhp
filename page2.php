<?php
    //this is for require functions



    require 'includeandrequire.php';
    // you could also use require it works pretty well
    //th only difference is if the required file is non existent it kills the whole page 
    //which might be disastrous in some cases but include still exicute the script even if the file 
    //is non-existent
    

    //we could also declare a variable
    
    echo "Page info"." ".$page2;


     //we could also use require once which allows your template to be include only once
    // in the browser
     #require_once('includeandrequire.php');
    //uncomment it to see the magic and copy and paste before the require function and after it
?>