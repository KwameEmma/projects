<?php

include "connection.php";

$status = filter_var(htmlentities($_POST['status']));
$surname = filter_var(htmlentities($_POST['surname']));
$firstname =filter_var(htmlentities($_POST['firstname']));
$others = filter_var(htmlentities($_POST['others']));
$newindex =filter_var(htmlentities($_POST['newindex']));
$oldindex =filter_var(htmlentities($_POST['oldindex']));
$programme = filter_var(htmlentities($_POST['programme']));
$completion_year = filter_var(htmlentities($_POST['completion_year']));
$certificate = filter_var(htmlentities($_POST['certificate']));
$student_type = filter_var(htmlentities($_POST['student_type']));
$cert_type = filter_var(htmlentities($_POST['cert_type']));
$contact = filter_var(htmlentities($_POST['contact']));
$email = filter_var(htmlentities($_POST['email']));
$organization_1 = filter_var(htmlentities($_POST['organization_1']));
$organization_2 = filter_var(htmlentities($_POST['organization_2']));


$result = mysqli_query($con,"SELECT * FROM student WHERE index_no = '$newindex'");
$row = mysqli_fetch_array($result);

$course = $row['course'];
$department = $row['department'];
$faculty = $row['faculty'];
$email = $row['email'];
$contact = $row['contact'];
$address = $row['address'];
$gender = $row['gender'];

$query = "INSERT INTO attended (status,surname,firstname,others,newindex,oldindex,programme,completion_year,certificate,student_type,cert_type,contact,email,organization_1,organization_2,department,faculty,course) 
VALUES ('$status','$surname','$firstname','$others','$newindex','$oldindex','$programme','$completion_year','$certificate','$student_type','$cert_type','$contact','$email','$organization_1','$organization_2','$department','$faculty','$course')";

    if (mysqli_query($con,$query)) {
        header('location: dashboard.php');
        
    } else {
         echo mysqli_error($con);
    }

?>

