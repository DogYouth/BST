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

      <input type="text" id="empid" name="empid"> <br> <br>
      
      <select id="opt" name="opt">
        <option value="Time In"> Time In</option>
        <option value="Time Out">Time Out</option>
    </select>
  <br> 
    <input type="button" value="Sign In" class="btnSignIn">
    
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