<?php
//session_start();
include "connection.php";
//$index_no = $_SESSION['index_no'];

$email = filter_var(htmlentities($_POST['email']));
$password = filter_var(htmlentities( $_POST['password']));

$sql = "UPDATE student SET password = '$password' WHERE email = '$email'";

    if(mysqli_query($con,$sql)){

        ?>

        <script>
            alert("Reset Successful");

            window.location.href = "home.php";
        </script>

        <?php

        }else{
            echo mysqli_error($con);
        }

?>