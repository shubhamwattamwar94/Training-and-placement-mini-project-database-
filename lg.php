<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->signup;
	$res=$coll->find();

	$un=$_POST['uname'];
	$pass=$_POST['pass'];
	$dept=$_POST['dept'];
	$f=0;
		foreach($res as $d)
	{	
		
	if($d['rn']==$un && $d['pass']==$pass && $d['dept']==$dept)
		{
		session_start();
		session_regenerate_id();
		$_SESSION['user']=$un;
		$_SESSION['name']=$d['fname'];
		$_SESSION['dept']=$dept;
		
		session_write_close();
		header('location:welusr.php');
			$f=1;
		}
	}
	if($f==0)
		header('location:login1.php');
?>
