<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tourism Management system</title>

<link href="style.css" rel="stylesheet" type="text/css" />
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2 style="color:#000066; font-size:40px">Moment of Enjoy !</h2>
          <div class="clr"></div>     
          <img src="images/tourimage.jpg" width="650" height="260" alt="" />
          <p style="color:#000066; font-size:15px">Our Bangladesh is very beautyful country with many beautyful places. Places are Cox's Bazar , Sundarban Mangrove forest , Potenga , Sylhet tee bagan , Jaflong , Kuakata etc...</p>
         
        </div>
        
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star" style="color:#000066; font-size:30px"><span>&nbsp;&nbsp; &nbsp;&nbsp;<u>Login</span> Panel</u></h2>
          <div class="clr"></div>
		  <form action="" method="post">
          <ul class="sb_menu">
            <li  style="color:#000066; font-size:18px">User Name :<input type="text" name="userName"  /></li>
            <li  style="color:#000066; font-size:18px">Password &nbsp;&nbsp;: <input type="password" name="password"  /></li>
			<li><center> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="submit" name="submitLogin" value="Login"   style="width:100px;height:35px;" /></center></li>
            
          </ul>
		  </form>
		  <br/>
		  <h style="color:#000066; font-size:18px">If  u are not member yet then <a href="pages/signup.php" style="color:#003300"> Signup here ! </a></h>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  
  



			<?php
			
			
				$db=mysql_connect("localhost","root","") or die("can not connect.");
				mysql_select_db("tourismdatabase") or die("select database.");
			
			
				$array="SELECT * FROM registration";
				$result=mysql_query($array) or die("don't fine query.");
				
				if(isset($_POST['submitLogin'])){
				while($row1 = mysql_fetch_row($result)){ 
						
						$userName = $_POST['userName'];
						$password = $_POST['password'];
						
						if($row1[0]==$userName && $row1[4]==$password){
						
							session_start();
							$_SESSION['username']= $userName;
						
							header("Location:pages/memberarea.php");
						
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
