
<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->admin;
	$res=$coll->find();

	$un=$_POST['uname'];
	$pass=$_POST['pass'];
	$f=0;
		foreach($res as $d)
	{	
		
	if($d['uname']==$un && $d['pass']==$pass)
		
	{header('location:weladmin.php');
			$f=1;}
	}
	if($f==0)
		header('location:adminlogin1.php');
?>