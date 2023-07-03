<?php

if (isset($_POST['submit'])) {
               # code...
     include "connection.php";
     $staffsign = filter_var(htmlentities($_POST['staffsign']));

     $query = "INSERT INTO attended (staffsign) VALUES ('$staffsign')";

    if (mysqli_query($con,$query)) {
        header('location: staffrequest.php');
        
    } else {
         echo mysqli_error($con);
    }

}

// include "connection.php";
// $query = mysqli_query($con, "SELECT * FROM attended WHERE newindex = '$newindex'") or die(mysqli_query($con,$query));

//     $row = mysqli_fetch_assoc($query);
//     if ($row) {
       
//          $_SESSION['status'] = $row['status'];
//          $_SESSION['surname'] = $row['surname'];
//          $_SESSION['firstname'] = $row['firstname'];
//          $_SESSION['newindex'] = $row['newindex'];
//          $_SESSION['oldindex'] = $row['oldindex'];
//          $_SESSION['programme'] = $row['programme'];
//          $_SESSION['completion_year'] = $row['completion_year'];
//          $_SESSION['certificate'] = $row['certificate'];
//          $_SESSION['student_type'] = $row['student_type'];
//          $_SESSION['cert_type'] = $row['cert_type'];
//          $_SESSION['contact'] = $row['contact'];
//          $_SESSION['email'] = $row['email'];
//          $_SESSION['organization_1'] = $row['organization_1'];
//          $_SESSION['organization_2'] = $row['organization_2'];
//          $_SESSION['staffsign'] = $row['staffsign'];
//          $_SESSION['hodsign'] = $row['hodsign'];
         //$_SESSION['status'] = $row['status'];


        header('Location: staffrequest.php');
//          echo "1";
//         exit();
//     } else {
//         echo "0";
//         exit();
//     }
?>