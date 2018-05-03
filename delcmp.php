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

	<form method="POST">
	<div class="back1" align="center">	
					<div class="hor">
					<ul>
						<li class=mli1><input type="submit" formaction="adminhome.php" value="Home" class="btn"></li>
						<li class=mli1><input type="submit" formaction="details.php" value="Student Details" class="btn"></li>
						<li class=mli1><input type="submit" formaction="delcmp.php" value="Remove Student Details" class="btn"></li>
						<li class=mli1><input type="submit" formaction="login.php" value="Logout" class="btn"></li>
					</ul>
					
					</div>

					<div class="ver">
					<ul>
						<li class=mli2><input type="submit" formaction="companydetails.php" value="Company Details" class="btn1"></li>
						<li class=mli2><input type="submit" formaction="showreqdetails.php" value="Recuiter Details" class="btn1"></li></li>
					</ul>
 
					</div>
					<div class="data" >
					  
							<DIV class="d1">   
							<table class="table"><tr><td>
								<table>
										<tr>
											<td><b>Type:</b></td>
											<td><select name="type"  class="p">
											<option value="rn">Roll Number</option>			
											<option value="year">Year</option>
											</select></td>
										
											<td><b>Department:</b></td>
											<td><select name="dept"  class="p">
											<option value="Information Technology">Information Technology</option>			
											<option value="Computer Engineering">Computer Engineering</option>
											<option value="Electronics & Telicommunication">Electronics & Telicommunication</option>
											<option value="civil">Civil</option>
											<option value="Mechanical">Mechanical</option>
											</select></td>

											<td>Enter data:<input type="text" name="data" placeholder="Enter data"></td>
											<td><input type="submit" value="Delete a Record" formaction="deletestd.php" class="but"></td>
										</tr>
								</table>
							</td></tr></table>
							</div></form>
						</div>
	</div>
 </body>
</html>
