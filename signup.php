
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
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   
</div>
</head>
</header>

<body>
            <form method="post" action="signup.php">
            <?php echo display_error(); ?>

    <div class="main">
    
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container1">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="username" placeholder="Your Name" value="<?php echo $username; ?>"/>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email"  placeholder="Your Email" value="<?php echo $email; ?>"/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password_1" id="password_1" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_2" id="password_2" placeholder="Repeat your password"/>
                        </div>
                       <!--   <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                   
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                    </form>
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