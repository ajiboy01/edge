<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
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
<div class="signup-content">

            <form method="post" enctype="multipart/form-data">
            <h2>Job Apply</h2>
    <div class="form-group">
    <label>Job Title</label>
    <input type="text" name="title" class="form-control" placeholder="e.g. Software Engineering">
    </div>

    <div class="form-group">
    <label>Name</label>
    <input type="text" name="fname" class="form-control"> 
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
    <label>Contact</label>
    <input type="text" name="contact" class="form-control">
    </div>
    <div class="form-group">
    <label>File Upload</label>
    <p> Please submit your latest resume </p>
    </br>
    <input type="File" name="file" > 
    </br>
    <p>(.pdf, .docx, .ppt, .jpeg only)</p>
    </div>
    </br>
    <input type="submit" name="submit" class="form-submit">

</form>
  
<?php 
$localhost = "localhost"; #localhost
$dbusername = "ajiboy"; #username of phpmyadmin
$dbpassword = "Haziqfird01";  #password of phpmyadmin
$dbname = "ajiboy";  #database name
 
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = '../admin/uploads';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into files(title,fname,name,email,contact) VALUES('$title','$fname','$pname','$email','$contact')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "Submission Successful. Your job application is processing (3-5 working days)";
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