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
							<li class=mli1><input type="submit" formaction="viewinfo.php" value="View Informaation" class="btn"></li>
							<li class=mli1><input type="submit" formaction="logout.php" value="Logout" class="btn"></li>
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

						foreach($res as $d)
						{
							
							if($d["rno"]==$_SESSION['user']  && $d['dept']==$_SESSION['dept'])
							{
echo '<select name="data"  class="p">';			
						$coll->update(array($d['rno']=>$_SESSION['user']),array('$set'=>array($d['mobile']=>"123"),array("multi"=>"true")));

							echo '<option>'.$d[" "].'</option>';	
							
						echo "</select>";						
							}
						}

					?>
					</td></tr>
					<tr>
					<td>
						<input type="submit" formaction="update.php" value="Update Data" class="but"></td>
					</tr>
					</table>
					</div>
					</div>

		</form>
	</div>
 </body>
</html>





