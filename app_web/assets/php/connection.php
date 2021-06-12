<?php

    // server with default setting (user 'root' with no password)
    // mysqli_connect()  :is funtion used for make connection betwen php and our database
    // mysqli_num_rows():  Retourne le nombre de lignes dans un résultat


    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','root');
    define('DB_NAME','breif4');

    $connection_DB = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
    

?>