
<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->requiter;
	$res=$coll->find();

	$un=$_POST['uname'];
	$pass=$_POST['pass'];
	$f=0;
		foreach($res as $d)
	{	
		
	if($d['uname']==$un && $d['pass']==$pass)
		
	{echo "login succesfully";
			$f=1;}
	}
	if($f==0)
		header('location:requiterlogin1.php');
?>