<?php 
session_start();
include "connection.php";
if(!isset($_SESSION['index_no'])){
    header("location:login.php");
    exit();
}
      ?> 
      <?php

include "connection.php";
$index_no = $_SESSION['index_no'];

$result = mysqli_query($con,"SELECT *  FROM student WHERE index_no = '{$index_no}'");
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
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Student Transcript System</title>
                <link rel="icon" href="images/icon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/sip.css">
    <link rel="stylesheet" href="fontawesome/font-awesome.css">
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
    
<style type="text/css">

    footer {
        height: 100px;
        position: absolute;
    }
    .me a:hover{
        background-color: #224B72;
        color: black;
    }
</style>

<script type="text/javascript">

    setInterval(changeColor, 500);
    function changeColor()
    {
        var x=document.getElementById("classfied");

        if(x.style.color=="white")
            x.style.color="red";
        else x.style.color="white";
    }

</script>
</head>
<body>
     <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="#" style = "color: white; position: relative;  top: 20px; font-size: 20px;">
                KTU - Student Transcript System
                </a>

                <div class="nav-collapse">

                    <ul class="nav pull-right">

                        <li class="me">
                            <a class="icon-power-off" href="siplogin.php"
                               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"  style = "color: white; position: relative; bottom: 7px; font-size: 15px;">
                                Logout
                            </a>

                            <form id="logout-form" action="index.php" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="K9lFs3FTw1BlDUwwSqSc2QaJfFKAgzSaPShx7PAu">                            </form>

                        </li>
                    </ul>

                    <ul class="nav pull-right">

                        <li class="me">
                            <a  class="icon-lock" href="#" style = "color: white; position: relative; bottom: 7px; font-size: 15px;"> Change Password</a>

                        </li>
                    </ul>

                    <ul class="nav pull-right">

                        <li class="" style = "color: white; position: relative; top: 2px; font-size: 15px;">
                                       <?php
                                       echo "".$_SESSION['index_no']."<br>"."";
                                       ?>
                            <!-- <a>04/2018/2501D
                                

                            </a> -->

                        </li>
                    </ul>

                </div>


            </div> <!-- /container -->

        </div> <!-- /navbar-inner -->

    </div> <!-- /navbar -->



    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li class=""><a href="http://sip.ktu.edu.gh/public/personal/information"><i class="icon-user"></i><span>Personal Information</span> </a> </li>
                    <li class=""><a href="#"><i class="icon-list-alt"></i><span>Introductory Letter</span> </a> </li>
                    <li class=""><a href="http://sip.ktu.edu.gh/public/resit"><i class="icon-list-alt"></i><span>Resit Registration</span> </a> </li>
                    <li class=""><a href="http://sip.ktu.edu.gh/public/course/registration"><i class="icon-list-alt"></i><span>Course Registration</span> </a> </li>
                    <li class=""><a href="http://sip.ktu.edu.gh/public/personal/account"><i class="icon-money"></i><span>Personal Account</span> </a></li>
                    <li class=""><a href="results.php"><i class="icon-file"></i><span>Published Results</span> </a> </li>
                    <li class=""><a href="transcripts.php"><i class="icon-file"></i><span>Transcript</span> </a> </li>
                    <li class=""><a href="http://sip.ktu.edu.gh/public/lecturer/evaluation"><i class="icon-file"></i><span>Lecturer Evaluation</span> </a> </li>

                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>

    
<center>
<div class="main">
   
    <div class="row justify-content-center">
    
            <div class="card" style = "width: 90%;">


                                <!-- <div class="widget-content">

                                <h5>Student Detailed results</h5>

</div> -->
<div class = "card" style = "width: 80%; height: 100hv; background-color: white; position: relative;"><br>
               <strong style = "text-align: center;">KOFORIDUA TECHNICAL UNIVERSITY</strong>
               

               <h6>Fullname: <?php echo $first_name ." ". $last_name;?></h6>
               <h6>Index Number: <?php echo $index_no;?></h6>
               <h6>Course: <?php echo $course; ?></h6>
               <h6>Department: <?php echo $department; ?></h6>
               <h6>Faculty: <?php echo $faculty;?></h6><br><br>

<div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 100 First Semester Results</h6>
               </div><br>

<table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
          
               
      <tr>
         <th>No</th>
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
   </table><br>
    
   <!-- Level 100 Second Semester -->
<div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 100 Second Semester Results</h6>
               </div><br>

<table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
              
      <tr>
        <th>No</th>
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
   </table><br>
   <!-- Second Year -->
   <!-- Second Year First semeter -->
<div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 200 First Semester Results</h6>
               </div><br>

   <table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
       <tr>
        <th>No</th>
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

// $index_number = ($_SESSION = $_GET['index_number']);

$result = mysqli_query($con,"SELECT * FROM year2sem1 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$counter ++;

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
   </table><br>

    <!-- Second Year Second semeter -->
<div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 200 Second Semester Results</h6>
               </div><br>

   <table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
              
       <tr>
        <th>No</th>
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

// $index_number = ($_SESSION = $_GET['index_number']);

$result = mysqli_query($con,"SELECT * FROM year2sem2 WHERE index_no = '$index_no' ORDER BY yearid DESC");
$counter = 0;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$counter ++;

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
   </table><br>

   <!-- Third Year -->
    <!-- Third Year First semeter -->
    <div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 300 First Semester Results</h6>
               </div><br>

   <table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
               
        <tr>
        <th>No</th>
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

// $index_number = ($_SESSION = $_GET['index_number']);

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
   </table><br>

    <!-- Third Year First semeter -->
    <div style = "width: 60%; background-color: black; color: white; border-radius: 20px;">
<h6 style = "padding: 0; margin: 0; text-align: center;">Level 300 Second Semester Results</h6>
               </div><br>

   <table class = "table table-bordered" style = "width: 90%;">
      <thead class="thead-dark">
              
       <tr>
        <th>No</th>
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

// $index_number = ($_SESSION = $_GET['index_number']);

$result = mysqli_query($con,"SELECT * FROM year3sem2  WHERE index_no = '$index_no' ORDER BY yearid DESC");
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

  <a href = "dashboard.php"><button style = "width: 30%; height: 40px; border-style: none; background-color: #2F5878; color: white;">Request Transcript</button></a><br>
</div>
                        
</center>
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12"><a href="#">  &copy; 2021  Koforidua Technical University - ICT Directorate</a>. </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>

     <script src="js/jquery-1.7.2.min.js"></script>
     <script src="js/bootstrap.js"></script>
</body>
</html>