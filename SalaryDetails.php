<?php

if(isset($_POST['submit']))
{
//Set Basic Salary    
$worker=$_POST["worker"];
$localfull=$_POST["localfull"];
$nonlocalfull=$_POST["nonlocalfull"];
$PartTime=$_POST["PartTime"];
$Manager=$_POST["Manager"];

//Set Bonus


require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('SetSalary');

$docName = 'BasicSalary';


$Doc ->createDocument($docName,[
                      "Office Worker" => $worker,
                      "Full-Time LocalCleaner" => $localfull,
                      "Full-Time NonLocalCleaner" => $nonlocalfull,
                      "Part-time Cleaner" => $PartTime,
                      "Manager" => $Manager]);

if($Doc){
    echo "<script>
    alert('Register Successfull!');
    window.location.href='/Payroll/PayrollSettings.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Register. Try Again!');
    window.location.href='/Payroll/PayrollSettings.php';
    </script>";
}


}

?>

