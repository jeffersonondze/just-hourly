<?php
require '../vendor/autoload.php';
require './configs/dbConnection_class.php';
require './configs/functions_class.php';
//require './interfaces/JobSeekerInterface.php';
require './classes/JobSeeker_Class.php';

$JobSeeker = new JobSeeker_();

$JobSeeker->SignUp(new dbConnection_(), "test", "test1");


//phpinfo();

?>
