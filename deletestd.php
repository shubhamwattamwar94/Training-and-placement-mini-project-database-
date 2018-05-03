<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->student_details;
	$col=$db->signup;
	$type=$_POST['type'];
	$data=$_POST['data'];
	$dept=$_POST['dept'];
	
	if("rn"==$type)
	{
	$col->remove(array("rn"=>$data));
	$doc1=array("rno"=>$data);
	$coll->remove($doc1);

	}
	else if("year"==$type)
	{
		$doc1=array("lastpassyr"=>$data);
		$coll->remove($doc1);

	}

	header('location:delsuss.php');
?>


