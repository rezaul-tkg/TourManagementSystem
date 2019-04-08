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
		<caption><b style="font-size:30px; color:#000000">Tour List</b></caption><br/><br/>
          
		  <form action="" method="post">
		  <table width=100%> 
				  <tr> 
								<td valign="top">
												 
									
								</td>
								
					
					<td valign="top">
							<table border="1" cellpadding="5" cellspacing="0" width="33%">
									<tr>
									<th  style="color:#000000">User Name</th><th  style="color:#000000">Full Name</th><th  style="color:#000000">Phone No</th><th  style="color:#000000">Email Address</th><th  style="color:#000000">Password</th>
									</tr>
									
									<tr>
											<?php
											
												session_start();
												$userName = $_SESSION['userName'];
												$fullName = $_SESSION['fullName'];
												$phone = $_SESSION['phone'];
												$email = $_SESSION['email'];
												$password = $_SESSION['password'];
												
												echo "<td><input type='text' name='userNameTXT' value='$userName'>";
												echo "</td>";
												echo "<td><input type='text' name='fullNameTXT' value='$fullName'>";
												echo "</td>";
												echo "<td><input type='text' name='phoneTXT' value='$phone'>";
												echo "</td>";
												echo "<td><input type='text' name='emailTXT' value='$email'>";
												echo "</td>";
												echo "<td><input type='text' name='passwordTXT' value='$password'>";
												echo "</td>";
											
											?>
										
									</tr>
									
									
							
							</table>
					</td>
					
					
				  </tr>
		</table>
		
			<br/><center><input type="submit" name="updateSubmit" value="Update" style="width:300px; height:50px" /></center>
		
		</form>
            
</div>	

				<?php
					@session_start();
					$id = $_SESSION['hideID'];
						if(isset($_POST['updateSubmit'])){
				
				
							$db=mysql_connect("localhost","root","") or die("can not connect.");
							mysql_select_db("tourismdatabase") or die("select database.");
							
							
							$updateUser = $_POST['userNameTXT'];
							$updateName = $_POST['fullNameTXT'];
							$updatePhone = $_POST['phoneTXT'];
							$updateEmail = $_POST['emailTXT'];
							$updatePass = $_POST['passwordTXT'];
				
				
				
				
				$updateCommand = "UPDATE registration SET userName='$updateUser',fullName = '$updateName',mobileNo = '$updatePhone', email = '$updateEmail',password = 
				'$updatePass'  WHERE userName ='$id'";
			
				
				if(mysql_query($updateCommand)){
				echo "You are Successfully update row !!";
				session_destroy();
				header("Location:../admindatabase.php");
				}
				else{
				echo "Unsuccessfully update";}
				
				}
				
				
				
				@mysql_close($db);
				
				?>

  
<div style="position:fixed; text-align:center; bottom:0px; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>


			
			
			

</body>
</html>
