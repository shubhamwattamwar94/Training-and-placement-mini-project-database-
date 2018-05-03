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
							<h3>Welcome <?php
							
							echo $_SESSION['name'];
							
							?>	 Into Your Account</h3> 
					</div>

		</form>
	</div>
 </body>
</html>





