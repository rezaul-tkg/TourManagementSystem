<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />

	<?php
		
		if(isset($_POST['backUser'])){
		header("Location:memberarea.php");
		}
		?>
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
  </div>
  
  <div style="background-color:#E1E0D5">
		<center><h1 style="color:#000000">User Database Panel</h1></cente
		><caption><b style="font-size:30px; color:#000000">Tour List</b></caption><br/><br/>
          
		  
		  <table width=100% border="1" cellpadding="5" cellspacing="0"> 
				  <tr> 
						
							
					<th  style="color:#000000">Tour Code</th><th  style="color:#000000">Full Name</th><th  style="color:#000000">Address</th><th  style=
				"color:#000000">Mobile</th><th  style="color:#000000">Email</th><th  style="color:#000000">Destination</th><th  style="color:#000000">Start D</th><th  style="color:#000000">End D</th><th  style="color:#000000">Bugget</th>
				</tr>
									
				
						
						<?php
						session_start();
						@$userNameUpdate =$_SESSION['username'];
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
			
			
				$array="SELECT * FROM tourdata where userName='$userNameUpdate'";
				$result=mysql_query($array) or die("don't fine query.");
				while($row1 = mysql_fetch_row($result)){ 
						@print "<tr><td style='color:#000000; font-size:15px'>" . $row1[0] . "</td><td 
						style='color:#000000; font-size:13px'>".$row1[2]."</td><td style='color:#000000; font-size:13px'>" . $row1[3] ."</td><td style='color:#000000; 
						font-size:13px'>" . $row1[4] . "</td><td style='color:#000000; font-size:15px'>" . $row1[5] . "</td><td style='color:#000000; font-size:13px'>" 
						. $row1[6] ."</td><td style='color:#000000; font-size:13px'>".$row1[7]."</td><td style='color:#000000; font-size:13px'>" . $row1[8] ."</td><td 
						style='color:#000000; font-size:13px'>" . $row1[9] . "</td></tr>"; 
					}
				
				
				
				
				?>
											
				
									
									
					
		</table>
		<form action="" method="post">
		
			<br/><center><input type="submit" name="backUser" value="Back" style="width:300px; height:50px" /></center>
		
		</form>
	
		
            
</div>	


  
<div style="position:fixed; text-align:center; bottom:0px; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>


			
			
			

</body>
</html>
