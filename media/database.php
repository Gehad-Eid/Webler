<?php
    define("DBHOST", "localhost");
    define("DBNAME","webler1");
    define("DBUSER", "root");
    define("DBPASS","root");
    
    $connection = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    $error = mysqli_connect_error();
    if ($error != null){
        $output="<p>  unable to connect to database. </P>".$error;
        exit($output);
    }
   
?>