<head>
<?php include "header.php"?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>job</title>

    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../include/assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<?php include "navbar.php"?>
       	
<div class="container">
   </br> </br> </br> </br></br></br></br>
   <center>
   <h4> Job Opportunity </h4>
   </center>
   </div>

  <?php 
    require 'dbconfig.php'; ?>
    <div class="column" >
   <div class="product-container">

        <?php
    $query = "SELECT * FROM products";
    $query_run = mysqli_query($connection, $query);
    $check_products = mysqli_num_rows($query_run) > 0;

    if($check_products)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?> 
             <div class="container">
             
				<div class="product-item">
					<div class="product-container">
					<div class="column" >
                   
				<center>
						<div class="card-body" >
					
       
						<img style="width: 60%" src="<?php echo $row['image']; ?>" class="product-image" >
						<br><br>
               
               
						<h2 > <?php   echo $row['name']; ?> </h2> 
                        <h2 >Faculty <?php   echo $row['barcode']; ?> </h2>     
                          
                        <p > <?php   echo $row['description']; ?> </p> 
                        <p >Salary <strong> <?php echo $row['price']; ?></strong></p>
                        <p > Available<strong> <?php   echo $row['qty']; ?></strong> </p>     
                      
                    <button onclick="myFunction()">Apply Now !!!</button>
					<script>
					function myFunction() {
					  alert("Please Register To Apply Job");
					}
					</script>

					</center>
                        </div>
                       </div>
                    </div>
				</div>
			
			</div>
        </div>
			</br>
            <?php
            
          
        }
    }
    else
    {
        echo "no product found";
    }


    ?>






<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
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
  </body>


</html>