<html>
<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body>
	<div class="bar">
		<div class="div1">
			<img src="logo.jpg" alt="T&P" style="width:130px;height:110px;">
		</div>
			<div class="div2">
				<h1>Traning and Placement </h1>
			</div>
	</div>
	<?PHP 
session_start(); 
$m=new mongo();
$db=$m->tp;
$coll=$db->student_details;
$res=$coll->find();

foreach($res as $d )
{
	if($d['name']=="shub")
	{	echo "<h1>hi</h1>";
	}
}
?>

			
	<form method="POST">
	<div class="back" align="center" >	
			
					<div class="hor">
						<ul>
							<li class=mli1><input type="submit" formaction="main.php" value="Home" class="btn"></li>
							<li class=mli1><input type="submit" formaction="disp.php" value="Profile" class="btn"></li>
							<li class=mli1><input type="submit" formaction="stddetails1.php" value="Fill Details" class="btn"></li>
							<li class=mli1><input type="submit" formaction="viewinfo.php" value="My Details" class="btn"></li>
							<li class=mli1><input type="submit" formaction="logout.php" value="Logout <?php  echo $_SESSION['name']; ?>" class="btn"></li>
						</ul>
						</div>

						<div class="ver">
						<ul>
						<li class=mli2><input type="submit" formaction="companydetailstd.php" value="Company Details" class="btn1"></li>
						<li class=mli2><input type="submit" formaction="reqform.php" value="Recuiter Form" class="btn1"></li>		
						</ul>
					</div>
					<div class="data" name="data" >
							
					</div>
					<div>
					<?php
						$m=new mongo();
						$db=$m->tp;
						$coll1=$db->student_select;
						$res=$coll1->find();
						foreach($res as $d)
						{
							if($_SESSION['user']==$d['rollno'] AND 	$_SESSION['dept']==$d['dept'])
							{
								echo "<h3>You are selected for ".$d['companyname']."</h3>";
							}
						}
					?>
					</div>

		</form>
	</div>
 </body>
</html>





