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
          <li><a href="login.php" style="color:#FFFFFF; background-color:#2E3242"><span><span><b><b>Signout</b></b></span></span>
		  
		  </a></li>
		  
		  
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
		<div align="right"> <b style="font-size:20px; color:#000000"> Welcome ,  </b>
						<?php 
									session_start();
									 @$userName = $_SESSION['username']; 
									 echo "<h style='color:blue; font-size:20px'>".$userName."</h>"; 
						 
						 ?>  
						 <form action="memberShowList.php" method="post">
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><button style="width:150px; height:50px">Show Tour List</button></a>
						 									
						 </form>
						 
						 			
									
		  </div>
          <center><h1 style="color:#000000"><b>Enter your Tour details</b></h1></center>
          

		<form action="" method="post">
			<div>
	
		  <table width=100%> 
				  <tr> 
				  
					<td valign="top">
						<ol>
						<li>
							<label for="name" style="font-size:24px"><b style="color:#000000">Personal Details</b></label>
						  </li>
						  <li>
							<label for="name"><b style="color:#000000">Full Name</b><h style="color:#FF0000">*</h></label>
							<input id="fullNameTXT" name="fullNameTXT" type="text" />
						  </li>
						  <li>
							<label for="name"><b style="color:#000000">Your Address</b><h style="color:#FF0000">*</h></label>
							<input id="address" name="addressTXT" type="text" />
						  </li>
						  <li>
							<label for="userName"><b style="color:#000000">Mobile No</b><h style="color:#FF0000">*</h></label>
							<input id="mobileNo" name="mobileNo" type="text" />
						  </li>
						  <li>
							<label for="email"><b style="color:#000000">Email Address</b><h style="color:#FF0000">*</h></label>
							<input id="emailAddress" name="emailAddress" type="text" />
						  </li>
						
						 
						</ol>					
						</td>
					<td valign="top">
							
						<ol>
						<li>
							<label for="name" style="font-size:24px"><b style="color:#000000">Tour Details</b></label>
						  </li>
						  
						  <li>
							<label for="name"><b style="color:#000000">Tour Destination Location</b><h style="color:#FF0000">*</h></label>
							<input id="dLocation" name="dLocation" type="text" />
						  </li>
						  <li>
							<label for="userName"><b style="color:#000000">Tour Start Date</b><h style="color:#FF0000">*</h></label>
							<input id="sDate" name="sDate" type="text" />
						  </li>
						   <li>
							<label for="userName"><b style="color:#000000">Tour End Date</b><h style="color:#FF0000">*</h></label>
							<input id="eDate" name="eDate" type="text" />
						  </li>
						  <li>
						  <table>
						  <tr>
						  <td><label for="email"><b style="color:#000000">Bugget (TK)</b><h style="color:#FF0000">*</h></label>
							<input id="buggetTK" name="buggetTK" type="text" style="width:78px"/></td><td><label for="email"><b style="color:#000000">Code <h style="color:#FF0000; font-size:10px">unique</h></b>
							<h style="color:#FF0000">*</h></label>
							<input id="codeTXT" name="codeTXT" type="text" style="width:78px"/></td>
						  </tr>
						  
						  </table>
						  </li>
						  
						 
						</ol>
									</td>
					
					<td valign="top">
								
						<ol>	
						  <li><br/><br/><br/><br/><br/><br/><br/>
							<input type="submit" name="submitBTN" id="submitBTN" value="Submit"   style="width:200px;height:50px;" />
							
						  </li>
						</ol>
					</td>
					
							
					</tr>
					</table>
					</div>
					</form>
				
			<?php	 
				 	
			
			if(isset($_POST['submitBTN'])){
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
				
				
				
				@$code= $_POST['codeTXT'];
				@$fullNameTXT = $_POST['fullNameTXT'];
				$address = $_POST['addressTXT'];
				@$userNameIN = $_POST['mobileNo'];
				@$emailAddress = $_POST['emailAddress'];				
				@$passwordSignup = $_POST['dLocation'];
				@$startDate = $_POST['sDate'];
				@$endDate = $_POST['eDate'];				
				@$buggetTK = $_POST['buggetTK'];
				
				$query = "insert into tourdata(tourCode,userName,fullName,address,mobileNo,email,dLocation,startDate,endDate,buggetTK) values 								
						                     
								
						('$code','$userName','$fullNameTXT','$address','$userNameIN','$emailAddress','$passwordSignup','$startDate','$endDate','$buggetTK')";
				if(mysql_query($query)){
				echo "<center><h style='color:#000099; font-size:18px'>Tour Data Successfully Done</h><center>";
				
				}
				else{
				echo "<center><h style='color:#000099; font-size:18px'>Faild to insert data. Please change Tour code and try again !!</h><center>";}
				
				}
				@mysql_close($db);
				
				?>	
		  
		  
		  
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  		
		
  
  
<div style=" text-align:center; width:100%"><h style="color:#4285F4">Tourism Management System <h style="color:#FF0000"> &copy; 2017 </h><h style="color:#349B39">Daffodil International University.</h></p></div>

</body>
</html>
