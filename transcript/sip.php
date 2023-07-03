<?php 
session_start();
include "connection.php";
if(!isset($_SESSION['index_no'])){
    header("location:login.php");
    exit();
}
      ?> 
     
<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title> KTU - Student Transcript System</title>
                <link rel="icon" href="images/icon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/sip.css">
    <link rel="stylesheet" href="fontawesome/font-awesome.css">

    
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
                            <a class="icon-power-off" href="index.php"
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

    

<div class="main">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    
                        <div class="row">

                            <div id="target-1" class="widget">

                                <div class="widget-content">

                                    <h1>Welcome to OSIS-SIP</h1><br>

                                    <p>OSIS-SIP is a portal that will allow you to access your personal student information. </p>
                                    <p>All student information is private and protected by Law. Be sure to close all portal windows when not in use.
                                        Student information is only available to the student and to college employees with a legitimate educational interest in a student.
                                        Do not share any information with others. Contact your registrar if you have questions.</p>

                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->

                        </div> <!-- /span12 -->
                </div>


     </div>
    </div>
</div>
</div>
</div>

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