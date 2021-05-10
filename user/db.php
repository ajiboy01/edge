<?php
    $servername='localhost';
    $username='ajiboy';
    $password='Haziqfird01';
    $dbname = "ajiboy";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>