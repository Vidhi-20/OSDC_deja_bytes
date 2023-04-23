<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Registration</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel = "stylesheet" href = "assets/css/styles1.css">
  <link rel = "stylesheet" href = "assets/css/style.css">
</head>

<body>
  <div class = "form-page-container">
                <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="index.html">SAHAYOGI</a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="active" href="index.html">HOME</a></li>
              <li><a class="active" href="ed_schemes.html">EDUCATION</a></li>
              <li><a class = "active" href="health_main_eng.html">HEALTHCARE</a></li>
              <li><a  class="active" href="volunteer.html"><span>GET INVOLVED</span> </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

  </div>
      
<div class="box">
    <div class="bag">
    <div class = "form">
		<h2>Register your NGO <br></h2>
	<form name = "NGO" action = "ngoform.php" method = "POST" >
		<div class = "input-box"> 
		<input type="text" id="rno" name="rno" required placeholder="Registration No.">
    </div> 
    <div class = "input-box"> 
		<input type="text" id="nname" name="nname" required placeholder="NGO name">
    </div> 
    <div class = "input-box">
          
		<input type="text" id="pname" name="pname" placeholder="President Name">
        </div>
        <div class = "input-box">
		<input type="text" id="phone" name="phone" required placeholder="Contact">
        </div>
        <div class = "input-box">
        <input type = "text" id = "loc" name="loc"  placeholder="Locality">
        </div>
        <div class = "input-box">
        <input type = "text" id = "pin" name="pin"  placeholder="Pincode">        </div>
        <div class="field btn">
        <div class="btn-layer"></div>
        <input type="submit" name = "Register" value="Register">
        </div>
        </form>
      </div>
      </div>
</div>
<?php

      $host = "localhost";
      $user = "root";
      $pass = "";
      $db_name = "sehyogi";
      
      $con = mysqli_connect($host,$user,$pass,$db_name);
      
      if(mysqli_connect_errno())
      {
          die("Failed to connect to database".mysqli_connect_error());
      }
      if(isset($_POST['Register']))
      {
          $rno = $_POST['rno'];
          $nname = $_POST['nname'];
          $pname = $_POST['pname'];
          $phone = $_POST['phone'];
          $loc = $_POST['loc'];
          $pin = $_POST['pin'];

          $newngo = "INSERT INTO NGO (Registration_no, NGO_name, President, Contact,Locality,Pincode) 
          VALUES ('$rno', '$nname','$pname', '$phone', '$loc','$pin')";
          if(mysqli_query($con,$newngo))
          {
            die(" insert.".mysqli_error($con));
          }
      }
?>
</body>
</html>