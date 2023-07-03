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
         $hodsign = $row['hodsign'];
      

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
  <header id="header" class="fixed-top" style = "background-color: #2F5878;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style = "color: white;">STUDENT TRANSCRIPT SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="staffhome.php" style = "color: white;">Home</a></li>
         <li><a href="staffdashboard.php" style = "color: white;">Dashboard</a></li>
         <!-- <li><a class="active" href="staffrequest.php" style = "color: white;">View Request</a></li> -->
         <li class="dropdown"><a href="#"><span style = "color: white;">Request Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="detailedresults.php?newindex=<?=$newindex?>">Detailed Result</a></li>
               <li><a href="detailedtranscript.php?newindex=<?=$newindex?>">Transcript</a></li>
             
                
</ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
         <li><a href="hodabout.php" style = "color: white;">About</a></li>
           
      </nav><!-- .navbar -->
 <a href="stafflogin.php" class="get-started-btn" style = "background-color: #2F5878;">Logout</a>
      </div>
    <div style = "width: 100%; height: 5px; background-color: #2F5878; position: relative; top: 20px;"></div>
  </header><!-- End Header --><br><br>

  

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
              <strong style = "width: 40%; position: relative; left: 15%;"><h5>Please Fill The Form Below:</h5></strong>
        <div class="row">
           <div class = "container card" style = "width: 75%; height: 100hv;">
             <strong style = "text-align: center;">KOFORIDUA TECHNICAL UNIVERSITY</strong>
             <h6>HOD-STUDENTS' SERVICES</h6>
             <h6>KOFORIDUA TECHNICAL UNIVERSITY</h6>
             <H6>KOFORIDUA-GHANA</H6>
             <img src="images/ktu.jpg" alt="KTU" style = "width: 100px; height: 100px; position: relative; left: 75%; bottom: 90px; padding: 0; margin: 0;">
             <strong style = "position: relative; bottom: 80px; left: 5%; padding: 0; margin: 0;"><u>APPLICATION FOR TRANSCRIPT/DETAILED RESULTS</u></strong>

             <!-- Form -->
               <form method = "POST" action = "staffrequestserver.php">
                <div class = "card" style = "width: 40%; position: relative; left: 5%;">
                   <h6>Please choose your current student status</h6>
                 <div class="form-group">
    <div class="form-check" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "surname" id="inputEmail4" placeholder = "Student Status" value = "<?php echo $status;?>" readonly>
    </div>
    </select>
     
    </div>
  </div>
  <div class="form-group" style="width:100%;">
    <div class="form-check" style="width:100%;">
      
    </div>
  </div>
</div><br>
<div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "surname" id="inputEmail4" placeholder = "Surname" value = "<?php echo $surname;?>" readonly>
    </div><br>
    <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "firstname" id="inputEmail4" placeholder="Firstname" value = "<?php echo $firstname;?>" readonly>
    </div><br>
    <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "others" id="inputEmail4" placeholder="Othername(s)" value = "<?php echo $others;?>" readonly>
    </div><br>
    <strong style = "width: 40%; position: relative; left: 5%;">IMPORTANT NOTICE:</strong>
    <h6 style = "width: 40%; position: relative; left: 5%;">HND students who entered the university in the years, 2008 and 2009 should indicate their  <strong>(I) NEW INDEX NUMBER (II) OLD INDEX NUMBER</strong> </h6><br>
     <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
      <input type="text" class="form-control" name = "newindex" id="inputEmail4" placeholder="NEW INDEX NO" value = "<?php echo $newindex;?>" readonly>
    </div><br>
     <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
      <input type="text" class="form-control" name = "oldindex" id="inputEmail4" placeholder="OLD INDEX NO" value = "<?php echo $oldindex;?>" readonly>
    </div><br>
  <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "programme" id="inputEmail4" placeholder="Programme" value = "<?php echo $programme;?>" readonly>
    </div><br>
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name = "completion_year" id="inputPassword4" placeholder="Year of Completion" value = "<?php echo $completion_year;?>" readonly>
    </div><br>
      <div class = "card" style = "width: 40%; position: relative; left: 5%;">
                   <h6>Were you awarded with certificate:</h6>
                    <div class="form-group col-md-6" style="width:100%;">
      <input type="text" class="form-control" name = "cert_type" id="inputEmail4" placeholder = "Certificate Type" value = "<?php echo $cert_type;?>" readonly>
    </div>
               <br>
  <div class="form-group">
    <div class="form-check">
     
    </div>
  </div>
</div><br>
  <div class="form-group col-md-4" style="width:100%;">
     <div class="form-group col-md-6" style="width:100%;">
      <input type="text" class="form-control" name = "oldindex" id="inputEmail4" value = "Morning" placeholder="Student Type" value = "<?php echo $student_type;?>" readonly>
    </div>
</div><br>
<strong style = "width: 40%; position: relative; left: 5%;">NOTE TO PAST STUDENT:</strong>
<h6 style = "width: 40%; position: relative; left: 5%;">Please indicate the class awarded on your certificate</h6>
  <div class="form-group" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
   <input type="text" class="form-control" name="certificate" id="inputAddress2" placeholder="Certificate Class" value = "<?php echo $certificate;?>" readonly>
</div>
  </div><br>
  <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
     <input type="text" class="form-control" name="contact" id="inputCity" placeholder="Contact, Mobile Phone No" value = "<?php echo $contact;?>" readonly>
    </div><br>
    <div class="form-row" style="width:100%;">
    <div class="form-group col-md-6" style="width:100%;">
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value = "<?php echo $email;?>" readonly>
    </div><br>
    <h6 style = "width: 40%; position: relative; left: 5%;">If you are applying for a transcript, indicate the address(es) of the organization(s) or institution(s) in the space(s) provided below:</h6>
    <div class="form-group col-md-6" style="width:100%;">
      <textarea name="organization_1" id="organization_1" cols="10" rows="5" class="form-control" placeholder = "Organization, Institution or Address..." value = "<?php echo $organization_1;?>" readonly></textarea>
    </div><br>
    <div class="form-group col-md-6" style="width:100%;">
      <textarea name="organization_2" id="organization_2" cols="10" rows="5" class="form-control" placeholder = "Organization, Institution or Address..." value = "<?php echo $organization_2;?>" readonly></textarea>
    </div><br>
    <div class="form-group col-md-2" style="width:100%;">
     <input type="text" class="form-control" name = "staffsign" id="inputZip" placeholder = "Head of division academic affairs Signed..." required>
    </div>
  </div><br>
  <div class="form-group col-md-2" style="width:100%;">
     <input type="text" class="form-control" name = "hodsign" id="inputZip" placeholder = "Head of student services Signed..." value = "<?php echo $hodsign;?>" readonly>
    </div>
  </div><br>
  
  </div>
  
  <button type="submit" id="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>

<!-- End of Form -->

           </div>
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