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
        
        <div class="article">
		
		<div class="loginbar">
		
          <center><h2  style="color:#000066; font-size:30px"><span>Administrator</span> Login Forum</h2>
					<form action="#" method="post" id="sendemail">
						<ol>
						  <li>
							<label for="name"  style="color:#000066; font-size:18px">Admin Name</label>
							<input id="name" name="adminNameLogin" type="text" />
						  </li>
						  
						  <li>
							<label for="email"  style="color:#000066; font-size:18px">Admin Password</label>
							<input id="passwordSignup" name="adminPasswordLogin" type="password" />
						  </li>
						  
						  
						  <li><br/>
							<center><input type="submit" name="adminLoginBTN" id="adminLoginBTN" value="Login"  style="width:130px;height:30px;"/></center>
							
						  </li>
						</ol>
					  </form>
			</center>
			
		
		
        </div>
		
		</div>
		
		
      </div>
      
        <div class="gadget">
          
          <div class="clr"></div>
         
        </div>
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
			
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
			
			
				$array="SELECT * FROM registration";
				$result=mysql_query($array) or die("don't fine query.");
				
				if(isset($_POST['adminLoginBTN'])){
				while($row1 = mysql_fetch_row($result)){ 
						
						$adminUserName = $_POST['adminNameLogin'];
						$adminPassword = $_POST['adminPasswordLogin'];
						
						if('rezaul'==$adminUserName && 'rezaul'==$adminPassword){
						
							header("Location:../admindatapanel.php");
						
						}
						else{
						
							echo "User name or Password does not match !!!!";
						
						}
						
						
					}						
				}
				
				mysql_close($db);	
				
				?>


<div style="position:fixed; text-align:center; bottom:0px; width:100%; font-size:14px"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>

</body>
</html>
