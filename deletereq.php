<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->requiter_details;
	
	
	$data=$_POST['cmpname'];
	
	
	$doc1=array("cmpname"=>$data,);
	$coll->remove($doc1);
	header('location:delsuss.php');
?>