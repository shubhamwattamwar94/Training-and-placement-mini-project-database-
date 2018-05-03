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
						<div class="data" name="data">
						<div class="d1">
							<table class="table" >
							<tr>
							<td><b>Select Company Name:</b></td>
							<td><?php
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
							
							<tr><td></td><td><input type="submit" name="Apply for company" formaction="apply.php" class="but"></td></tr>
							</table>
					</div>
					</div>
		</form>
	</div>
 </body>
</html>





