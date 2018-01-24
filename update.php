<?php

include 'vendor/autoload.php';


if(isset($_POST['submit']))
{
$id=$_POST['id'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user=new Classes\User();
$result=$user->updateuser($id,$email,$first_name,$last_name);
if($result)
{
	header('location:list.php');
}
}

