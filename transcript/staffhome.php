<?php
   session_start();
if (!isset($_SESSION['username'])) {
   include "connection.php";
  header("location: stafflogin.php");
}

// $index_no = $_SESSION['username'];

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
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
<link rel="stylesheet" href="modals/dist/css/modals.css" type="text/css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style = "background-color: #eeeeee;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style = "background-color: #2F5878;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style = "color: white;">STUDENT TRANSCRIPT SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="staffhome.php" style = "color: white;">Home</a></li>
         <li><a href="staffdashboard.php" style = "color: white;">Dashboard</a></li>
         <li class="dropdown"><a href="#" style = "color: white;"><span>Request Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="detailedresults.php?newindex=<?=$newindex?>">Detailed Result</a></li>
               <li><a href="detailedtranscripts.php?newindex=<?=$newindex?>">Transcript</a></li>
             
                
</ul>
 <li class="dropdown"><a href="#"><span style = "color: white;">Settings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a data-modal="#modal3" href="#">Change Password</a></li>
               <!-- <li><a href="#">Change HOD Password</a></li>
                <li><a href="#">Add User</a></li> -->
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <li><a href="about.php" style = "color: white;">About</a></li>
           
      </nav><!-- .navbar -->

      <a href="stafflogin.php" class="get-started-btn" style = "background-color: #2F5878;" style = "color: white;">Logout</a>

    </div>
    <div style = "width: 100%; height: 5px; background-color: #2F5878; position: relative; top: 20px;"></div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
   
      <br><br>

      <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses"> <br><br>

      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style = "height: 300px;">
            <div class="course-item card"><br>
             <center>
               <div class = "img" style=" width: 100px; height: 100px; border-radius: 100px; background-color: #35424a;">
                <img src="images/avatar.png" alt="Avatar" style = "width: 100px; height: 100px; border-radius: 100px;">
             </div>
             </center>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                 
                </div>

                <h6>Staff Name: <? echo $_SESSION['username'];?></h6>
                <p>DEPARTMENT: <? echo $_SESSION['department'];?> </p>
                <p>ROLE: <? echo $_SESSION['role'];?> </p>


                <div class="trainer d-flex justify-content-between align-items-center">
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" style = "height: 300px; position: relative; right: 4%;">
            <div class="course-item card">
              <img src="" class="img-fluid" alt=""><br><br>

               <a class="bi bi-folder d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;" href = "detailedresults.php"> <span style = "position: relative; left: 5%;">Detailed Results</span></a> 

              <a class="bi bi-envelope d-flex align-items-center justify-content-center" style = "position: relative; right: 8%;" href="detailedtranscript.php"> <span style = "position: relative; left: 5%;">Transcript</span></a>

              <a data-modal="#modal3"class="bi bi-lock d-flex align-items-center justify-content-center"> <span style = "position: relative; left: 5%; cursor: pointer;">Change Password</span></a>

              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- <h4></h4> -->
                 
                </div>

                <h3>Student Detailed Results and Transcripts</h3>
                <p></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <!-- <div class="trainer-profile d-flex align-items-center card card">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div> -->
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" style = "height: 300px;">
            <div class="course-item card">
              <!-- <img src="assets/img/course-3.jpg" class="img-fluid" alt="..."> -->
              <div class="course-content" style= "width: 100%;">
                 <h4 style= "width: 100%; height: 40px; background-color: #2F5878;">Personal Information</h4> <br>
                    <a class="bi bi-envelope d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Email</span></a> 

                    <a class="bi bi-calendar d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Date of Birth</span></a>

                    <a class="bi bi-phone d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Telephone</span></a>

                    <a class="bi bi-gender-ambiguous d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Gender</span></a>

                    <a class="bi bi-flag d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Country</span></a>

                    <a class="bi bi-house d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Postal Address</span></a>

                    <a class="bi bi-map d-flex align-items-center justify-content-center" style = "position: relative; right: 2%;"> <span style = "position: relative; left: 5%;">Address</span></a>

                <!-- <h3>Available Programmers</h3>
                <p> BSc. Information Technology (Weekend) – Top-up <br> BSc. Computer Science (Weekend) – Top-up <br> Higher National Diploma in Computer Science (HND <br> Higher National Diploma Network..</p> -->
                <div class="trainer d-flex justify-content-between align-items-center">
                  <!-- <div class="trainer-profile d-flex align-items-center card">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div> -->
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->

    </section><!-- End Events Section -->

  </main><!-- End #main --> <br>
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
          &copy; Copyright <strong></strong>| All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
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


</body>

</html>