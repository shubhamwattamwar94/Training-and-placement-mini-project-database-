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
				<div class="data" >
						<div class="d1">
						<table>
						<tr><td>
					<?php
						
						$m=new mongo();
						$db=$m->tp;
						$coll=$db->student_details;

						$res=$coll->find();
						//echo $_SESSION['dept'];
							
						$f=0;
							echo "<table border=2px bgcolor=#fcfcfc>";

						foreach($res as $d)
						{
							if($d["rno"]==$_SESSION['user']  && $d['dept']==$_SESSION['dept'])
							{
						echo "<tr>";		
							echo "<th>"."Roll Number"."<td>"."<td>".$d["rno"]."</td>";
						echo "</tr>";
						
						echo "<tr>";		
							echo "<th>"."Name"."<td>"."<td>".$d["name"]."</td>";
						echo "</tr>";

						echo "<tr>";		
							echo "<th>"."Father Name"."<td>"."<td>".$d["father_name"]."</td>";
						echo "</tr>";
						
						echo "<tr>";		
							echo "<th>"."Mother Name"."<td>"."<td>".$d["mother_name"]."</td>";
						echo "</tr>";

						echo "<tr>";		
							echo "<th>"."Gender"."<td>"."<td>".$d["gender"]."</td>";
						echo "</tr>";
							
						
						echo "<tr>";		
							echo "<th>"."Blood Group"."<td>"."<td>".$d["blood_group"]."</td>";
						echo "</tr>";
						
						echo "<tr>";		
							echo "<th>"."Date Of Birth"."<td>"."<td>".$d["dob"]."</td>";
						echo "</tr>";


						echo "<tr>";		
							echo "<th>"."Email Id"."<td>"."<td>".$d["email"]."</td>";
						echo "</tr>";

						
						echo "<tr>";		
							echo "<th>"."Contact Number"."<td>"."<td>".$d["mobile"]."</td>";
						echo "</tr>";
						

						echo "<tr>";		
							echo "<th>"."Address"."<td>"."<td>".$d["address"]."</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<th>"."Department"."<td>"."<td>".$d["dept"] ."</td>";
						echo "</tr>";
						
						
						echo "<tr>";		
							echo "<th>"."Last Passing Marks"."<td>"."<td>".$d["lastpassm"]."</td>";
						
								
							echo "<th>"."Last passing Year"."<td>"."<td>".$d["lastpassyr"]."</td>";
						echo "</tr>";

						echo "<tr>";		
							echo "<th>"."12th or Diploma Passing Marks"."<td>"."<td>".$d["12passm"]."</td>";
						
								
							echo "<th>"."12th or Diploma passing Year"."<td>"."<td>".$d["12passyr"]."</td>";
						echo "</tr>";

						
						echo "<tr>";		
							echo "<th>"."10th Passing Marks"."<td>"."<td>".$d["10passm"]."</td>";
						
								
							echo "<th>"."10th passing Year"."<td>"."<td>".$d["10passyr"]."</td>";
						echo "</tr>";
							}
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





