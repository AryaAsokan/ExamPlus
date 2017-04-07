
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Facullty Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style1 {
	color: #CC3300;
	font-weight: bold;
}
-->
    </style>
</head>
<script type="text/javascript" language="javascript">
function validate()
{
var j,k;
j=f1.t6.value;
k=f1.t5.value;
if(f1.t1.value=="")
{
alert("Enter Name");
f1.t1.focus();
return false;
  }
  else if(f1.t2.value=="")
{
alert("Enter Faculty ID:");
f1.t2.focus();
return false;
  }

 
  else if(f1.Designation.selectedIndex==0)
  {
  alert("Select Designation");
  f1.year1.focus();
  return false;
  }
  else if(f1.Department.selectedIndex==0)
  {
  alert("Select the department");
  f1.department.focus();
  return false;
  }
  else if(f1.t3.value=="")
  {
  alert("Enter age");
  f1.t3.focus();
  return false;
  }
  else if(isNaN(f1.t3.value))
{
alert("Age Must Consist Only Numbers");
f1.t3.value="";
f1.t3.focus();
return false;
}
  else if(f1.t4.value=="")
  {
  alert("Enter address");
  f1.t4.focus();
  return false;
  }
 
  else if(f1.t5.value=="")
  {
  alert("Enter a valid Phone Number");
  f1.t5.focus();
  return false;
  }
   else if(isNaN(f1.t5.value))
{
alert("Phone Number Must Consist Only Numeric");
f1.t5.value="";
f1.t5.focus();
return false;
}
else if(k.length<10||k.length>12)
{
 alert("Enter valid Contact No");
f1.t5.value="";
f1.t5.focus();
return false;
}
   else if(f1.t6.value=="")
  {
  alert("Enter a valid e-mail id");
  f1.t6.focus();
  return false;
  }
  var p=j.indexOf(".");
var q=j.length;
var z=q-p-1;
var r=j.indexOf("@");
if(r<=0)
{
alert("Invalid @ Position");
f1.t6.focus();
return false;
}
if(j.indexOf(".")<=0)
{
alert("Invalid Dot Position");
f1.t6.focus();
return false;
}
if(z!=3)
{
alert("Invalid ID");
f1.t6.focus();
return false;
}
}
function cUpper(cObj) 
{
cObj.value=cObj.value.toUpperCase();
}
</script>

<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left" align="center"><a href="" id="divSiteTitle" >      Exam Plus</a><br />
                        <a href="" id="divTagLine">The Complete Examination Manager</a>
                  </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
							 
                            <li class="active"><a href="AdminHome.php">Home</a></li>
                        
							<li class="dropdown">
                            <a  class="dropdown-toggle">Student <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="studentRegistration.php">Registration</a></li>
                            <li><a href="studentUpdation.php">Edit</a></li>
                            <li><a href="studentDeletion.php">Delete</a></li>
                            </ul>
                            </li>
							<li class="dropdown">
						    <a class="dropdown-toggle">Faculty<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a  href="FacultyRegistration.php">Registration</a></li>
                            <li><a href="FacultyUpdation.php" >Edit</a></li>
                            <li><a  href="FacultyDeletion.php">Delete</a></li>
							<li class="dropdown">
                            <a class="dropdown-toggle">Allocate Faculty</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a  href="FacultyAllocationUniversityl.php">University Exam</a></li>
                            <li><a href="FacultyAllocationInternal.php">Internal Exam</a></li>
                            </ul>
                            </li>
							</ul></li>
							
						   <li class="dropdown">
                            <a  class="dropdown-toggle">Exam<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                             <li class="dropdown">
                            <a class="dropdown-toggle">Timetable &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                             <li><a href="ScheduleTimetable.php">Schedule</a></li>
                            <li><a  href="ViewTimeTableA.php">View</a></li>
                            </ul>
							</li>
							
							 <li class="dropdown">
                            <a class="dropdown-toggle">Syllabus &nbsp;&raquo;</a>
                          <ul class="dropdown-menu sub-menu">
                             <li><a href="AddSubject.php">Add</a></li>
                            
							
                            </ul>
						  </li>
						    </ul>
                            </li>
						    <li class="dropdown">
                            <a class="dropdown-toggle">Room <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a  href="AddRoom.php">Add room</a></li>
                            <li><a href="EditRoom.php">Edit room</a></li>
							<li><a href="DeleteRoom.php">Delete Room</a></li>
							<li class="dropdown">
                            <a class="dropdown-toggle">Allocate room &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="UniversitySeating2.php">University Exam</a></li>
                            <li><a href="InternalSeating.php">Internal Exam</a></li>
                            </ul>
                            </li>
							<li class="dropdown">
                            <a class="dropdown-toggle">View Seating &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="ViewUniversitySeating1.php">University Seating</a></li>
                            <li><a href="ViewInternalSeating.php">Internal Seating</a></li>
                            </ul>
                            </li>
                            <li class="dropdown">
                            <a class="dropdown-toggle">Publish Seating &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="MailUniversitySeating.php">University Seating</a></li>
                            <li><a href="MailInternalSeating.php">Internal Seating</a></li>
                            </ul>
                            </li>
                            </ul>
                            </li>
							<li class="dropdown">
						    <a  class="dropdown-toggle">Settings<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="AdminProfileEdit.php">Profile</a></li>
							<li><a href="AddNewAdmin.php">Add New Admin</li></a>
                            <li><a href="Logout.php">Logout</a></li>
							</ul>
                            </ul>
                      </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
            <div class="span12">

                <div id="headerSeparator"></div>

                <div id="headerSeparator2"></div>

            </div>
        </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">
            

            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">
                   <h1 align="center"> Faculty Registration</h1>
					<form name="f1" method="post" action="FacultyRegistration.php">
                    	<table width="747" border="0" align="center">
  <tr>
    <td width="210"><div align="left">Name:</div></td>
    <td width="527">
        <div align="left">
          <input type="text" name="t1"  id="t1" onKeyUp="return cUpper(this);">
        </div></td>
  </tr>
  <tr>
    <td><div align="left">Faculty ID </div></td>
    <td><div align="left">
      <input type="text" name="t2" id="t2" onKeyUp="return cUpper(this);" >
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Designation</div></td>
    <td><div align="left">
      <select name="Designation">
        <option>Select Designation</option>
        <option>PROFESSOR</option>
        <option>ASSOCIATE PROFESSOR</option>
        <option>ASSISTANT PROFESSOR</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Department:</div></td>
    <td><div align="left">
      <select name="Department">
	  <option>Department</option>
	  <option>CSE</option>
	  <option>PDE</option>
	  <option>CHE</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Age</div></td>
    <td>
      
      <div align="left">
        <input type="text" name="t3" id="t3" >
      </div></td>
  </tr>
  <tr>
    <td><div align="left">Address:</div></td>
    <td>
        <div align="left">
          <textarea name="t4" id="t4"  onKeyUp="return cUpper(this);"></textarea>
        </div></td>
  </tr>
   
  <tr>
    <td>Gender:</td>
    <td>Male 
        
          <input type="radio" name="g" value="Male" checked="">
		   Female
                  <input type="radio" name="g" value="female" >      </td>
  </tr>
  
  <tr>
    <td><div align="left">Contact No: </div></td>
    <td>
        <div align="left">
          <input type="text" name="t5" id="t5" >
        </div></td>
  </tr>
  <tr>
    <td><div align="left">E-mail id </div></td>
    <td>
        <div align="left">
          <input type="text" name="t6" id="t6" >
        </div></td>
  </tr>
  <tr>
    <td colspan="2">
        <div align="center">
          <input type="submit" name="sub" value="OK" onClick="return (validate());">
          <input type="submit" name="res" value="CANCEL" >
        </div></td>
    </tr>
</table>
</form>			
					

                    <br />                   
                    <br />                 

	<div class="row-fluid"></div>
                    

    <div class="row-fluid"></div>  

                </div>
            <!--End Main Content-->
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">

            <div class="row-fluid">
                </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2015 Exam Plus. All Rights Reserved.
                    </p>

                                   </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


</body>
</html>
<?php
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
if(isset($_POST['sub']))
{
 $a=$_POST['t1'];
 $b=$_POST['t2'];
 $c=$_POST['Designation'];
 $d=$_POST['Department'];
 $e=$_POST['t3'];
 $f=$_POST['t4'];
 $i=$_POST['g'];
 $j=$_POST['t5'];
 $k=$_POST['t6']; 
 $res="insert into faculty values('".$b."','".$a."','".$c."','".$d."','".$e."','".$f."','".$i."','".$j."','".$k."','0')";
$result=mysql_query($res);
$log="insert into login values('".$b."','".$c."')";
$login=mysql_query($log);
if($result)
{
echo "<script language='javascript'>
alert('Registration sucess');
</script>";
}
else
{
 echo "DATA ERROR".mysql_error();
}
}
mysql_close($conn);
?>