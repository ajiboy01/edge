<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $sql = "INSERT INTO files (fname,email,contact)
     VALUES ('$fname','$email','$contact')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
