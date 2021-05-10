<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<?php include "header.php" ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="dist/automodal-default-theme.css">
<link rel="stylesheet" href="dist/automodal.css">
<link rel="stylesheet" href="assets/css/signup.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<script src="dist/automodal.js"></script>
</head>
<body>

  <?php include "navbar.php" ?>
  <div class="main">
<div class="container1">
</br>
<div class="signup-content">

    <form method="post" enctype="multipart/form-data">
    <h2>Loan</h2>
  

    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" disabled > 
    </div>
	
	<div class="form-group">
    <label>No. IC</label>
    <input type="text" name="noic" class="form-control" disabled>
    </div>
	
	<div class="form-group">
	 <label>Gender</label><br>
	 <input type="radio" id="male" name="gender" value="male" disabled>
	 <label for="male">Male</label>
	 <input type="radio" id="female" name="gender" value="female" disabled>
	 <label for="female">Female</label><br>
	 </div>
	 
	<div class="form-group">
	 <label for="birthday">Birthday</label>
	  <input type="date" id="birthday" name="birthday" class="form-control" disabled>
	</div>
	
	
    <div class="form-group">
    <label>SSM No.</label>
    <input type="text" name="ssm" class="form-control" disabled>
    </div>
	
	<div class="form-group">
    <label>Telephone No.</label>
    <input type="text" name="contact" class="form-control" disabled> 
    </div>
	
	<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" disabled>
    </div>
	
	
    <div class="form-group">
    <label>Current Address</label>
    <input type="text" name="address" class="form-control" disabled>
    </div>
	
	   <div class="form-group">
    <label>Reason</label>
    <input type="text" name="reason" class="form-control" disabled>
    </div>



    </br>
    <a href="register.php" class="w3-btn w3-teal">Apply Now !</a>
  
</div>
</div>
</div>
  
<div data-automodal-id="firstModal" data-automodal-options="autoDelay: 1000, autoReset: false">
		<button data-automodal-action="close" class="automodal-close"></button>

    <?php include "register.php" ?>
</div>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>