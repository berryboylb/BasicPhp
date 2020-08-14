<?php 
       // variablle declaration

       $value=25;
       $name="ProgrammingKnowledge";

       $value=($value*8);
       echo $value. "<br>";
       echo $name. "<br>";
       echo "25*8=$value". "<br>" ;
       echo '25*8=$value. <br> ';
       // or for using quotes and you want to print out a value and make bsure it bruns we could use contantination see it  below

       echo 'Hello=' . $name . '<br>'  ;

       //echoing a link
       $google='Google link';
       echo "<a href=\"http://www.google.com\">$google</a>"; 
?>