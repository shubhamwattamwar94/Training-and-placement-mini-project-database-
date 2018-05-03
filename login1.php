<html>
<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body >
	<div class="bar">
		<div class="div1">
			<img src="logo.jpg" alt="T&P" style="width:130px;height:110px;">
		</div>
		<div class="div2">
			<h1 >Traning and Placement</h1>
		</div>
	</div>
	
		<div class="login">		
			<form method="POST" action="lg.php" >
					
					
					<table align="center">
					<caption style="font-size:20px">Login Into Your Account</caption>
					<tr><td>
						<input type="text" name="uname" placeholder="username" style="height:25px">
					</td></tr>
					
					<tr><td>
						<input type="password" name="pass" placeholder="password" style="height:25px">
					</td></tr>
					<tr>
						<td>Department:</td>
					</tr>
					<tr>
								<td><select name="dept"  class="p">
								<option value="Information Technology">Information Technology</option>			
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Electronics & Telicommunication">Electronics & Telicommunication</option>
								<option value="civil">Civil</option>
								<option value="Mechanical">Mechanical</option>
								</select></td>
					</tr>
					
					<tr><td>
						<input type="submit" name="login" value="Sign in"><br><br>
					</td></tr>
					<tr><td><p class="text">Username or password is incorrect</p></td></tr>
					<tr><td><a href="signup.php">Create a new account</a> </td></tr>
					<tr><td ><a href="adminlogin.php">Admin</a></td>
					<td><a href="requiterlogin.php">Requiter</a></td></tr>
					</table>
				</div>
			</form>
		</div>
	</body>
</html>









