<?php


    require "connection.php";

    /* delete data */

    $sql_requet = "DELETE FROM student WHERE id ='" . $_GET["id"] . "'";
    if(mysqli_query($connection_DB,$sql_requet))
    {
        $sql_requet = "DELETE FROM position WHERE id_user ='" . $_GET["id"] . "'";
        if(mysqli_query($connection_DB,$sql_requet)){
            // echo "succesfly";
            header('Location: ../../profil_st_pr.php');
        }

    }
    else{
        echo "errorrrrrrrr";
    }
    

?>