<!DOCTYPE html>
<html lang="en">
<head>

<?php

$token = $_GET['token'];

include("session.php");

$claim ->updateDocument($token,[

    ["path" => "Status",
    "value" => 'Rejected']

]);


if($claim){
    echo "<script>
    alert('Rejected');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Reject. Try Again!');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}


?>
