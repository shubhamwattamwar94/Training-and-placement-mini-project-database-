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


	<div class="back1" align="center">	
			<form method="POST" >
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
						<div class="d1">
						
						<table class="table">
							<tr>
							<td>Company Name:</td>
								<td>
								<?php
									$m=new mongo();
									$db=$m->tp;
									$coll=$db->company;
									$res=$coll->find();
																		
										echo '<select name="cmpname"  class="p">';
									foreach($res as $d)
									{
										echo '<option values="cname">'.$d[cname].'</option>';
									}
									echo '</select>';
								?>
								</td>
								</tr>
								<tr>
									<td>
										Requiter Name:</td><td><input type="text" placeholder="Recuiter Name" name="rname">
									</td>
								</tr>
								<tr>
									<td>
										Password:</td><td><input type="password" placeholder="Password" name="pass">
									</td>
								</tr>
								
								<tr>
									<td>
										Requiter Name:</td><td><input type="password" placeholder="Confirm Password" name="cpass">
									</td>
								</tr>
								<tr>
									<td></td><td><input type="submit" value="Create User" formaction="addreqdetails.php" class="but">
									</td>
								</tr>
						</table>
						</form>
						</div>
					</div>
		</form>
	</div>
 </body>
</html>





