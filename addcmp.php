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
						<li class=mli2><input type="submit" formaction="addcmp.php" value="Add Company 
Details" class="btn1"></li>
						<li class=mli2><input type="submit" formaction="delcmpdetails.php" value="Remove Company
Details" class="btn1"></li>
<li class=mli2><input type="submit" formaction="showreqdetails.php" value="Recuiter Details" class="btn1"></li></li>
					</ul></div>
					<div class="data" >
					  
							<DIV class="d1">   
							<table class="table" ><tr><td>
								<table>
									<caption><b>Fill Company Details</b></caption>
									<tr>
										<td><b>Company Name:</b></td>
										<td ><input type="text" name="cmpname" placeholder="Company Name" class="p"></td>
									</tr>
									<tr>
										<td><b>Requirement Post:</b></td>
										<td ><input type="text" name="reqpost" placeholder="Requirement Post" class="p"></td>
									</tr>
									<tr>
										<td><b>Vacancies:</b></td><td><input type="text" name="vacancies" class="p" placeholder="Vacancies"></td>
									</tr>
									
									<tr>
										<td><b>Criteria :</b></td><td><input type="text" name="criteria" class="p" style="width:40px">	Year : </b><input type="text" name="year" class="p" style="width:40px"></td>
									</tr>
										<tr>
											<td><b>Email Id:</b></td>
											<td><input type="text" name="email"  placeholder="Email Address" class="p"></td>
										</tr>		
									<tr>
										<td><b>Contact Number:</b></td>
										<td ><input type="text" name="cno" placeholder="Contact Number" class="p"></td>
									</tr>
									<tr>
										<td><b>Other Information:</b></td>
										<td><textarea rows="5" cols="21" name="othrinfo" class="p"></textarea></td>
									</tr>
									<tr><td></td><td> 
										<input type="Submit" value="Save" formaction="inscmp.php" class="but">
									</td></tr>
								</table>
							</td></tr></table>
							</div></form>
						</div>
	</div>
 </body>
</html>




