<?php
session_start();

include "connection.php";

$newindex = $_GET['newindex'];

$query = mysqli_query($con, "SELECT * FROM attended WHERE newindex = '$newindex'") or die(mysqli_query($con,$query));

    $row = mysqli_fetch_assoc($query);
    if ($row){
         $status = $row['status'];
         $surname = $row['surname'];
         $firstname = $row['firstname'];
         $others = $row['others'];
         $newindex = $row['newindex'];
         $oldindex = $row['oldindex'];
         $programme = $row['programme'];
         $completion_year = $row['completion_year'];
         $certificate = $row['certificate'];
         $student_type = $row['student_type'];
         $cert_type = $row['cert_type'];
         $contact = $row['contact'];
         $email = $row['email'];
         $course = $row['course'];
         $department = $row['department'];
         $organization_1 = $row['organization_1'];
         $organization_2 = $row['organization_2'];
         $staffsign = $row['staffsign'];
      

    //     header('Location: hodrequest.php');
    //      echo "1";
    //     exit();
    // } else {
    //     echo "0";
    //     exit();

    // echo  $surname;
   
     }

     
include "connection.php";
$index_no = $_SESSION['index_no'];

$result = mysqli_query($con,"SELECT *  FROM student WHERE index_no = '{$newindex}'");
$row = mysqli_fetch_array($result);

$index_no = $row['index_no'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$department = $row['department'];
$faculty = $row['faculty'];
$course = $row['course'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KTU STUDENT TRANSCRIPT SYSTEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/icon.ico" rel="icon">
  <!-- <link href="assets/img/icon.ico" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
  #hero {
  width: 100%;
  height: 80vh;
  background: url("images/ff.jpeg") top center;
  background-size: cover;
  position: relative;
}
/* Input types */
.form-control{
  width: 90%;
  position: relative;
  left: 5%;
}
#submit{
  width: 90%;
  position: relative;
  left: 5%;
  bottom: 10px;
}
#submit:hover{
  background-color: lime;
  cursor: pointer;
  border-style: none;
   position: relative;
  bottom: 10px;
}
#log:hover{
  background-color: red;
  cursor: pointer;
}
h6{
  padding: 2px;
  margin: 2px;
}
</style>

 <style>
 table, td{
  width: 880px;
  border: 1px solid; 
  text-align: center;
  border-collapse: collapse;
  font-weight: bold;
  border-top-left-radius: 8px;
  border-top-left-radius: 8px;
  cursor: pointer;
  
  }

  .thead{
  border: 1px solid black;
  background-color: black;
  color: white;
  
}
th{
  background-color: black;
}

tr:nth-child(even) {
  background-color: white;
 
}

tr:nth-child(odd) {
  background-color: #eeeeee;
}
 </style>
</head>

<body style = "background-color: #eeeeee;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style = "color: #2F5878;">STUDENT TRANSCRIPT SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!-- <li><a href="hodhome.php">Home</a></li> -->
         <li><a href="hoddashboard.php">Dashboard</a></li>
         <li class="dropdown"><a href="#" class="active"><span>Request Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="active" href="hodresults.php?newindex=<?=$newindex?>">Detailed Result</a></li>
               <li><a href="hodtranscript.php?newindex=<?=$newindex?>">Transcript</a></li>
             
                
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <!-- <li><a href="about.php">About</a></li> -->
           
      </nav><!-- .navbar -->
 <a href="hodlogout.php" class="get-started-btn" id="log" style = "background-color: #2F5878; color: white;">Logout</a>
      </div>
    <div style = "width: 100%; height: 5px; background-color: #2F5878; position: relative; top: 20px;"></div>
  </header><!-- End Header -->
              
                
               <div style = "width: 20%; background-color: #eeeeee; position: relative; left: 10%; top: 100px;">
                   <h5>Student Detailed results</h5>

               </div>
               <div class = "card" style = "width: 80%; height: 100hv; background-color: white; position: relative; left: 10%; top: 100px;"><br>
                              <strong style = "text-align: center;">KOFORIDUA TECHNICAL UNIVERSITY</strong>
                           

                              <h6>Fullname: <?php echo $surname." ". $firstname." ".$others;?></h6>
                              <h6>Index Number: <?php echo $newindex;?></h6>
                              <h6>Course: <?php echo $course;?></h6>
                              <h6>Department: <?php echo $department;?></h6>
                              <h6>Certificate: <?php echo $certificate;?></h6>
                              
                              
                              <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                                             <h6 style = "padding: 0; margin: 0; text-align: center;">Level 100 First Semester Results</h6>
                              </div><br>

                              
                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                          <?php

include "connection.php";

$result = mysqli_query($con,"SELECT * FROM year1sem1 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gpa = $row['gpa'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gpa</td>"; 
        
 echo "</tr>";

        }

?>
                               
                         </tbody>    
                  </table>
                   
                  <!-- Level 100 Second Semester -->
                   <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                              <h6 style = "padding: 0; margin: 0; text-align: center;">Level 100 Second Semester Results</h6>
                              </div><br>

                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                                 <?php
include "connection.php";


$result = mysqli_query($con,"SELECT * FROM year1sem2 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gpa = $row['gpa'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gpa</td>"; 
        
 echo "</tr>";

        }
} else {
    echo "result not found";
}

?>             
                         
                         </tbody>    
                  </table>

                  <!-- Second Year -->
                  <!-- Second Year First semeter -->
                   <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                              <h6 style = "padding: 0; margin: 0; text-align: center;">Level 200 First Semester Results</h6>
                              </div><br>

                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                              <?php
include "connection.php";


$result = mysqli_query($con,"SELECT * FROM year2sem1 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gp = $row['gp'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gp</td>"; 
        
 echo "</tr>";

        }
} else {
    echo "result not found";
}

?>           
                         
                         </tbody>    
                  </table>

                   <!-- Second Year Second semeter -->
                   <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                              <h6 style = "padding: 0; margin: 0; text-align: center;">Level 200 Second Semester Results</h6>
                              </div><br>

                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                                <?php
include "connection.php";


$result = mysqli_query($con,"SELECT * FROM year2sem2 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gp = $row['gp'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gp</td>"; 
        
 echo "</tr>";

        }
} else {
    echo "result not found";
}

?>

                                                        
                         </tbody>    
                  </table>

                  <!-- Third Year -->
                   <!-- Third Year First semeter -->
                   <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                              <h6 style = "padding: 0; margin: 0; text-align: center;">Level 300 First Semester Results</h6>
                              </div><br>

                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                               <?php
include "connection.php";


$result = mysqli_query($con,"SELECT * FROM year3sem1 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gp = $row['gp'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gp</td>"; 
        
 echo "</tr>";

        }
} else {
    echo "result not found";
}

?>
                         
                         </tbody>    
                  </table>

                   <!-- Third Year First semeter -->
                   <div style = "width: 60%; position: relative; left: 20%; background-color: black; color: white;">
                              <h6 style = "padding: 0; margin: 0; text-align: center;">Level 300 Second Semester Results</h6>
                              </div><br>

                  <table class = "table table-bordered" style = "width: 90%; position: relative; left: 5%;">
                     <thead class="thead-dark">
                     <tr>
                        <th>CODE</th>
                        <th>TITLE</th>
                        <th>MARK</th>
                        <th>GRADE</th>
                        <th>CREDIT</th>
                        <th>GPA</th>

                              </tr>
                         </thead>   
                         <tbody>
                               <?php
include "connection.php";
 
$result = mysqli_query($con,"SELECT * FROM year3sem2 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
   $counter ++;

  //  $index_number = $row['index_number'];
   $code = $row['code'];
   $title = $row['title'];
   $mark = $row['mark'];
   $grade = $row['grade'];
   $credit = $row['credit'];
   $gp = $row['gp'];
   
echo "<tr>"; 
      echo "<td>$counter</td>"; 
      echo "<td>$code</td>";
      echo "<td>$title</td>";
      echo "<td>$mark</td>";
      echo "<td>$grade</td>";
      echo "<td>$credit</td>";
      echo "<td>$gp</td>"; 
        
 echo "</tr>";

        }
} else {
    echo "result not found";
}

?>
                         </tbody>    
                  </table>
               </div> <br><br><br><br><br>

 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KOFORIDUA TECHNICAL UNIVERSITY</h3>
            <p>
              KOFORIDUA NEW ROAD <br>
              POLY JUNCTION, KOFORIDUA<br>
              GHANA <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
             </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href=""></a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>
</html>