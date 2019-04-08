<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />

	<?php
												
								if(isset($_POST['updateBTN'])){
								
										$db=mysql_connect("localhost","root","") or die("can not connect.");
										mysql_select_db("tourismdatabase") or die("select database.");
									
									
										$array="SELECT * FROM registration";
										$result=mysql_query($array) or die("don't fine query.");
										
										$id = $_POST['hiddenID'];
									while($row1 = mysql_fetch_row($result)){
									
										if($row1[0]==$id){
										
											session_start();
											$_SESSION['hideID'] = $_POST['hiddenID']; 
											
											$_SESSION['userName'] = $row1[0]; 
											$_SESSION['fullName'] =  $row1[1];
											$_SESSION['phone'] =  $row1[2];
											$_SESSION['email'] =  $row1[3];
											$_SESSION['password'] =  $row1[4];
										
										}
									
									}
									
									
														
									header("Location:pages/updatedatapage.php");
								}
								
								?>

</head>
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
		<center><h1><b style="color:#000000">Administration Database Panel</b></h1></center>
         <center> <caption><b style='color:#000000; font-size:25px'>Registration List</b></caption></center><br/>
		  <center><table> 
				  <tr> 
					<td valign="top">
										
							<?php
			
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
			
			
				$array="SELECT * FROM registration";
				$result=mysql_query($array) or die("don't fine query.");
				
			
			
				echo "<table border='1' cellpadding='5' cellspacing='0'>"; 
				echo "<tr><th style='color:#000000; font-size:13px'><b>User Name</b></th><th style='color:#000000; font-size:13px'><b>Full Name</b></th><th style='color:#000000; font-size:13px'><b>Phone No</b></th><th style='color:#000000; font-size:13px'><b>Email Address</b></th><th style='color:#000000; font-size:13px'><b>Password</b></th><th style='color:#000000; font-size:13px'><b>Command</b></th></tr>";
				
				while($row1 = mysql_fetch_row($result)){ 
						@print "<tr><td style='color:#000000; font-size:15px'>" . $row1[0] . "</td><td style='color:#000000; font-size:13px'>" . $row1[1] ."</td><td style='color:#000000; font-size:13px'>".$row1[2]."</td><td style='color:#000000; font-size:13px'>" . $row1[3] ."</td><td style='color:#000000; font-size:13px'>" . $row1[4] . "</td>"."<td 
						name='commandTD'>  &nbsp;&nbsp;&nbsp;<form method='post' action=''><input type='submit' name='updateBTN' value='Update'>  &nbsp;&nbsp;&nbsp; 
						<input type='submit' name='deleteBTN' value='Delete'><input type='hidden' name='hiddenID' value='" . $row1[0] . "'></form>  &nbsp;&nbsp;&nbsp;
						</td></tr>"; 
					}						
				
				echo "</table>"; 
				mysql_close($db);	
				
				?>
				
				
				
								
								
				
				
				
				<?php
				

				
				if(isset($_POST['deleteBTN'])){
				
				$id=$_POST['hiddenID'];
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
				$deleteCommand = "delete from registration where userName='$id'";
				
				
				if(mysql_query($deleteCommand)){
				echo "<meta http-equiv='refresh' content='0'>";}
				else{
				echo "Unsuccessful delete";}
				
				}
				@mysql_close($db);
				?>
				
				
				
					</td>
					</tr>
		</table>
		<div>
		
		<a href="admindatapanel.php" ><button name="backBTN" style="width:300px;height:50px; font-size:25px; color:#000000" >Back </button></a>
	
		
						
								
		
		</div>
		</center>
            
</div>	


<div style="text-align:center; bottom:0px; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>
			

</body>
</html>