<!DOCTYPE html>
<head>
<meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Cleaning Management HRIS</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="robots" content="all,follow">
          <!-- Bootstrap CSS-->
          <link rel="stylesheet" href="vendorbootstrap/bootstrap/css/bootstrap.min.css">
          <!-- Font Awesome CSS-->
          <link rel="stylesheet" href="vendorbootstrap/font-awesome/css/font-awesome.min.css">
          <!-- Fontastic Custom icon font-->
          <link rel="stylesheet" href="css/fontastic.css">
          <!-- Google fonts - Roboto -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
          <!-- jQuery Circle-->
          <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
          <!-- Custom Scrollbar-->
          <link rel="stylesheet" href="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
          <!-- theme stylesheet-->
          <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
          <!-- Custom stylesheet - for your changes-->
          <link rel="stylesheet" href="css/custom.css">
          <!-- Favicon-->
          <link rel="shortcut icon" href="css/faviconlogo.ico">
          <!-- Tweaks for older IEs--><!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <body>
          <!-- Side Navbar -->
          <nav class="side-navbar">
            <div class="side-navbar-wrapper">
              <!-- Sidebar Header    -->
              <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img src="img/avatar-11.jpg" alt="person" class="img-fluid rounded-circle">
                  <h2 class="h5">Michael Scott</h2><span>Branch Manager</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="/EmployeeDatabase/EmployeeManagerMenu.php"> <i class="icon-home"></i>Home                             </a></li>
                  <li><a href="/EmployeeDatabase/EmployeeDatabase.php"> <i class="fa fa-users"></i>Employee Database </a></li> 
                  <li><a href="manageleaves.php"> <i class="fa fa-calendar"></i>Manage Leaves                </a></li>
                    <li><a href="#LocationManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-map-marker"></i>Location Manager</a>
                    <ul id="LocationManager" class="collapse list-unstyled ">
                      <li><a href="/LocationManager/LocationView.php">Location</a></li>
                      <li><a href="/LocationManager/Roaster.php">Assign Employees</a></li>
                      <li><a href="/LocationManager/DisplayDuty.php">Duty Roster</a></li>
                    </ul> 
                    </li>                            
                  <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll Manager</a>
                  <ul id="PayrollManager" class="collapse list-unstyled ">
                          <li><a href="/Payroll/PayrollMenu.php">Payroll</a></li>
                          <li><a href="/Payroll/PayrollSettings.php">Payroll Settings</a></li>
                          <li><a href="/Payroll/AdminClaims.php">Claims</a></li>
                    </ul>
                  </li>
                  <li><a href="#Smartapp" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-mobile"></i>Smart App</a>
                    <ul id="Smartapp" class="collapse list-unstyled ">
                      <li><a href="/loginsystem/view.php">Attendance</a></li>
                      <li><a href="/EmployeeDatabase/reports.php">Reports</a></li>
                      <li><a href="/EmployeeDatabase/appDownload.php">Feedback</a></li>
                    </ul>
                  </li>
              </div>
          </nav>
          <div class="page">
            <!-- navbar-->
            <header class="header">
              <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>CLEANING MANAGEMENT SYSTEM</span><strong class="text-primary"> HRIS</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                      <!-- Notifications dropdown-->
                      <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>10 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Log out-->
                      <li class="nav-item"><a href="/Users/SignIn.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
<!-- Header Section-->
<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
<!-- JavaScript files-->
<script src="vendorbootstrap/jquery/jquery.min.js"></script>
<script src="vendorbootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendorbootstrap/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendorbootstrap/chart.js/Chart.min.js"></script>
<script src="vendorbootstrap/jquery-validation/jquery.validate.min.js"></script>
<script src="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/charts-home.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
  <!--Css File-->         
  <link rel="stylesheet" href="css/style.css"> 

<style>
	.bs-example{
    	margin: 10px;
    }
</style>
<script>

    $(document).ready(function(){ 
        $("#myTab a:last").tab('show'); // show last tab on page load
    });
</script>
</head>
<body> 

<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#setSalary" class="nav-link" data-toggle="tab">Set Salary</a>
        </li>
        <li class="nav-item">
            <a href="#hours" class="nav-link" data-toggle="tab">Set Working Hours & Working Days</a>
        </li>
        <li class="nav-item">
            <a href="#bonus" class="nav-link" data-toggle="tab">Set Bonus</a>
        </li>
        <li class="nav-item">
            <a href="#epf" class="nav-link" data-toggle="tab">Set EPF,SOCSO,EIS</a>
        </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane fade" id="setSalary">
    <h4 class="mt-2">Set Salary</h4>
            
    <form action ="SalaryDetails.php" method ="POST">
    <div class = container>

    <!--Office Worker Basic Salary-->
    <div class="left">
    <label>Office Worker: </label></div>
    <div class="right">
    <input type="number" id ="worker" placeholder = "2000" name="worker" size="10" min="1" max="99999"/></div> <br></br>

    <!-- Local Cleaner Basic Salary-->
    <div class="left">
    <label>Local Cleaner : </label></div>
    <div class="right">
    <input type="number" id ="localfull" placeholder = "2500" name="localfull"  size="10" min="1" max="99999"/></div><br></br>

    <!-- Non-Local Cleaner Basic Salary-->
    <div class="left">
    <label>Non-Local Cleaner : </label></div>
    <div class="right">
    <input type="number" id ="nonlocalfull" placeholder = "1800" name="nonlocalfull"  size="10" min="1" max="99999"/></div><br></br>

    <!--Part time cleaner Basic Salary-->
    <div class="left">
    <label>Part-Time Cleaner: </label></div>
    <div class="right">
    <input type="number" id ="PartTime" placeholder = "1500" name="PartTime" size="10" min="1" max="99999"/></div><br></br>

    <!--Manager Basic Salary--> 
    <div class="left">
    <label>Manager : </label></div>
    <div class="right">
    <input type="number" id ="Manager" placeholder = "3000" name="Manager" size="10" min="1" max="99999"/></div><br></br>

    <br></br>    
    <!--Buttons-->
    <div class="center">
        <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
         &nbsp; &nbsp;&nbsp;
        <button type="reset" name = "Reset" class="btn btn-info" value="Reset">Reset</button>
        &nbsp; &nbsp;&nbsp;
        <button type="button" name = "Cancel" class="btn btn-danger" value="cancel" onclick="window.location.href='/Payroll/PayrollSettings.php';">Cancel</button></div>
      </div>
      </form>
    </div>

    <div class="tab-pane fade" id="hours">
    <h4 class="mt-2">Set Working Hours & Working Days</h4>
        
    <form action ="hoursDetails.php" method ="POST">
    <div class = container>

    <!--Daily Working Hours-->
    <div class="left">
    <label>Daily Working Hours : </label></div>
    <div class="right">
    <input type="number" id ="hours" name="hours" placeholder = "12" size="10" min="0" max="12"/></div> <br></br>

    <div class="left">
    <label>Working Days : </label></div>
    <div class="right">
    <input type="number" id ="days" name="days" placeholder = "26" size="10" min="0" max="31"/></div> 
    <p>*Number of working days in a month</P>

    <br></br>    
    <!--Buttons-->
    <div class="center">
        <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
         &nbsp; &nbsp;&nbsp;
        <button type="reset" name = "Reset" class="btn btn-info" value="Reset">Reset</button>
        &nbsp; &nbsp;&nbsp;
        <button type="button" name = "Cancel" class="btn btn-danger" value="cancel" onclick="window.location.href='/Payroll/PayrollSettings.php';">Cancel</button></div>
      </div>
      </form>
        </div>



        <div class="tab-pane fade" id="bonus">
            <h4 class="mt-2">Bonus!</h4>
            <form action ="SalaryDetails.php" method ="POST">
    <div class = container>

    <!--Office Worker Basic Salary-->
    <div class="left">
    <label>Bonus: </label></div>
    <div class="right">
    <input type="number" id ="Bonus" name="Bonus" size="10" min="1" max="99999"/></div> <br> <br>

    <br></br>    
    <!--Buttons-->
    <div class="center">
        <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
         &nbsp; &nbsp;&nbsp;
        <button type="reset" name = "Reset" class="btn btn-info" value="Reset">Reset</button>
        &nbsp; &nbsp;&nbsp;
        <button type="button" name = "Cancel" class="btn btn-danger" value="cancel" onclick="window.location.href='/Payroll/PayrollSettings.php';">Cancel</button></div>
      </div>
      </form>
        </div>


    <div class="tab-pane fade" id="epf">
    <h4 class="mt-2">Set EPF,SOCSO,EIS</h4>
           
    <form action ="TaxDetails.php" method ="POST">
    <div class = container>


    <center>
    <h3>----------Employer Tax Rate--------------</h3>
    </center><br></br>

    <!--EPF Employer Rate-->
    <div class="left">
    <label>EPF Employer Rate : </label></div>
    <div class="right">
    <input type="number" id ="EPFemployer" name="EPFemployer" placeholder = "12" size="10" min="0" max="100"/></div> <br></br>

    <!--Socso Employer Rate-->
    <div class="left">
    <label>SOCSO Employer Rate : </label></div>
    <div class="right">
    <input type="number" id ="Socsoemployer" name="Socsoemployer" placeholder = "12"  size="10" min="0" max="100"/></div> <br></br>

    <!--EIS Employer Rate-->
    <div class="left">
    <label>EIS Employer Rate : </label></div>
    <div class="right">
    <input type="number" id ="EISemployer" name="EISemployer" placeholder = "12"  size="10" min="0" max="100"/></div> <br></br>

    <center>
        <h3>----------Employee Tax Rate--------------</h3>
        </center><br></br>

    <!--EPF Employee Rate -->
    <div class="left">
    <label>EPF Employee Rate : </label></div>
    <div class="right">
    <input type="number" id ="EPFemployee" name="EPFemployee" placeholder = "10" size="10" min="0" max="100"/></div> <br></br>

    <!--SOCSO Employee Rate--> 
    <div class="left">
    <label>SOCSO Employee Rate: </label></div>
    <div class="right">
    <input type="number" id ="Socsoemployee" name="Socsoemployee" placeholder = "10" size="10" min="0" max="100"/></div> <br></br>

     <!--EIS Employee Rate--> 
     <div class="left">
     <label>EIS Employee Rate: </label></div>
     <div class="right">
     <input type="number" id ="EISemployee" name="EISemployee" placeholder = "10" size="10" min="0" max="100"/></div> <br></br>

    <br></br>    
    <!--Buttons-->
    <div class="center">
        <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
         &nbsp; &nbsp;&nbsp;
        <button type="reset" name = "Reset" class="btn btn-info" value="Reset">Reset</button>
        &nbsp; &nbsp;&nbsp;
        <button type="button" name = "Cancel" class="btn btn-danger" value="cancel" onclick="window.location.href='/Payroll/PayrollSettings.php';">Cancel</button></div>
      </div>
      </form>
        </div>

</div>        
</body>
</html>