<?php
session_start();
   
if (!isset($_SESSION['index_no'])) {
 
  header("location:index.php");
}

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

<style>
/*  Sets body width */
.containers{
max-width: 40em;
width: 88%;
margin-left: auto;
margin-right: auto;
}
</style>

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
          <li><a class="active" href="home.php" style = "color: white;">Home</a></li>
         <li><a href="dashboard.php" style = "color: white;">Dashboard</a></li>
         <li><a href="siplogin.php" style = "color: white;">SIP</a></li>
         <li><a href="http://vle.ktu.edu.gh/" style = "color: white;">VLE</a></li>
         <li><a href="http://osis.ktu.edu.gh/auth/auth_login_index.php" style = "color: white;">OSIS</a></li>
         <li class="dropdown"><a href="#"><span style = "color: white;">Request Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="results.php">Detailed Result</a></li>
               <li><a href="transcripts.php">Transcript</a></li>
             
                
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <li><a href="about.php" style = "color: white;">About</a></li>
           
      </nav><!-- .navbar -->

      <a href="logout.php" class="get-started-btn" style = "background-color: #2F5878;">Logout</a>

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

<h6 style = "position: relative; bottom: 20px; color: black;">STUDENT NAME: <?php echo $_SESSION['first_name'] ." ". $_SESSION['last_name'];?></h6>
<h6 style = "position: relative; bottom: 20px; color: black;">INDEX NUMBER: <?php echo $_SESSION['index_no'];?></h6>
<h6 style = "position: relative; bottom: 20px; color: black;">DEPARTMENT: <?php echo $_SESSION['department'];?></h6>
<h6 style = "position: relative; bottom: 20px; color: black;">COURSE: <?php echo $_SESSION['course'];?></h6>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" style = "height: 300px;">
            <div class="course-item card">
              <img src="" class="img-fluid" alt=""><br><br>

               <a href = "results.php" class="bi bi-folder d-flex align-items-center justify-content-center" style = "position: relative; right: 2%; color: #2F5878;"> <span style = "position: relative; left: 5%; color: #2F5878;">Detailed Results</span></a> 

              <a href = "transcripts.php" class="bi bi-envelope d-flex align-items-center justify-content-center" style = "position: relative; right: 8%; color: #2F5878;"> <span style = "position: relative; left: 5%; color: #2F5878;">Transcript</span></a>

              <a data-modal="#modal4" href = "#" class="bi bi-lock d-flex align-items-center justify-content-center" style = "color: #2F5878;"> <span style = "position: relative; left: 5%; color: #2F5878;">Change Password</span></a>

              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- <h4></h4> -->
                 
                </div>

                <h3>Student Detailed Results and Transcripts</h3>
                <p></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" style = "height: 300px;">
            <div class="course-item card">
             
              <div class="course-content" style= "width: 100%;">
                 <h4 style= "width: 100%; height: 40px; background-color: #2F5878;">Personal Information</h4> <br>
                <a class="bi bi-envelope d-flex align-items-center justify-content-center" style = "position: relative; right: 2%; bottom: 5px; color: #2F5878;"> <h5 style = "padding: 3px; margin: 0;"><?php echo $_SESSION['email'];?></h5></a> <br>

                <a class="bi bi-phone d-flex align-items-center justify-content-center" style = "position: relative; left: -13%; color: #2F5878;"> <h5 style = "padding: 3px; margin: 0;"><?php echo $_SESSION['contact'];?></h5></a><br>
    
                    <a class="bi bi-gender-ambiguous d-flex align-items-center justify-content-center" style = "position: relative; left: -33%; color: #2F5878;"><h5 style = "padding: 3px; margin: 0;"><?php echo $_SESSION['gender'];?></h5></a><br>
          
             <a class="bi bi-map d-flex align-items-center justify-content-center" style = "position: relative; left: -30%; color: #2F5878;"> <h5 style = "padding: 3px; margin: 0;"><?php echo $_SESSION['address'];?></h5></a>

                
                <div class="trainer d-flex justify-content-between align-items-center">
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->

    </section><!-- End Events Section -->

  </main><!-- End #main --> <br>
  <!-- ======= Footer ======= -->

     <!-- Change HOD Password -->
                <section class="containers">
        <div class="modal modal-small" data-modal-window id="modal4">
            <center>
                           <a class="close" data-modal-close>x</a>
	<!-- <h3>Modal Small</h3> -->
	 <h4>Change Password</h4>
	    <!-- <button data-modal-close>Close</button><br><br> -->

                   <form action="resetstudentpassword.php" method ="POST">
                      <input type="email" placeholder = "Student Email" name = "email" style = "width: 80%; height: 35px;"><br><br>
                      <input type="password" placeholder = "Password" name ="password" style = "width: 80%; height: 35px;"><br><br>
                      <button name = "submit" style = "width: 80%; height: 35px; background-color: #2F5878; border-style: none; color: white; border-radius: 20px;
                      ">Change Password</button>
                   </form>
            </center>
        </div>

	</section>
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
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style = "background-color: #2F5878;"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style = "background-color: #2F5878;"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style = "background-color: #2F5878;"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style = "background-color: #2F5878;"><i class="bi bi-arrow-up-short"></i></a>

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