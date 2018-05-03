<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->requiter_details;
	$res=$coll->find();

	$un=$_POST['cmpname'];
	$pass=$_POST['pass'];
	$f=0;
		foreach($res as $d)
	{	
		
	if($d['cmpname']==$un && $d['pass']==$pass )
		{
		session_start();
		session_regenerate_id();
		$_SESSION['user']=$un;
		$_SESSION['name']=$d['req_name'];
			
		
		session_write_close();
		header('location:welreq.php');
			$f=1;
		}
	}
	if($f==0)
		header('location:requiterlogin1.php');
?>
