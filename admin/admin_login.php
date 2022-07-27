<?php session_start();
 include"../scripts/connect_to_mysql.php";


  if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
  /* Set default invalid */ 

  $_SESSION['status'] = 'invalid';
}
 
 if ($_SESSION['status'] == 'valid') {
   echo "<script>window.location.href = '../user/user_login.php' </script>";
 }
 
 if (isset($_POST['login'])) {
    $manager = trim($_POST["uname"]);
    $password = trim($_POST["password"]);

    if (empty($manager) || empty($password)) {
      echo "Please fill up all the fields.";
    }
      else {
        $queryValidate = "SELECT *  FROM admin WHERE username = '$manager' AND password = '$password'";
        $sqlValidate = mysqli_query($con, $queryValidate);

        if (mysqli_num_rows($sqlValidate) > 0) {
          $_SESSION['status'] = 'valid';

          echo "<script>window.location.href = '../user/user_login.php' </script>";
        }
        else {
          $_SESSION['status'] = 'invalid';

          echo 'Invalid Credentials';
        }
      }
    }
?>


<html>
<head>
<title>Admin Log In </title>
<link rel="stylesheet" href="../styles/admin_login.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="container">

    <div id="pageContent">
    
    <h2> ADMIN LOGIN </h2>
      <h3> Sign in to start your session </h3>
      <br> <br>

      <form id="form1" name="loginForm" method="post" action="../admin/admin_login.php">

      <input type="text" id="uname" name="uname" required placeholder="Username"> <br> <br>
      
      <input type="password" id="password" name="password" placeholder="Password">
  <br> 
    <input name="login" type="button" value="Sign In" class="btnSignIn">
    
    <br>
  
  </form>
  <br>
    <br>
    <br>
    <br>

    </div>

</div>
</body>
</html>