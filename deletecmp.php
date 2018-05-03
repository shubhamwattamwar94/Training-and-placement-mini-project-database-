<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->company;
	
	
	$data=$_POST['cmpname'];
	
	
	$doc1=array("cname"=>$data,);
	$coll->remove($doc1);
	header('location:delsuss.php');
?>