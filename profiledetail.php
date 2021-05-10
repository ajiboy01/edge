
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "navbar.php" ?>
<?php include "header.php" ?>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
p{
    margin-top: 100px !important;
}
h2{
    margin-top: 50px !important;
}
        
    </style>
      <link href="assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>
    <body>

   
<div class="container">
<p>
<a>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a> 
</br>
<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
</p>


<h2> test </h2>
</div>





</script>
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