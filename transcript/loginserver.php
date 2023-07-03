<?php
 session_start();
if (isset($_POST['submit'])) {
               # code...
     include "connection.php";
     $email = filter_var(htmlentities($_POST['email']));
     $index_no = filter_var(htmlentities($_POST['index_no']));

    //  echo $email;
    //   echo  $index_no;

$query = mysqli_query($con, "SELECT * FROM student WHERE email ='$email'and index_no ='$index_no'") or die(mysqli_query($con));
    $row = mysqli_fetch_assoc($query);
    if ($row) {
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['index_no'] = $row['index_no'];
        $_SESSION['department'] = $row['department'];
        $_SESSION['contact'] = $row['contact'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['course'] = $row['course'];


        header('Location:sip.php');
         echo "1";
        exit();
    } else {
        echo "0";
echo "'<script>alert('Wrong username or Password')</script>";
//  header('Location:login.php');
        exit();
    }
}


?>