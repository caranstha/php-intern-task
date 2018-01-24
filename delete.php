<?php

include 'vendor/autoload.php';
$user=new Classes\User();
$email=$_GET['email'];

$res=$user->deleteuser($email);
if($res)
{
	header('location:list.php');
}
?>