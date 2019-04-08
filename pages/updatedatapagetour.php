<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
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
		<center><h1 style="color:#000000">Update Database Panel</h1></cente
		><caption><b style="font-size:30px; color:#000000">Tour List</b></caption><br/><br/>
          
		  <form action="" method="post">
		  <table width=100%> 
				  <tr> 
								<td valign="top">
												 
									
								</td>
								
					
					<td valign="top">
							<table border="1" cellpadding="5" cellspacing="0" width="33%">
									<tr>
									<th  style="color:#000000">Name</th><th  style="color:#000000">Address</th><th  style="color:#000000">Phone</th><th  style="color:#000000">Email Address</th>
									</tr>
									
									
											<?php
											
												session_start();
												@$id = $_SESSION['hideIDUpdate'];
												$tourCode = $_SESSION['tourCode'];
												$name = $_SESSION['name'];
												$address = $_SESSION['address'];
												$phone = $_SESSION['phoneNo'];
												$email = $_SESSION['email'];
												$destination = $_SESSION['destination'];
												$start = $_SESSION['start'];
												$end = $_SESSION['end'];
												$bugget = $_SESSION['bugget'];
												
												
												echo "<tr><td><input type='text' name='name' value='$name'>";
												echo "</td>";
												echo "<td><input type='text' name='address' value='$address'>";
												echo "</td>";
												echo "<td><input type='text' name='phone' value='$phone'>";
												echo "</td>";
												echo "<td><input type='text' name='email' value='$email'>";
												echo "</td></tr>";
												
												
												echo "<tr><th style='color:#000000'>Destination";
												echo "</th>";
												echo "<th style='color:#000000'>Start Date";
												echo "</th>";
												echo "<th style='color:#000000'>End Date";
												echo "</th>";
												echo "<th style='color:#000000'>Bugget Taka";
												echo "</th></tr>";
												
												echo "<tr><td><input type='text' name='destination' value='$destination'>";
												echo "</td>";
												echo "<td><input type='text' name='start' value='$start'>";
												echo "</td>";
												echo "<td><input type='text' name='end' value='$end'>";
												echo "</td>";
												echo "<td><input type='text' name='bugget' value='$bugget'>";
												echo "</td></tr>";
											
											?>
											
											
											
										
									
									
									
							
							</table>
					</td>
					
					
				  </tr>
		</table>
		
			<br/><center><input type="submit" name="updateSubmittour" value="Update" style="width:300px; height:50px" /></center>
		
		</form>
            
</div>	





				<?php
					@session_start();
						if(isset($_POST['updateSubmittour'])){
				
				
							$db=mysql_connect("localhost","root","") or die("can not connect.");
							mysql_select_db("tourismdatabase") or die("select database.");
							
												$tourCode1 = $_POST['tourCode'];
												$name1 =  $_POST['name'];
												$address1 =  $_POST['address'];
												$phone1 =  $_POST['phone'];
												$email1 =  $_POST['email'];
												$destination1 =  $_POST['destination'];
												$start1 =  $_POST['start'];
												$end1 =  $_POST['end'];
												$bugget1 = 	 $_POST['bugget'];				
				
				
				
				
				$updateCommandsubmit = "UPDATE tourdata SET fullName = '$name1',address='$address1',mobileNo = '$phone1', email = '$email1',dLocation ='$destination1',startDate='$start1',endDate='$end1',buggetTK='$bugget1'  WHERE tourCode ='$tourCode'";
			
				
				if(mysql_query($updateCommandsubmit)){
				echo "You are Successfully update row !!";
				header("Location:../admindatabasetour.php");
				}
				else{
				echo "Unsuccessfully update";}
				
				}
				
				
				
				@mysql_close($db);
				
				?>

  
<div style="position:fixed; text-align:center; bottom:0px; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>


			
			
			

</body>
</html>
