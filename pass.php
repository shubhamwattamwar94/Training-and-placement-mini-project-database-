<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->signup;
	$res=$coll->find();


	session_start();
		
	$old=$_POST['oldpass'];
	$new=$_POST['newpass'];
	$conf=$_POST['confpass'];
	$f=0;
	
	echo $_SESSION['user'];

		foreach($res as $d)
	{			
		
		
	if($d['rn']==$_SESSION['user'] &&  $d['pass']==$old && d['dept']==$_SESSION['dept'])
		{
			
			echo $rn."<br>";

			ECHO $new . $conf ;
		
			$coll->update(array("rn"=>$_SESSION['user']),array('$set'=>array("pass"=>$new,"cpass"=>$conf)));
			echo "sucess";
		//header('location:newpass.php');
		
			$f=1;
		}
	}
	
	
	

	if($f==0)
		//header('location:changepass.php');
?>
