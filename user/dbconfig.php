<?php/*
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "finalyear";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    // echo "database connected;
}
else 
{
    echo "connection failure";
}

*/

<?php
$server_name = "localhost";
$db_username = "ajiboy";
$db_password = "Haziqfird01";
$db_name = "ajiboy";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    // echo "database connected;
}
else 
{
    echo "connection failure";
}



?>