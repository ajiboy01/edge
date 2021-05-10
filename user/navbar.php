  
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

     <!-- <h1 class="logo mr-auto" > <img href="index.php" src="../assets/img/logo.png"/></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href= "job.php">Job</a></li>
          <li><a href="inspirational.php">Inspirational</a></li>
          <li><a href="loan.php">Loan</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li class="drop-down"><li class="drop-down"><a>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a> 
            <ul>
           
            <li><a href="logout.php" >Sign Out</a></li>
           
                </ul>
          </li>
          
        </ul>
      </nav><!-- .main-nav-->
    
    </div>
  </header><!-- End Header -->
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
  
    <div class="container d-flex justify-content-end">

   
      <div class="social-links">
      
   <a href="https://twitter.com/edgeupsi1?fbclid=IwAR0YuFh47RoycfdyTVg92RTlT8j0sEAqKtP30wo13SHF9MD_TTJ4mREhdBc" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/EDGEUPSI/" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/EDGEUPSI/?fbclid=IwAR1ABi5NYqSKLSsAlvK0frGtO01C6ZF0jSHbhYCw_B9xhQNt0Y5uyqu0LAM" class="instagram"><i class="fa fa-instagram"></i></a>
        
      </div>
    </div>
  </div>
