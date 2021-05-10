<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
 <title>Registration system PHP and MySQL</title>

 <link rel="stylesheet" href="assets/css/signup.css">
  <!-- Image and text -->
<center>
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" width="300" height="30" class="d-inline-block" alt="">
</center>
</head>
<body>
 <div class="headerlogin">
  <h2>Register</h2>
 </div>
 
 <form method="post" action="register.php">

  <?php echo display_error(); ?>

  <div class="main">
    
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container1">
            <div class="signup-content">
  <div class="form-group">
   <label>Username</label>
   <input type="text" class="form-input" name="username" value="<?php echo $username; ?>">
  </div>
  <div class="form-group">
   
   <input type="email" class="form-input" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
   <label>Password</label>
   <input type="password" class="form-input" name="password_1">
  </div>
  <div class="form-group">
   <label>Confirm password</label>
   <input type="password"  class="form-input" name="password_2">
  </div>
  <div class="form-group">
   <button type="submit" class="btn" name="register_btn">Register</button>
  </div>
  <p>
   Already a member? <a href="login.php">Sign in</a>
  </p>
 </form>

 </div> 
 </div> 
 </div>
  </div>
</body> 
</html>