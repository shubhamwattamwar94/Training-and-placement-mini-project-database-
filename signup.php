<html>
<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body >
	<div class="bar">
		<div class="div1">
			<img src="logo.jpg" alt="T&P" style="width:130px;height:110px;">
			

		</div>
		<div class="div2"><h1>Traning and Placement </h1>
		</div>
	</div>


	<div class="back" align="center">	
			<form method="POST" action="inssig.php">

				 <table class="table" ><tr><td>
				<table align=center>
					<caption style="font-size:25px">Create a Account</caption>
					<tr>
						<td><b>Roll Number:</b></td>
					    <td><input type="text" name="rno" placeholder="Roll number" class="p" style="width:80px"></td>
					</tr>
					<tr>
						<td><b>Full Name:</b></td>
						<td><input type="text" name="fname" placeholder="First name" class="p">
						<input type="text" name="mname" placeholder="Middle nane" class="p">
						<input type="text" name="lname" placeholder="Last name" class="p"></td>
					</tr>
					<tr>
				<td><b>Gender:</b></td>
				<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="femaale">Female</td>
				</tr>
			
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="pass" placeholder="password" class="p"></td>
					</tr>
					<tr>
						<td><b>Confirmed Password</b></td>
						<td><input type="password" name="cpass" placeholder="Confirmed password" class="p"></td>
					</tr>
					<tr>
						<td><b>Department:</b></td>
								<td><select name="dept"  class="p">
								<option value="Information Technology">Information Technology</option>			
								<option value="Computer Engineering">Computer Engineering</option>
								<option value="Electronics & Telicommunication">Electronics & Telicommunication</option>
								<option value="civil">Civil</option>
								<option value="Mechanical">Mechanical</option>
								</select></td>	
						</tr>
					
				<tr>
					<td><b>Date of Birtd:</b></td>
					<td><input type="date" name="date" class="p"></td>
				</tr>
					
				<tr>
					<td><b>Moblie Number:</b></td>
					<td><input type="text" name="mobile" placeholder="Mobile No." class="p"></td>

				</tr>
					
				<tr>
					<td><b>Email Id:</b></td>
					<td><input type="text" name="email"  placeholder="Email Address" class="p"></td>

				</tr>		

				<tr>
								<td><input type="submit" class="but" name="submit" value="Save"></td>
								<td><input type="submit" class="but" name="submit" value="Back To Login" formaction="login.php"></td>
				</tr>
				</table></td></tr></table>
			</form>
	</div>
 </body>
</html>
