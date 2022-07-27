

<html>
<head>
<title> Employee Time-in & Time-out </title>
<link rel="stylesheet" href="styles/index.css" type="text/css" media="screen" />
</head>
<!-- Client side page -->
<body>
<div align="center" id="container">
    <div id="pageContent">
      <br><br>
      
      <form id="form1" name="loginForm" method="post">
        <h3> DATE </h3>
        <h4> TIME </h4>
        <br> 
        <h3> Enter Employee ID</h3>
        <input type="text" id="empId" name="empId" required value=""> <br> <br>
      
        <select name="attendance" class="option">
            <option selected disabled> -- SELECT -- </option>
            <option value="Time In"> Time In</option>
            <option value="Time Out">Time Out</option>
        </select>
    <br> 
        <input name="login" type="button" value="Sign In" class="btnSignIn">
    <br>

    </form>

    <?php 
        error_reporting(0);
	    if(isset($_POST['login'])) {

         $empId = intval($POST['empId']);
         $getSelected = intval($POST['attendance']);
         echo "You have chosen: " .$empId;
	}
    ?>
    <br><br><br><br>


    </div>

</div>
</body>
</html>