<?php

require_once './GFirestore.php';

require('fpdf.php');

//Update Salary
$data = new Firestore('Salary');

//Attendance
$date = new Firestore('Attendance');

//GetTaxRate
$tax = new Firestore('SetSalary');
$taxRate = $tax->getDocument('TaxRate');

//GetWorkingHours
$hours = new Firestore('SetSalary');
$duration = $hours->getDocument('WorkingHours');

if(isset($_POST['submit']))
{ 
$StaticName = $_POST["StaticName"];   
$StaticID = $_POST["StaticID"];
$StaticBank = $_POST["StaticBank"];
$StaticAccount = $_POST["StaticAccount"];
$basic = $_POST["basic"];
$bonus=$_POST["bonus"];
$attendance=$_POST["attendance"];
$claim=$_POST["claim"];
$leave=$_POST["leave"];
$overtime=$_POST["overtime"];
$othersAmount=$_POST["othersAmount"];
$meal=$_POST["meal"];
$petrol=$_POST["petrol"];
$gift=$_POST["gift"];
$epf=isset($_POST["epf"]);
$socso=isset($_POST["socso"]);
$eis=isset($_POST["eis"]);

//Basic Salary 
$ordinary = round($basic/$duration['WorkingDays'],2);

//multiply wth attendance
$BasicDay = round($ordinary*$attendance,2);


//add bonus
$BonusSum = round($BasicDay+$bonus,2);


//add allowance
(float)$totalAllowance = round((float)$meal+(float)$petrol+(float)$gift+(float)$othersAmount,2);
(float)$allowance = round((float)$BonusSum+(float)$meal+(float)$petrol+(float)$gift+(float)$othersAmount,2);

//add claim
$claimSum = round($allowance+$claim,2);


//Weekdays Overtime
$hours= round($ordinary/$duration['DailyHours'],2);

$overWeekdays = round($hours*$overtime,2);

$overSum = round($claimSum+$overWeekdays,2);

//Gross Salary 
$gross = $overSum;

//Tax Variables
$Eepf=0;$EEIS=0;$ESocso=0;
$Mepf=0;$MEIS=0;$MSocso=0;


//Nett Salary
if($epf==1){

    //Employee EPF Rate
    $Eepf = round($basic*$taxRate['EPFemployee'],2);

    //Employee EPF Rate
    $Mepf = round($basic*$taxRate['EPFemployer'],2);
  
    $nett = round($gross-$Eepf,2);
}


if($eis==1){

    //Employee EPF Rate
    $EEIS = round($basic*$taxRate['EISemployee'],2);

    //Employee EPF Rate
    $MEIS = round($basic*$taxRate['EISemployer'],2);
  
    $nett = round($nett-$EEIS,2);
}


if($socso==1){

    //Employee EPF Rate
    $ESocso = round($basic*$taxRate['Socsoemployee'],2);

    //Employee EPF Rate
    $MSocso = round($basic*$taxRate['Socsoemployer'],2);
  
    $nett = round($nett-$ESocso,2);
}

//TotalEPF
$Totalepf = round($Eepf+$Mepf,2);

//TotalEIS
$Totaleis = round($EEIS+$MEIS,2);

//TotalSocso
$TotalSocso = round($ESocso+$MSocso,2);

//Total Tax paid by employee
$totalTaxEmployee = round($ESocso+$EEIS+$Eepf,2);

//Total Tax paid by employer
$totalTaxEmployer = round($MSocso+$MEIS+$Mepf,2);

//TotalTax
$Totaltax = round($totalTaxEmployer+$totalTaxEmployee,2);


//Write to Database

//Update Salary

$data ->updateDocument($StaticID,[
    
    ["path" => "NettSalary",
    "value" => $nett],

    ["path" => "GrossSalary",
    "value" => $gross],

    ["path" => "claim",
    "value" => $claim],

    ["path" => "bonus",
    "value" => $bonus],

    ["path" => "overWeekdays",
    "value" => $overWeekdays],

    ["path" => "totalTaxEmployee",
    "value" => $totalTaxEmployee],

    ["path" => "Mepf",
    "value" => $Mepf],

    ["path" => "Eepf",
    "value" => $Eepf],

    ["path" => "Totalepf",
    "value" => $Totalepf],

    ["path" => "MEIS",
    "value" => $MEIS],

    ["path" => "EEIS",
    "value" => $EEIS],

    ["path" => "Totaleis",
    "value" => $Totaleis],

    ["path" => "MSocso",
    "value" => $MSocso],

    ["path" => "ESocso",
    "value" => $ESocso],

    ["path" => "TotalSocso",
    "value" => $TotalSocso],

    ["path" => "totalTaxEmployer",
    "value" => $totalTaxEmployer]


]);

$data ->updateDocument($StaticID,[

    ["path" => "totalTaxEmployee",
    "value" => $totalTaxEmployee],

    ["path" => "Totaltax",
    "value" => $Totaltax],

    ["path" => "totalAllowance",
    "value" => $totalAllowance]

]);

if($data){
    echo "<script>
    alert('Save Successfull!');
    window.location.href='/Payroll/PayrollMenu.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Save. Try Again!');
    window.location.href='/Payroll/PayrollMenu.php';
    </script>";
}

}

?>