<!DOCTYPE html>
<html lang="en">
<head>

<?php

$token = $_GET['token'];

$id = substr($token, 0, -3);

include("session.php");

$getamount = $claim->getDocument($token);

$claim ->updateDocument($token,[

    ["path" => "Status",
    "value" => 'Approved']

]);


$salary->updateDocument($id,[

    ["path" => "claim",
    "value" => $getamount["amount"]]

]);


if($claim){
    echo "<script>
    alert('Accepted');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Approve. Try Again!');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}


?>
