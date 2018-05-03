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
							<li class=mli1 >Hi <?php session_start();;
									echo $_SESSION['user'];?></li>
							<li class=mli1><input type="submit" formaction="viewstdinfo.php" value="View Student Informaation" class="btn"></li>
							<li class=mli1><input type="submit" formaction="logout.php" value="Logout" class="btn"></li>
						</ul>
						</div>

						<div class="ver">
						<ul>
						<li class=mli2><input type="submit" formaction="seldtd.php" value="Selected Students" class="btn1"></li>		
						</ul>
					</div>
				
						
					<div class="data" name="data">
					<?php
						$m=new mongo();
						$db=$m->tp;
						$coll1=$db->student_select;
						$res=$coll1->find();

							$user=$_SESSION['user'];
							echo $user;

							echo "<table border=2px bgcolor=#fcfcfc>";
					echo "<tr><th>"."Roll No."."</th>"."<th>"."Name"."</th>"."<th>"."Father Name"."</th>"."<th>"."Mother Name"."</th>"."<th>"."Gender"."</th>"."<th>"."Blood Group"."</th>"."<th>"."Date Of Birth"."</th>"."<th>"."Email Id"."</th>"."<th>"."Contact Number"."</th>"."<th>"."Address"."</th>"."<th>"."Department"."</th>"."<th>"."Last Passing Marks"."</th>"."<th>"."Last passing Year"."</th>"."<th>"."12th or Diploma Passing Marks"."</th>"."<th>"."12th or Diploma passing Year"."</th>"."<th>"."10th Passing Marks"."</th>"."<th>"."10th passing Year"."</th>";
							
						foreach($res as $d)
						{
							if($d["companyname"]==$_SESSION['user'])
							{
							echo "<tr>";					
							echo "<td>".$d["rollno"]."</td>";
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

						}
						echo "</table>";
					?>
					</div>

		</form>
	</div>
 </body>
</html>


