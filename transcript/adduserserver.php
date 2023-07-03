<?php
if (isset($_POST['submit'])) {
              
include "connection.php";

$username = filter_var(htmlentities($_POST['username']));
$password = filter_var(htmlentities( $_POST['password']));
$department = filter_var(htmlentities($_POST['department']));
$role = filter_var(htmlentities($_POST['role']));

$query = "INSERT INTO staff(username,password,department,role) VALUES ('$username','$password','$department','$role')";

    if (mysqli_query($con,$query)) {
        header('location: hoddashboard.php');
        //echo "New record created successfully!";
    } else {
         echo mysqli_query($con,$query);
    }
}

?>
