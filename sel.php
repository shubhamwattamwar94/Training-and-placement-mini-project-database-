<?php
session_start();	
$m=new mongo();
$db=$m->tp;
$coll1=$db->student_select;
$coll=$db->recuiter;
$res=$coll->find();


	
	$user=$_SESSION['user'];
	echo $user;

		
	foreach($res as $d)
{
		echo $d['companyname'];
}
	foreach($f=$_POST['a'] as $d1)
	{	
		if($d1=="yes")
		{	

			
			$doc1=array('companyname'=>$d['companyname'],'rollno'=>$d['rollno'],'name'=>$d['name'],'father_name'=>$d['father_name'],'mother_name'=>$d['mother_name'],'gender'=>$d['gender'],'blood_group'=>$d['blood_group'],'dob'=>$d['dob'],'dept'=>$d['dept'],'email'=>$d['email'],'mobile'=>$d['mobile'],'address'=>$d['address'],'lastpassm'=>$d['lastpassm'],'lastpassyr'=>$d['lastpassyr'],'12passm'=>$d['12passm'],'12passyr'=>$d['12passyr'],'10passm'=>$d['10passm'],'10passyr'=>$d['10passyr'],"select"=>$d1);
			$coll1->insert($doc1);
			$doc2=array('rollno'=>$d['rollno']);
			$coll->remove($doc2);
			header('location:seldtd.php');
		}
	
	
	}


?>