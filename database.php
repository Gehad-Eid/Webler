<?php
    define("DBHOST", "localhost");
   define("DBNAME","webler_webler1");
    define("DBUSER", "webler_Danah123");
    define("DBPASS","Dd1234567Danah");
    
    $connection = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    $error = mysqli_connect_error();
    if ($error != null){
        $output="<p>  unable to connect to database. </P>".$error;
        exit($output);
    }
   
?>