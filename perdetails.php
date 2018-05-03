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
				<div class="data" name="data">
						<div class="d1">
						<table>
						<tr><td>
					<?php
						session_start();
						$m=new mongo();
						$db=$m->tp;
						$coll=$db->student_details;

						$res=$coll->find();
						//echo $_SESSION['dept'];
							
						$f=0;
							echo "<table border=2px bgcolor=#fcfcfc>";

					echo "<tr><th>"."Roll No."."</th>"."<th>"."Name"."</th>"."<th>"."Father Name"."</th>"."<th>"."Mother Name"."</th>"."<th>"."Gender"."</th>"."<th>"."Blood Group"."</th>"."<th>"."Date Of Birth"."</th>"."<th>"."Email Id"."</th>"."<th>"."Contact Number"."</th>"."<th>"."Address"."</th>"."<th>"."Department"."</th>"."<th>"."Last Passing Marks"."</th>"."<th>"."Last passing Year"."</th>"."<th>"."12th or Diploma Passing Marks"."</th>"."<th>"."12th or Diploma passing Year"."</th>"."<th>"."10th Passing Marks"."</th>"."<th>"."10th passing Year"."</th>"."</tr>";
		
	
						foreach($res as $d)
						{
						echo "<tr>";		
							echo "<td>".$d["rno"]."</td>";
							echo "<td>".$d["name"]."</td>";
							echo "<td>".$d["father_name"]."</td>";
							echo "<td>".$d["mother_name"]."</td>";		
							echo "<td>".$d["gender"]."</td>";
							echo "<td>".$d["blood_group"]."</td>";
							echo "<td>".$d["dob"]."</td>";
							echo "<td>".$d["email"]."</td>";
							echo "<td>".$d["mobile"]."</td>";
							echo "<td>".$d["address"]."</td>";
							echo "<td>".$d["dept"] ."</td>";
							echo "<td>".$d["lastpassm"]."</td>";
							echo "<td>".$d["lastpassyr"]."</td>";
							echo "<td>".$d["12passm"]."</td>";
							echo "<td>".$d["12passyr"]."</td>";	
							echo "<td>".$d["10passm"]."</td>";
							echo "<td>".$d["10passyr"]."</td>";
						echo "</tr>";
							
						}
						echo "</table>";
					?>
					</td></tr>
					</table>
					</div>
					</div>

		</form>
	</div>
 </body>
</html>





