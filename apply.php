<?php
	$m=new mongo();
	$db=$m->tp;
	$coll=$db->recuiter;
	$coll1=$db->student_details;
	$res=$coll1->find();

	$cmp=$_POST['cmpname'];
	//$rn=$_POST['rn'];
	//$dept=$_POST['dept'];
	$f=0;

	session_start();
	foreach($res as $d)
	{

		if($d['rno']==$_SESSION['user'] && $d['dept']==$_SESSION['dept'])
		{
			$doc1=array('companyname'=>$cmp,'rollno'=>$_SESSION['user'],'name'=>$d['name'],'father_name'=>$d['father_name'],'mother_name'=>$d['mother_name'],'gender'=>$d['gender'],'blood_group'=>$d['blood_group'],'dob'=>$d['dob'],'dept'=>$d['dept'],'email'=>$d['email'],'mobile'=>$d['mobile'],'address'=>$d['address'],'lastpassm'=>$d['lastpassm'],'lastpassyr'=>$d['lastpassyr'],'12passm'=>$d['12passm'],'12passyr'=>$d['12passyr'],'10passm'=>$d['10passm'],'10passyr'=>$d['10passyr']);
			$coll->insert($doc1);
			header('location:reqform.php');
			$f=1;

		}
	}
?>


  