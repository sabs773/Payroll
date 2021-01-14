<?php 


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include('GFirestore.php');


$admin = new firestore('Users');
$people = new firestore('EmployeeRegistar');
$places = new firestore('LocationRegistar');
$claim = new firestore('Claims');
$salary = new firestore('Salary');
$leaves = new firestore('Leave');

//cleanza firebase
$workercomments = new firestore('WorkerComments');


session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

//Grab data from firebase
$adminresults = $admin->getDocument($user_check);
$results[] = $people->getAllDocuments();
$Allplace[] = $places->getAllDocuments();


$usernameadmin = $adminresults["Username"];
//$username = $results["Name"];









?>