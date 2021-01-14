<?php


if(isset($_POST['submit']))
{
//Set Employer Tax Details    
$hours=$_POST["hours"];
$days=$_POST["days"];


require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('SetSalary');

$docName = 'WorkingHours';

$Doc ->updateDocument($docName,[
    ["path"  => "DailyHours",
     "value" => $hours],

     ["path"  => "WorkingDays",
     "value" => $days]
     ]);


if($Doc){
        echo "<script>
        alert('Save Successfull!');
        window.location.href='/Payroll/PayrollSettings.php';
        </script>";
}else{
        echo "<script>
        alert('Failed to Save. Try Again!');
        window.location.href='/Payroll/PayrollSettings.php';
        </script>";
    }
    
 }

?>