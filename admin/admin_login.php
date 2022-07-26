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
    
      <h2> Sign in to start your session </h2>
      <br> <br>

      <form id="form1" name="loginForm" method="post" action="../admin/admin_login.php">

      <h3> DATE </h3>
      <h4> TIME </h4>
  <br> 
      <h3> Enter Employee ID</h3>

      <input type="text" id="empId" name="empId" required> <br> <br>
      
      <select id="opt" name="opt">
        <option value="Time In"> Time In</option>
        <option value="Time Out">Time Out</option>
    </select>
  <br> 
    <input name="login" type="button" value="Sign In" class="btnSignIn">
    
    <br>
    <input type="hidden">

  
  </form>
  <br>
    <br>
    <br>
    <br>

    </div>

</div>
</body>
</html>