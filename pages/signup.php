<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo"><br/>
        <img src="../images/headerTourLogo.png" width="300" height="90" alt="">
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="../index.php"><span><span>Home</span></span></a></li>
          <li><a href="visitingplace.php"><span><span>Visiting Place</span></span></a></li>
          <li><a href="adminpanel.php"><span><span>Admin Panel</span></span></a></li>
          <li><a href="about.php"><span><span>About Us</span></span></a></li>
          <li><a href="signup.php"><span><span>Signup</span></span></a></li>
          <li><a href="login.php"><span><span>Login</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        
        <div class="article"><center>
          <h2 style="color:#000066; font-size:40px"><span>Signup</span> Forum</h2>
					  <form action="#" method="post" id="sendemail">
						<ol>
						  <li>
							<label for="name" style="color:#000066; font-size:18px">Full Name<h style="color:#FF0000">*</h></label>
							<input id="nameTXT" name="nameTXT" type="text" />
						  </li>
						  <li>
							<label for="name" style="color:#000066; font-size:18px">Mobile No</label>
							<input id="mobileNo" name="mobileNo" type="text" />
						  </li>
						  <li>
							<label for="userName" style="color:#000066; font-size:18px">User Name<h style="color:#FF0000">*</h></label>
							<input id="userName" name="userName" type="text" />
						  </li>
						  <li>
							<label for="email" style="color:#000066; font-size:18px">Email Address<h style="color:#FF0000">*</h></label>
							<input id="emailAddress" name="emailAddress" type="text" />
						  </li>
						  <li>
							<label for="password" style="color:#000066; font-size:18px">Password<h style="color:#FF0000">*</h></label>
							<input id="passwordSignup" name="passwordSignup" type="password" />
						  </li>
						  
						  
						  <li><br/>
							<center><input type="submit" name="signupBTN" id="signupBTN" value="Signup"   style="width:130px;height:40px;" /></center>
							
						  </li>
						</ol>
					  </form>
					  </center>
        </div>
      </div>
      
        <div class="gadget">
          
          <div class="clr"></div>
         
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    
     
        
      <div class="clr"></div>
    </div>
  </div>
  
</div>



	<?php
			
			
			if(isset($_POST['signupBTN'])){
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
				
				@$nameTXT = $_POST['nameTXT'];
				@$mobileNo = $_POST['mobileNo'];
				@$userName = $_POST['userName'];
				@$emailAddress = $_POST['emailAddress'];				
				@$passwordSignup = $_POST['passwordSignup'];
				
				$query = "insert into registration(userName,fullName,mobileNo,email,password) values 								
						                     ('$userName','$nameTXT','$mobileNo','$emailAddress','$passwordSignup')";
				if(mysql_query($query)){
				echo "<center><h style='color:#000099; font-size:18px'>Signup Successfully Done</h><center>";}
				else{
				echo "<center><h style='color:#000099; font-size:18px'>Failed to Signup. Change your user name and try again</h><center>";}
				
				}
				@mysql_close($db);
				
				?>	

<div style="position:fixed; text-align:center; bottom:0px; width:100%; font-size:14px"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>
</body>
</html>
