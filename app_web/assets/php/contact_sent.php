<?php

                session_start();
                require "connection.php";


                if (isset($_POST['submit'])) {
                    $name = $_POST['username'];
                    $email = $_POST['email'];
                    $sujet = $_POST['sujet'];
                    $message = $_POST['msg'];

                    if (!empty($name) && !empty($email) && !empty($sujet) && !empty($message)) {
                        $sql_requet = "INSERT INTO contact ('nom','email','subject','message') VALUES ('$name','$email','$sujet','$message')";

                        if (mysqli_query($connection_DB, $sql_requet)) {
                            $_SESSION["mesage_sent"] = "message_sent";
                            header('Location: ../../contact.php');
                        }
                    } else {
                        $_SESSION["mesage_not_sent"] = "message_not_sent";
                        header('Location: ../../contact.php');

                    }
                }

            
?>