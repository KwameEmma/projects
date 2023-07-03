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
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/sip.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/font-awesome.css">

    
<style type="text/css">

    footer {
        height: 100px;
        position: absolute;
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

        <div class="navbar-inner" style = "height: 70px;">

            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="#" style = "color: white; position: relative; top: 20px; font-size: 20px;">
                    KTU - Student Transcript System
                </a>

                <div class="nav-collapse">

                    <ul class="nav pull-right">

                        <li class="me">
                            <a class="#" href="index.php" style = "color: white; position: relative; bottom: 15px; font-size: 15px;">
                                Help
                            </a>

                          

                </div>


            </div> <!-- /container -->

        </div> <!-- /navbar-inner -->

    </div> <!-- /navbar -->
<div class="main">
   <center>
           <div class="account-container">
               <div class="content clearfix">

           
                <input type="hidden">  
                <h5><div style="text-align: center"><img src="images/icon.ico" alt="Evaluate" width="16" height="16" align="absmiddle"> KTU - Student Transcript System</div></h5>

                <hr>
                <h1>Login</h1>

                <div class="login-fields">

                    <p>Please provide your Login Details</p>
                        <div class="field">
                        <form action="loginserver.php" method = "POST" autocomplete = "TRUE">
                        <input id="username" type="text" class="login username-field " name = "email" placeholder = "Institutional Email" required autofocus>
                                            </div>
                               <div class="field">
                         <input id="password" type="password" class="login password-field " name = "index_no" placeholder = "Index Number" required>

                  </div> <!-- /password -->

                </div> <!-- /login-fields -->
               
                <div class="login-actions">
               <button type="submit" name = "submit" class="button btn btn-login btn-large">Sign In</button>
                </div> <!-- .actions -->
                </div>


        </div> <!-- /content -->
   </center>
</div>

     <script src="js/jquery-1.7.2.min.js"></script>
     <script src="js/bootstrap.js"></script>
</body>
</html>