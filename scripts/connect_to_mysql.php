<?php  
$db_host = "localhost"; 
$db_username = "aybocaide";  
$db_pass = "wearedogyouth";  
$db_name = "baliwagsteel"; 

// Run the actual connection here  
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

         
?>