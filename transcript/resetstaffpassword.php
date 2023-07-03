<?php
include "connection.php";

$username = filter_var(htmlentities($_POST['username']));
$password = filter_var(htmlentities($_POST['password']));
  
    $sql = mysqli_query($con,"UPDATE staff SET password = '$password' WHERE username = '$username'");

    if(mysqli_query($con,$sql)){

        //echo "<script>alert('Password updated successfully')</script>";

        header('Location: hoddashboard.php');
        }
        else{
            //echo mysqli_error($con);
        }

?>