<?php
    //this is for include and require functions

    include 'includeandrequire.php';
    // you could use this like this because they are in the same folder
    //but if you want to check out another file out side the folder use this '../'
    //while for other folders use this 'folder/nameof file'
    //it's more like adding an already made template

    //we could also declare a variable
   
    echo "Page info".$page1.'<br>';

    //we could also use include once which allows your template to be include only once
    // in the browser
     #include_once('includeandrequire.php');
    //uncomment it to see the magic and copy and paste before the include fuunction and after it

   
?>