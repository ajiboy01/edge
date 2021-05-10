
<?php
session_start();

// initializing variables
$username = "";
$name = "";
$matrix = "";
$faculty = "";
$course = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'ajiboy', 'Haziqfird01', 'ajiboy');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $matrix = mysqli_real_escape_string($db, $_POST['matrix']);
  $faculty = mysqli_real_escape_string($db, $_POST['faculty']);
  $course = mysqli_real_escape_string($db, $_POST['course']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, name, matrix, faculty, course, password) 
  			  VALUES('$username', '$email', '$name', '$matrix', '$faculty', '$course', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>

    <div class="main">
    <div class="container1">
    <div class="signup-content">
    <center>
    <a class="" href="index.php">
          <img src="assets/img/logo.png" width="300" height="30" class="d-inline-block" alt="">
        </a>
        </center>
   </br></br>


  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  
  <?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

<div class="form-group">
  	  <label>Name</label>
  	  <input type="text" name="name" class="form-control" >
  	</div>

    <div class="form-group">
  	  <label>Matrix Number</label>
  	  <input type="text" name="matrix" class="form-control" >
  	</div>


<div class="form-group">	
  <label for="faculty">Faculty</label>
  <select class="form-control"  id="faculty" name="faculty">
  <option value="">--Select a faculty--</option>
    <option value="FPM">FPM</option>
    <option value="FPE">FPE</option>
    <option value="FSM">FSM</option>
    <option value="FSSK">FSSK</option>
	<option value="FTV">FTV</option>
	<option value="FSMP">FMSP</option>
	<option value="FSK">FSK</option>
	<option value="FBK">FBK</option>
	<option value="FSKIK">FSKIK</option>
	<option value="NCDRC">NCDRC</option>
  </select>

</div>

    <div class="form-group">
     <label>Course</label>
  	  <input type="text" name="course" class="form-control" >
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" class="form-control" >
  	</div>

  	<div class="form-group">
  	  <label>Username</label>
  	  <input type="text" name="username" class="form-control" >
  	</div>

  	<div class="form-group">
  	  <label>Password</label>
  	  <input type="password" class="form-control" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" class="form-control" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="form-submit" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>   
    </div> 
    </div>
</body>
</html>
