<?php
  if (isset($_POST['login'])) {
    $manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["empId"]);
  
    include"../scripts/connect_to_mysql.php";
    $sql = mysqli_query($con, "select id from admin where username='$manager'  limit 1");

    $existCount = mysqli_num_rows($sql);
    if ($existCount==1) {
      while ($row = mysqli_fetch_array($sql)) 
      { 
        $id = $row[$id]; 
      }
      
      $_SESSION["id"]=$id;
      $_SESSION["manager"]=$manager;

      header("location:../index.php");    
      exit();
    }

    else{
      echo 'The username or password is incorrect. Please try again. <br> <a href="admin_login.php"> Click Here </a>';
      exit();
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