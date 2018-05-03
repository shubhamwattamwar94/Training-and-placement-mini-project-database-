<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->company;
	
	
	$cn=$_POST['cmpname'];
	$rspost=$_POST['reqpost'];
	$crit=$_POST['criteria'];
	$year=$_POST['year'];
	$info=$_POST['othrinfo'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	$vac=$_POST['vacancies'];
	
	$doc1=array("cname"=>$cn,"email"=>$email,"RequirementPost"=>$rspost,"vacancies"=>$vac,"criteria"=>$crit,"year"=>$year,"OtherInfo"=>$info,"ContactNo"=>$cno);

	$coll->insert($doc1);
	header('location:inssucc.php');
?>