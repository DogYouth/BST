<?php  
         if(isset($_POST["login"]))    
         {   
        if(isset($_POST["opt"]))    
        {   
            foreach ($_POST['opt'] as $selectedOpt)    
                print "You have selected $selectedOpt<br/>";   
        }   
    else  
        echo "Select an option first !!";   
    }   
      ?>  

<html>
<head>
<title> Employee Time-in & Time-out </title>
<link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
</head>
<!-- Client side page -->
<body>
<div align="center" id="container">
    <div id="pageContent">
      <br><br>
      <form id="form1" name="loginForm" method="post" action="index.php">
        <h3> DATE </h3>
        <h4> TIME </h4>
        <br> 
        <h3> Enter Employee ID</h3>
        <input type="text" id="empId" name="empId" required> <br> <br>
      
        <select id="opt" name="opt[]" size="2">
            <option value="Time In"> Time In</option>
            <option value="Time Out">Time Out</option>
        </select>
    <br> 
        <input name="login" type="button" value="Sign In" class="btnSignIn">
    <br>
        
    <button type="button" value=""disabled></button>
   <!-- output of selected option + Employee Name -->
    <input type="text">
    </form>
    <br><br><br><br>

    </div>

</div>
</body>
</html>