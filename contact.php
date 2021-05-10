
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/signup.css">
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
    <h2>Contact Us</h2>
  

    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" > 
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
    <label for="subject">Subject</label>
    </br>
    <textarea id="subject" name="subject" placeholder="Write something.." class="form-control" style=""></textarea>
    </div>

    </br>
    <input type="submit" name="submit" class="form-submit">

</form>
 <?php 

 include "db.php";
 
if (isset($_POST["submit"]))
 {

  $title = $_POST["title"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
 
    #sql query to insert into database
    $sql = "INSERT into contact(title,name,email,subject) VALUES('$title','$name','$email','$subject')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "Thanks for contacting us";
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
