<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->student_details;
	
	$n=$_POST['name'];
	$fn=$_POST['fname'];
	$mn=$_POST['mname'];
	$gen=$_POST['gender'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	$mb=$_POST['mobile'];
	$addr=$_POST['addr'];
	$lm=$_POST['marks'];
	$lpy=$_POST['plastyear'];
	$m12=$_POST['m12th'];
	$p12y=$_POST['p12year'];
	$m10=$_POST['m10th'];
	$p10y=$_POST['p10year'];
	$bld=$_POST['bld'];
	session_start(); 
	$rn=$_SESSION['user'];

	
	$doc1=array("rno"=>$rn,"name"=>$n,"father_name"=>$fn,"mother_name"=>$mn, "gender"=>$gen,"dept"=>$_SESSION['dept'],"dob"=>$date,"blood_group"=>$bld,"email"=>$email,"mobile"=>$mb,"address"=>$addr,"lastpassm"=>$lm,"lastpassyr"=>$lpy,"12passm"=>$m12,"12passyr"=>$p12y,"10passm"=>$m10,"10passyr"=>$p10y);
	$coll->insert($doc1);
	header('location:main.php');
	echo "Successfully";
?>