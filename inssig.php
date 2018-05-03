<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->signup;
	
	$rn=$_POST['rno'];
	$fn=$_POST['fname'];
	$mn=$_POST['mname'];
	$ln=$_POST['lname'];
	$gen=$_POST['gender'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$dept=$_POST['dept'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	$mb=$_POST['mobile'];

	session_start();
		session_regenerate_id();
		$_SESSION['user']=$rn;
		$_SESSION['name']=$_POST['fname'];
		$_SESSION['dept']=$dept;
		
	$doc1=array('rn'=>$rn,"fname"=>$fn," mname"=>$mn,"lname"=>$ln,"gender"=>$gen,"pass"=>$pass,"cpass"=>$cpass,"dept"=>$dept,"date"=>$date,"email"=>$email,"mobile"=>$mb);
	$coll->insert($doc1);
header('location:welusr.php');
?>