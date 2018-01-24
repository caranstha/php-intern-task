<?php
session_start();
$_SESSION['emailErr']=null;
$_SESSION['first_nameErr']=null;
$_SESSION['last_nameErr']=null;


include 'vendor/autoload.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
 	 } 
    // check if e-mail address is valid or not
    else if (!preg_match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$",$email)){
      $emailErr = "Invalid email format"; 
    }
    else{
    	$emailErr=null;

    }

if (empty($_POST["first_name"])) {
    $first_nameErr = "First Name is required";
  }
    // check if name only contains letters
    else if (!preg_match("[a-zA-Z ]+",$first_name)) {
      $nameErr = "Only letters are allowed"; 
    }
    else
    {$first_nameErr=null;}


if (empty($_POST["last_name"])) {
    $last_nameErr = "Last Name is required";
 	 }
  
    // check if name only contains letters
    else if (!preg_match("[a-zA-Z ]+",$last_name)) {
      $last_nameErr = "Only letters are allowed"; 
    }
    else{$last_nameErr=null;

    }
    
  




$user = new \Classes\User();
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setLastName($lastName);
if ($user->insert()) {
    header('location:list.php');
}
