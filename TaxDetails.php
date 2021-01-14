<?php

if(isset($_POST['submit']))
{
//Set Employer Tax Details    
$EPFemployer=$_POST["EPFemployer"];
$Socsoemployer=$_POST["Socsoemployer"];
$EISemployer=$_POST["EISemployer"];
//Set Employer Tax Details   
$EPFemployee=$_POST["EPFemployee"];
$Socsoemployee=$_POST["Socsoemployee"];
$EISemployee=$_POST["EISemployee"];

require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('SetSalary');

$docName = 'TaxRate';

//Divide by 100 to get to 2 decimal places
$EPFemployer = $EPFemployer/100;
$Socsoemployer = $Socsoemployer/100;
$EISemployer = $EISemployer/100;
$EPFemployee = $EPFemployee/100;
$Socsoemployee = $Socsoemployee/100;
$EISemployee = $EISemployee/100;


$Doc ->updateDocument($docName,[
                      ["path"  => "EPFemployer",
                       "value" => $EPFemployer],

                       ["path"  => "Socsoemployer",
                       "value" => $Socsoemployer],

                       ["path"  => "EISemployer",
                       "value" => $EISemployer],

                       ["path"  => "EPFemployee",
                       "value" => $EPFemployee],

                       ["path"  => "Socsoemployee",
                       "value" => $Socsoemployee],

                       ["path"  => "EISemployee",
                       "value" => $EISemployee]
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

