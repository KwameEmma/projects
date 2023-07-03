<?php
// session_start();
//session_destroy();
// if(isset($_SES5.3 RECOMMENDATION	


// $_SESSION['index_no'])){
//     header("location:login.php");
// }else
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
  <link href="toastr-master/toastr.css" rel="stylesheet"/>
              

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
     .submit{
                    width: 80%; 
                    height: 40px; 
                    cursor: pointer; 
                    background-color: #2F5878; 
                    color: white; 
                    border-style: none; 
                    border-radius: 50px; 
                    font-weight: bold;
                    font-size: 20px;
                   
     }
 .submit:hover{
                    background-color: lime;
     }
  </style>
</head>
<body>
               <div style = "width: 100%; height: 80px; background-color: #2F5878; text-align: center; font-weight: bold;"><br>
                              <h5 style = "padding: 5px; color: white;">STUDENT TRANSCRIPT SYSTEM | LOGIN</h5>
               </div>                        
               <center>
                     <div class = "card" style = "width: 30%; position: relative; top: 60px; height: 250px;  font-size: 50px;">

                     <form action="loginserver.php" method = "POST" autocomplete = "TRUE"><br><br>
                       <input type="email" name="email" id="email" class="email" placeholder = "Institutional Email" required style = "width: 80%; height: 40px; padding-top: 10px;  font-size: 50px; font-weight: bold;"><br><br>
                       <input type="password" name="index_no" id="index_no" class="index_no" placeholder = "Index Number" required style = "width: 80%; height: 40px;  font-size: 50px; font-weight: bold;"><br><br>
                     <input type="submit" name="submit" id="submit" class = "submit">

                     </form>
                      
    </div>
               </center>
               <br><br><br><br>

     <!-- ======= Footer ======= -->
  <footer id="footer"  style = "height: 130px;">

    <div class="footer-top" style = "height: 130px; position: relative; top: 20px;">
      <div class="container">
        

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
         <h6 style = "color: white; padding: 0; margin: 0;"> &copy; Copyright | 2021 | All Rights Reserved</h6>
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style = "background-color: #2F5878;"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style = "background-color: #2F5878;"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style = "background-color: #2F5878;"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus" style = "background-color: #2F5878;"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin" style = "background-color: #2F5878;"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="sweetalert/dist/sweetalert.js"></script>
  <script src="sweetalert/dist/sweetalert.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>
  <script src="sweetalert/dist/sweetalert.js"></script>
  <script src="toastr-master/toastr.js"></script>
     
 <script>
                  $(function(){
                   // Approve button
                    $("#submit").click(function(){
                        var userid = $(this).closest("tr").find(".id").val();
                        var approve = "submit";
                        $.ajax({
                            type:"post",
                            url:"loginserver.php",
                            data:{userid:userid,approve:approve},
                            success:function(result){
                                swal("",(result),"success");
                                setTimeout(function () {
                                    window.location.href = "dashboard.php";
                                },2000);
                            }
                        });
                    });
                });
    </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

               
</body>
</html>