<?php

$token = $_GET['token'];

//EmployeeDetails
include('GFirestore.php');
$Doc = new firestore('EmployeeRegistar');
$details = $Doc->getDocument($token);

//Salary
$data = new Firestore('Salary');
$result = $data->getDocument($token);

//Attendance
$date = new Firestore('Attendance');
$attendance = $date->getDocument($token);

//Nett Salary 
$ordinary = $details['BasicSalary']/26;

$hour= $ordinary/8;

//Final output with 2 decimal places
$nett = round($ordinary*$attendance['Days'],2);

//Update Employee Salary in Database
$data ->updateDocument($token,[
    
    ["path" => "NettSalary",
    "value" => $nett]

]);

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#typeofAllowance").change(function () {
           
            if ($(this).val() == 1) {
                $("#meal").show();
            }
            if ($(this).val() == 2) {
                $("#petrol").show();
            }
            if ($(this).val() == 3) {
                $("#gift").show();
            } 
            if ($(this).val() == 4) {
                $("#others").show();
            } 

        });
    });
</script>
<Html>
<head>
  <!--Bootstrap Code-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title><?php echo $details['EmployeeID'];?></title>
<link rel="stylesheet" href="css/style.css">

 <div class="page-header">
 <h1>Salary Details</h1>
  </div>

</head>
<br>
    <br>
    <form action ="UpdateSalary.php" class = "form-inline" method ="POST">
    <div class = container>

    <center>
    <h3>----------Employee Details--------------</h3>
   </center><br></br>

    <!--Name-->
    <div class="left">
    <label>Name : </label></div>
    <div class="right">
    <input type="text"  id="StaticName" style = "background-color: #C6C6C6" name="StaticName" readonly class= "form-control-plaintext input-background" value = "<?php echo $details['Name'];?>" size="50" /></div> <br> <br>

    <!--EmployeeID-->
    <div class="left">
    <label>Employee ID : </label></div>
    <div class="right">
    <input type="text" id="StaticID" style = "background-color: #C6C6C6" name="StaticID" readonly class= "form-control-plaintext" value = "<?php echo $details['EmployeeID'];?>" size="20" /></div> <br> <br>

    <!--Position-->
    <div class="left"> 
    <label>Position : </label></div>
    <div class="right">
    <input type="text" id="StaticPosition" style = "background-color: #C6C6C6" name="StaticPosition" readonly class= "form-control-plaintext" value = "<?php echo $details['Position'];?>" size="20" /></div> <br> <br>

    <!--Bank-->
    <div class="left"> 
    <label>Bank : </label></div>
    <div class="right">
    <input type="text" id="StaticBank" style = "background-color: #C6C6C6" name="StaticBank" readonly class= "form-control-plaintext" value = "<?php echo $details['Bank'];?>" size="20" /></div> <br> <br>

    <!--BankNum-->
    <div class="left"> 
    <label>Account Number : </label></div>
    <div class="right">
    <input type="text" id="StaticAccount" style = "background-color: #C6C6C6" name="StaticAccount" readonly class= "form-control-plaintext" value = "<?php echo $details['BankNum'];?>" size="20" /></div> <br> <br>

    <!---------------------------------------------Salary Details--------------------------------------------------->


    <center>
    <h3>----------Salary Details--------------</h3>
    </center><br></br> 
  
    <!--Basic Salary-->
    <div class="left">
    <label>Basic Salary : </label></div>
    <div class="right">
    <input type="number" name="basic" min="1" maxlength="12" size="1" value = "<?php echo $details['BasicSalary'];?>"/>

    <!--Attendance-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>Attendance : </label>
    <input type="number" name="attendance" min="0" maxlength="12" size="1" value = "<?php echo $attendance['Days'];?>"/></div> <br></br>
    
    <!--Bonus-->
    <div class="left">
    <label>Bonus: </label></div>
    <div class="right">
    <input type="number" name="bonus" min="0" maxlength="12" size="1" value = ""/> 

    <!--Applied Leave Used-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>Applied Leave Used :</label>
    <input type="number" name="leave" min="0" maxlength="12" size="1" value = "<?php echo $attendance['PersonalLeave'];?>"/> </div><br></br>

    <!--Overtime Weekday-->
    <div class="left">
    <label>Total Weekday Overtime: </label></div>
    <div class="right">
    <input type="number" name="overtime" min="0" maxlength="12" size="1" value = "0"/>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!--Annual Leave Used-->
    <label>Annual Leave Used :</label>
    <input type="number" name="leave" min="0" maxlength="12" size="1" value = "<?php echo $attendance['AnnualLeave'];?>"/> </div><br></br>

    <!--Overtime Weekend-->
    <div class="left">
    <label>Total Weekeend Overtime: </label></div>
    <div class="right">
    <input type="number" name="overtime" min="0" maxlength="12" size="1" value = "<?php echo $attendance['Overtime'];?>"/> </div><br></br>

    <!--Allowance-->
    <div class="left">
    <label>Allowance</label></div>
    &nbsp;&nbsp;
    <select id="typeofAllowance" multiple>
    <option value=1>Meal</option>
    <option value=2>Petrol</option>
    <option value=3>Gifts</option>
    <option value=4>Others</option>
</select>
<hr />
<center>
<div id="others" style="display: none">
    Others :
    <input type="text" id ="others" name = "others" />
    <br></br>
    Others Amount:
    <input type="number" id ="othersAmount"  name= "othersAmount" />
    <br></br>
</div>

<div id="gift" style="display: none" >
    Gift Amount:
    <input type="number" name = "gift" id="gift" />
    <br></br>
</div>

<div id="petrol" style="display: none">
    Petrol Amount:
    <input type="number" name= "petrol" id="petrol" />
    <br></br>
</div>

<div id="meal" style="display: none">
    Meal Amount:
    <input type="number" name = "meal" id="meal" />
    <br></br>
</div></center>

    <!--Claims-->
    <div class="left">
    <label>Claims :</label></div>
    <input type="number" name="claim" min="0" maxlength="12" size="1" value = "<?php echo $result['claims'];?>"/><br></br>

    <!--Deductions-->
    <div class="left">
    <label>Deductions : </label></div>
    <div class="right">
    <!--EPF-->  
    <label class="checkbox-inline">
    <input type="checkbox" name = "epf" value ="1">EPF</input>
    </label>
    <!--SOCSO-->
    <label class="checkbox-inline">
    <input type="checkbox" name= "socso" value ="1"/>SOCSO</input>
    </label>
    <!--EIS-->
    <label class="checkbox-inline">
    <input type="checkbox" name= "eis" value ="1"/>EIS</input>
    </label>
</div> 


    <br></br><br></br>
    <div class="center">
    <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
     &nbsp; &nbsp;&nbsp;
    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
    &nbsp; &nbsp;&nbsp;
    <button type="button" class="btn btn-danger" value="cancel" onclick="window.location.href='ViewList.php';">Cancel</button></div>
  </div>
    
    
</form>

</div>
</body>
</html>



