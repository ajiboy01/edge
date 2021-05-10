<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<div class="container">  
<head>
<?php include "header.php"?>

<link rel="stylesheet" href="assets/css/signup.css">
  <!-- Image and text -->
<center>
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" width="300" height="30" class="d-inline-block" alt="">
</center>
  </a>
</nav>



    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   
</div>
</head>
</header>

<body>
        <form method="post" action="login.php">
        <?php echo display_error(); ?>
        
    <div class="main">
    
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container1">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login</h2>
                
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>   
                            <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>     
                    </form>
                    
                    <p class="loginhere">
                        Not register yet ? <a href="register.php" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>
        </div>
    </div>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>