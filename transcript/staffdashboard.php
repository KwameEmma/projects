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
         $organization_1 = $row['organization_1'];
         $organization_2 = $row['organization_2'];
         $staffsign = $row['staffsign'];
        
     }

     
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
   <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/twitter-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
   <script src="assets/js/main.js"></script>
   <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
     <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="modals/dist/css/modals.css" type="text/css">


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

</style>

</head>

<body style = "background-color: #eeeeee;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style = "background-color:  #2F5878;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style ="color: white;">STUDENT TRANSCRIPT SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="staffhome.php" style ="color: white;">Home</a></li>
         <li><a class="active" href="staffdashboard.php" style ="color: white;">Dashboard</a></li>
          <!-- <li><a href="staffrequest.php">View Request</a></li> -->
           
 <li class="dropdown"><a href="#"><span style ="color: white;">Settings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a data-modal="#modal3" href="#">Change Staff Password</a></li>
               <!-- <li><a href="#">Change HOD Password</a></li>
                <li><a href="#">Add User</a></li> -->
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <li><a href="about.php" style ="color: white;">About</a></li>
           
      </nav><!-- .navbar -->
 <a href="stafflogin.php" class="get-started-btn" style ="background-color: #2F5878; color: white;">Logout</a>
      </div>
    <div style = "width: 100%; height: 5px; background-color: #2F5878; position: relative; top: 20px;"></div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
     </div>
  </section> -->
  
  <!-- End Hero --><br><br>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
             
        <div class="row">
           <div class = "container card" style = "width: auto; height: 100hv;">
             <strong style = "text-align: center;">KOFORIDUA TECHNICAL UNIVERSITY</strong>
             <h6>HOD-STUDENTS' SERVICES</h6>
             <h6>KOFORIDUA TECHNICAL UNIVERSITY</h6>
             <H6>KOFORIDUA-GHANA</H6> <br><br>
             
             <!-- Table -->

<table id="example" class="table table-striped table-bordered" style="width: 100%">       
        <tbody>
              <?php
include "connection.php";

$results = mysqli_query($con,"SELECT * FROM attended");

                $counter = 0;
while($row = mysqli_fetch_array($results)){
    
$counter++;

$newindex = $row['newindex'];
$surname = $row['surname'];
$firstname = $row['firstname'];
$others = $row['others'];
$email = $row['email'];
$department = $row['department'];
$faculty = $row['faculty'];
$course = $row['course'];

    echo "<tr>";   
    echo "<td>$counter<input type='hidden'> <td>$newindex</td></td>   <td>$surname $firstname $others</td>   <td>$email</td> <td>$department</td> <td>$faculty</td> <td>$course</td> <td><a href = 'staffrequest.php?newindex=$newindex'<button style = 'width: 20%; background-color: #2F5878; color: white; border-style: none; border-radius: 15px;'>View</button></a></td>";
    echo "</tr>";
      

}
                ?>
       <thead>
            <tr>
                <th>No</th>
                <th>Index Number</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Course</th>
            </tr>
        </thead>
       
        </tbody>
        
    </table>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- Change Staff Password -->
    <section class="containers">
        <div class="modal modal-small" data-modal-window id="modal3">
            <center>
                           <a class="close" data-modal-close>x</a>
	<!-- <h3>Modal Small</h3> -->
	 <h4>Change Staff Password</h4>
	    <!-- <button data-modal-close>Close</button><br><br> -->

                   <form action="resetstaffpassword.php" method ="POST">
                      <input type="text" placeholder = "Username" name = "username" style = "width: 80%; height: 35px;"><br><br>
                      <input type="password" placeholder = "Password" name = "password" style = "width: 80%; height: 35px;"><br><br>
                      <button name = "submit" style = "width: 80%; height: 35px; background-color: #2F5878; border-style: none; color: white; border-radius: 20px;
                      ">Change Password</button>
                   </form>
            </center>
        </div>

	</section>

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="staffhome.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="staffabout.php">About us</a></li>
             </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong></strong>| All Rights Reserved
        </div>
        <div class="credits">
         
          Designed by <a href="#"></a>
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
  <script type="text/javascript" src="js/datatables.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
 <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="js/responsive.bootstrap.min.js"></script>

	<!-- Javascript -->
	<script src="modals/dist/js/classList.js"></script>
	<script src="modals/dist/js/bind-polyfill.js"></script>
	<script src="modals/dist/js/modals.js"></script>

	<script>
		modals.init({
			modalActiveClass: 'active',
			modalBGClass: 'modal-bg',
			backspaceClose: true,
			callbackBeforeOpen: function () {},
			callbackAfterOpen: function () {},
			callbackBeforeClose: function () {},
			callbackAfterClose: function () {}
		});
	</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

    
    </script>>

</body>

</html>