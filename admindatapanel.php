<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo"><br/>
        <img src="images/headerTourLogo.png" width="300" height="90" alt="">
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span><span>Home</span></span></a></li>
          <li><a href="pages/visitingplace.php"><span><span>Visiting Place</span></span></a></li>
          <li><a href="pages/adminpanel.php"><span><span>Admin Panel</span></span></a></li>
          <li><a href="pages/about.php"><span><span>About Us</span></span></a></li>
          <li><a href="pages/signup.php"><span><span>Signup</span></span></a></li>
          <li><a href="pages/login.php"><span><span>Login</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  </div>
  
  
  <div style="background-color:#E1E0D5">
		<center><h1><b style="color:#990000">Administration Database Panel</b></h1></center>
          
		  <form action="" method="post">
		 <table width=100%> 
				  <tr> 
					<td valign="top">
										
							<table border="1" cellpadding="5" cellspacing="0">
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="registrationBTN" id="registrationBTN" value="Registration Details Data"  style="width:500px;height:100px; font-size:30px"  />
							
							</table>
				
				
				
					</td>
					<td valign="top">
							<table border="1" cellpadding="5" cellspacing="0">
								
								<input type="submit" name="tourDetails" id="tourDetails" value="Tour Details Data"  style="width:500px;height:100px; font-size:30px"  />
							
							</table>
					</td>
					
					
				  </tr>
		</table>
		</form>
		
		
		<?php
		
			if(isset($_POST['registrationBTN'])){
			
				header("Location:admindatabase.php");
			
			}
			if(isset($_POST['tourDetails'])){
			
				header("Location:admindatabasetour.php");
			
			}
		
		?>
		
            
</div>	
  
<div style="position:fixed; text-align:center; bottom:0px; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>
			

</body>
</html>