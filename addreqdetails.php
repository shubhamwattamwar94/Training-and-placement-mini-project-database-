<?php
$m=new mongo();
$db=$m->tp;
$coll=$db->requiter_details;


$cmp=$_POST['cmpname'];
$rname=$_POST['rname'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$doc=array("cmpname"=>$cmp,"req_name"=>$rname,"pass"=>$pass,"cpass"=>$cpass);
$coll->insert($doc);
header('location:dispreqdetails.php');
?>