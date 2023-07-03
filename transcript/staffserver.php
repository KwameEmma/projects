<?php
 session_start();
if (isset($_POST['submit'])) {
               # code...
     include "connection.php";
     $username = filter_var(htmlentities($_POST['username']));
     $password = filter_var(htmlentities($_POST['password']));

    $query = mysqli_query($con, "SELECT * FROM staff WHERE username = '$username' and password = '$password'") or die(mysqli_query($con,$query));

    $row = mysqli_fetch_assoc($query);
    if ($row) {
        
         $_SESSION['course'] = $row['course'];
         $_SESSION['username'] = $row['username'];
         $_SESSION['department'] = $row['department'];
         $_SESSION['role'] = $row['role'];
                  
        // echo $_SESSION['username'];
        // echo $_SESSION['department'];

        //     exit;
        header('Location:staffhome.php');
         echo "1";
        exit();
    } else {
        echo "0";
        exit();
    }
}
?>
