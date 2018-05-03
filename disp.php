<html>

<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body >
	<div class="bar">
		<div class="div1">
						<img src="logo.jpg" alt="T&P" style="width:130px;height:110px;"></a>
			

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
							<li class=mli1><input type="submit" formaction="logout.php" value="Logout <?php session_start(); echo $_SESSION['name'];?>" class="btn"></li>
						</ul>
						</div>

						<div class="ver">
						<ul>
						<li class=mli2><input type="submit" formaction="companydetailstd.php" value="Company Details" class="btn1"></li>
						<li class=mli2><input type="submit" formaction="reqform.php" value="Recuiter Form" class="btn1"></li>		
						</ul>
					</div>
					
				<div class="data">
					<div class="d1">
					<table><tr><td>
					<?php

						$m=new mongo();
						$db=$m->tp;
						$coll=$db->signup;

						$res=$coll->find();
						
						
						$f=0;
							echo "<table border=2px bgcolor=#fcfcfc>";

						foreach($res as $d)
						{
							if($d["rn"]==$_SESSION['user'] && $d['dept']==$_SESSION['dept'])
							{
						echo "<tr>";		
							echo "<th>"."Roll Number"."<td>"."<td>".$d["rn"]."</td>";
						echo "</tr>";
						
						echo "<tr>";		
							echo "<th>"."Name"."<td>"."<td>".$d["fname"]." ".$d["lname"]."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<th>"."Department"."<td>"."<td>".$d["dept"] ."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<th>"."Date Of Birth"."<td>"."<td>" .$d["date"]."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<th>"."Email"."<td>"."<td>".$d["email"] ."</td>";
						echo "</tr>";
						
						echo "<tr>";
							echo "<th>"."Mobile"."<td>"."<td>" .$d["mobile"]."</td>";
						echo "</tr>";
							}
						}
						echo "</table>";
					?></td></tr>

					<td><input type="submit" formaction="changepass.php" value="Change Password" class="but"></td></table>
					</div>
					</div>

		</form>
	</div>
 </body>
</html>





