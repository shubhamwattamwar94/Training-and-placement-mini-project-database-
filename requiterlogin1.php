<html>
<head>

<link rel="stylesheet" href="m.css" type="text/css" />
</head>
<body >
	<div class="bar">
		<div class="div1">
			<img src="logo.jpg" alt="T&P" style="width:130px;height:110px;">
		</div>
		<div class="div2">
			<h1 >Traning and Placement</h1>
		</div>
	</div>
	
		<div class="login">		
			<form method="POST" action="rqlg.php" >
					
					
					<table align="center">
					<caption style="font-size:20px">Recuiter Login</caption>
					<tr><td></td></tr>
					<tr>
							<td>Company Name:
								
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
					</tr>		<tr><td colspan="2">
						<input type="password" name="pass" placeholder="password" style="height:25px">
					</td></tr>

					<tr><td>
					<input type="submit" name="login" value="Sign in" formaction="reqlogin.php"><br><br>
					</td></tr>
					<tr><td colspan="2"><p class="text">Username or password is incorrect</p></td></tr>
					
					<tr><td><a href="adminlogin.php">Admin</a></td>
					<td ><a href="login.php">Student</a></td></tr>
					</table>
				</div>
			</form>
		</div>
	</body>
</html>









