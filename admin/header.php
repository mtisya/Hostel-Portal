<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http:
//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/hostel1/admin/menu/menu.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="menu/menu.js"></script>
</head>
<body>
  <div class="header">
  <a href="#"><img src="images/hostel6.jpg" alt="Insert Logo Here"
   name="Insert_logo" width="100%" height="100%" id="Insert_logo" 
   style="background-color: #8090AB; display:block;" /></a>
  </div><br /> 
<div align="right" style="margin-right:6%" ><b>Welcome: <?php echo $_SESSION['Admin']; ?>  | <a href="logout.php" ><font color='orange'>Logout</font></a></b></div><br />
 <div id="menu">
     <ul class="menu">
	         <li><a href="index.php" class="parent"><span>Home</span></a>
            <div><ul>
                <li><a href="session.php"><span>Set Session</span></a></li>
                <li><a href="addadmin.php"><span>Add Admin</span></a></li>
                <li><a href="#"><span>Admin Details</span></a></li>
            </ul></div>
        </li>
		        <li><a href="#" class="parent"><span>Payments</span></a>
            <div><ul>
                 <li><a href="payments.php"><span>Verify Payment</span></a></li>
                 <li><a href="#"><span>View Payments</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Hostel</span></a>
            <div><ul>
                <li><a href="addhostel.php"><span>Add Hostel</span></a></li>
                <li><a href="addroom.php"><span>Add Room</span></a></li>
                <li><a href="#"><span>View Records</span></a></li>
            </ul></div>
        </li>
                <li><a href="#" class="parent"><span>Student</span></a>
                    <div><ul>
                        <li><a href="reg.php"><span>Add / Delete</span></a></li>
                        <li><a href="studentReports.php"><span>Student Report</span></a></li>
                        <li><a href="#"><span>Search Student</span></a></li>
                    </ul></div>
                </li>
        <li><a href="#" class="parent"><span>Reports</span></a>
            <div><ul>
                <li><a href="query.php"><span>Allocation Reports</span></a></li>
                <li><a href="allrooms.php"><span>Hostel Reports</span></a></li>
                <li><a href="#"><span>Finance Report</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>School</span></a>
            <div><ul>
                <li><a href="#"><span>School</span></a> </li>
                <li><a href="#"><span>Department</span></a></li>
                <li><a href="#"><span>Course</span></a></li>
            </ul></div>
        </li>
    </ul>
</div>
</body>
</html>