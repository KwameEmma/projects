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
  <header id="header" class="fixed-top" style = "background-color: #2F5878;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style = "color: white;">STUDENT TRANSCRIPT SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="staffhome.php" style = "color: white;">Home</a></li>
         <li><a href="staffdashboard.php" style = "color: white;">Dashboard</a></li>
         <li class="dropdown"><a href="#" ><span style = "color: white;">Request Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="detailedresults.php">Detailed Result</a></li>
               <li><a class="active" href="detailedtranscripts.php">Transcript</a></li>
             
                
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <li><a class="active" href="staffabout.php" style = "color: white;">About</a></li>
           
      </nav><!-- .navbar -->
 <a href="login.php" class="get-started-btn" id="log" style = "background-color: #2F5878; color: white;">Logout</a>
      </div>
    <div style = "width: 100%; height: 5px; background-color: #2F5878; position: relative; top: 20px;"></div>
  </header><!-- End Header -->

  <main id="main"><br><br>
    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div> -->
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style = "max-height: 100em;">
            <img src="images/student.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Student Transcript System</h3>
            <p class="fst-italic">
              The transcript of records, also known as academic records or sometimes as student records, are closely linked with the learning agreement plan, which is an official document that specifies the courses, research and training/teaching activities you are supposed to achieve during your mobility.

              The learning agreement has to be signed and approved by both your home university and the host institution and any change should be agreed by all three parties (the universities and yourself).
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Most importantly it bears the official seal of the college or US University. A transcript is considered official as it comes from the registrar's office and not manipulated by any other party. It has the stamp of the university.</li>

              <li><i class="bi bi-check-circle"></i> A transcript contains all dates and majors information. Entire information about the dates you have attended the college, if or not the semesters have been completed all data about the majors and minors that you have opted for would be listed in the transcript.</li>

              <li><i class="bi bi-check-circle"></i>The transcript has calculated grade point average listed on it which is for the most recent semester. It also includes cumulative average that is calculated by division of the grade points of each course by total credit hours that have been attempted.</li>
            </ul>
             </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
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
         
          Designed by <a href="#"></a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style = "background-color: #2F5878;"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style = "background-color: #2F5878;"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style = "background-color: #2F5878;"><i class="bx bxl-instagram"></i></a>
        
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

</body>

</html>