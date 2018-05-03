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
								<a href="main.php"><li class=mli1>Home</li></a>
								<a href="disp.php"><li class=mli1>Profile</li></a>
								<a href="stddetails1.php"><li class=mli1>Details</li></a>
								<li class=mli1>View Information</li>
								<a href="login.php"><li class=mli1>Logout</li></a>
							</ul>
					</div>

					<div class="ver">
						<ul>
							<a href=cmp.php><li class=mli2>Company Details</li></a>
							<li class=mli2>Recruiter Form</li>
						</ul>
					</div>
					
				<div class="data" name="data">
						<div class="d1">
					<?php
						$m=new mongo();
						$db=$m->tp;
						$coll=$db->signup;
						$res=$coll->find();
						
							
						$f=0;
							echo "<table border=2px bgcolor=#fcfcfc>";
						echo "<th>"."Roll Number"."</th>"."<th>"."Name"."</th>"."<th>"."Department"."</th>"."<th>"."Date Of Birth"."</th>"."<th>"."Email"."</th>"."<th>"."Mobile"."</th>";
						foreach($res as $d)
						{
						echo "<tr>";		
							echo "<td>".$d["rn"]."</td>"."<td>".$d["name"]."</td>"."<td>".$d["dept"] ."</td>"."<td>" .$d["date"]."</td>"."<td>".$d["email"] ."</td>"."<td>" .$d["mobile"]."</td>";
						echo "</tr>";
						}
						echo "</table>";
					?>
					</div>
					</div>

		</form>
	</div>
 </body>
</html>





