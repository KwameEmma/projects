<?php

if (isset($_POST['submit'])) {
               # code...
     include "connection.php";
     $hodsign = filter_var(htmlentities($_POST['hodsign']));

     $query = "INSERT INTO attended (hodsign) VALUES ('$hodsign')";

    if (mysqli_query($con,$query)) {
        header('location: hodrequest.php');
        
    } else {
         echo mysqli_error($con);
    }

}

?>