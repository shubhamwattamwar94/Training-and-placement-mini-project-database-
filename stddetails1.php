<html>
<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body >
	<div class="bar">
		<div class="div1">
			<img src="logo.jpg" alt="T&P" style="width:130px;height:110px; ">
			

		</div>
		<div class="div2"><h1>Traning and Placement </h1>
		</div>
	</div>

	<form method="POST">
	<div class="back" align="center">	
			
					<div class="hor">
					<ul>
							<li class=mli1><input type="submit" formaction="main.php" value="Home" class="btn"></li>
							<li class=mli1><input type="submit" formaction="disp.php" value="Profile" class="btn"></li>
							<li class=mli1><input type="submit" formaction="stddetails1.php" value="Fill Details" class="btn"></li>
							<li class=mli1><input type="submit" formaction="viewinfo.php" value="My Details" class="btn"></li>
							<li class=mli1><input type="submit" formaction="logout.php" value="Logout <?php session_start(); echo $_SESSION['name']; ?>" class="btn"></li>
						</ul>
						
					</div>

					<div class="ver">
					<ul>
					<li class=mli2><input type="submit" formaction="companydetailstd.php" value="Company Details" class="btn1"></li>
					<li class=mli2><input type="submit" formaction="reqform.php" value="Recuiter Form" class="btn1"></li>		
					</ul>
					</div>
			<div class="data" >
			<div class="d1">
			
		<form method="POST" action="insstd.php">	 
	 <table class="table" ><tr><td>
	<table >
		<caption style="font-size:25px" >Fill Details</caption>
			<tr>
				<td ><b>Student Name:</b></td>
				<td><input type="text" name="name" placeholder="Student name" class="p"></td>
			</tr>
			<tr>
				<td><b>Father's Name:</b></td>
				<td><input type="text" name="fname" placeholder="Father's name" class="p"></td>
			</tr>
			<tr>
				<td><b>Mother's Name:</b></td>
				<td><input type="text" name="mname" placeholder="Mother's name" class="p"></td>
			</tr>
			<tr>
				<td><b>Gender:</b></td>
				<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="femaale">Female</td>
			</tr>
			<tr>
				<td><b>Date of Birtd:</b></td>
				<td><input type="date" name="date"  class="p"></td>
			</tr>
			<tr>
				<td><b>Blood Group:</b></td>
				<td><input type="radio" name="bld" value="A+">A+<input type="radio" name="bld" value="B+">B+<input type="radio" name="bld" value="O+">O+<input type="radio" name="bld" value="A+">AB+</td></tr>
			<tr><td></td>
				<td><input type="radio" name="bld" value="A-">A-<input type="radio" name="bld" value="B-">B-<input type="radio" name="bld" value="O-">O-<input type="radio" name="bld" value="A-">AB-</TD>
			</tr>		
			<tr>
				<td><b>Moblie Number:</b></td>
				<td><input type="text" class="p" name="mobile" placeholder="Mobile No."></td>
			</tr>	
			<tr>
				<td><b>Email Id:</b></td>
				<td><input type="text" name="email" class="p"  placeholder="Email Address"></td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td><textarea rows="5" cols="21" name="addr" class="p"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><b> Last Passing Year Marks(Aggregate in %)</b></td>
				<td><input type="text" name="marks" style="width:45px" class="p"></td>
				<td><b>Passing Year</b></td>
				<td><input type="text" name="plastyear" style="width:65px" class="p"></td>
			</tr>
			<tr>
				<td colspan="2"><b>12<sup>th</sup> Standard or Diploma Marks( in %)</b></td>
				<td><input type="text" name="m12th" style="width:45px" class="p"></td>
				<td><b>Passing Year</b></td>
				<td><input type="text" name="p12year" style="width:65px" class="p"></td>
			</tr> 
			<tr>
				<td colspan="2"><b>10<sup>th</sup> Standard Marks( in %)</b></td>
				<td><input type="text" name="m10th" style="width:45px"class="p"></td>
				<td><b>Passing Year</b></td>
				<td><input type="text" name="p10year" style="width:65px" class="p"></td>
			</tr>
			<tr>
			<tr>
			<tr>
				<td><td><input type="submit" value="Save" name="submit" class="but" formaction="insstd.php"></td>
			</tr>
	</table></td></tr></table>
	</form>
	</div>
					</div>

		
	</div>
 </body>
</html>
