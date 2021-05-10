
<!DOCTYPE html>
<html>
<head>
    <title>Loan</title>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
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
    <input type="text" name="name" class="form-control" > 
    </div>
	
	<div class="form-group">
    <label>No. IC</label>
    <input type="text" name="noic" class="form-control">
    </div>
	
	<div class="form-group">
	 <label>Gender</label><br>
	 <input type="radio" id="male" name="gender" value="male">
	 <label for="male">Male</label>
	 <input type="radio" id="female" name="gender" value="female">
	 <label for="female">Female</label><br>
	 </div>
	 
	<div class="form-group">
	 <label for="birthday">Birthday</label>
	  <input type="date" id="birthday" name="birthday" class="form-control">
	</div>
	
	
    <div class="form-group">
    <label>SSM No.</label>
    <input type="text" name="ssm" class="form-control">
    </div>
	
	<div class="form-group">
    <label>Telephone No.</label>
    <input type="text" name="contact" class="form-control">
    </div>
	
	<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    </div>
	
	
    <div class="form-group">
    <label>Current Address</label>
    <input type="text" name="address" class="form-control">
    </div>
	
	   <div class="form-group">
    <label>Reason</label>
    <input type="text" name="reason" class="form-control">
    </div>



    </br>
    <input type="submit" name="submit" class="form-submit">

</form>
 <?php 
 include "db.php";
 
if (isset($_POST["submit"]))
 {

  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $birthday = $_POST["birthday"];
  $noic = $_POST["noic"];
  $ssm = $_POST["ssm"];
  $address = $_POST["address"];
   $contact = $_POST["contact"];
    $email = $_POST["email"];
	$reason = $_POST["reason"];
 
    #sql query to insert into database
    $sql = "INSERT into loan(name,noic,ssm,address,birthday,gender,contact,email,reason) VALUES('$name','$noic','$ssm','$address','$birthday','$gender','$contact','$email','$reason')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "Submission Successful. Your loan submission is processing (3-5 working days)";
    }
    else{
        echo "Error";
    }
}
 
 
?>
</div>
</div>

</div>


</body>
</html>
 

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
