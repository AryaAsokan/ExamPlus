<?php
session_start();
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$d=date('Y-m-d');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Timetable Schduler</title>
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


 
 if(f1.seriesno.selectedIndex==0)
  {
  alert("Select the series No:");
  f1.seriesno.focus();
  return false;
  }
 else if(f1.Department.selectedIndex==0)
  {
  alert("Select Department:");
  f1.Department.focus();
  return false;
  }
  else if(f1.day.selectedIndex==0)
  {
  alert("Select Day:");
  f1.day.focus();
  return false;
  }
  else if(f1.month.selectedIndex==0)
  {
  alert("Select Month:");
  f1.month.focus();
  return false;
  }
  else if(f1.year.selectedIndex==0)
  {
  alert("Select Year:");
  f1.year.focus();
  return false;
  }



 
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
							<li><a href="AddNewAdmin.php">Add New Admin</a></li>
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
<h1 align="center">Schedule Timetable</h1>
                   <form name="f1" method="post" action="ScheduleTimetable.php">
                     
                     <table width="852" height="145" border="0" align="center">
					 <tr>
                        <td width="175" height="31" >Series No:</td>
						<td width="175" height="31"><select name="seriesno">
						<option>Select series No</option>
						<option>First</option>
						<option>Second</option>
						</select></td>
					   </tr>
                      <tr>
                        <td width="175" height="31">Department:</td>
                        <td width="465"><select name="Department">
                          <option>Select Department</option>
                          <option>CSE</option>
                          <option>CHE</option>
                          <OPTION>PE</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td height="24" valign="top">Semester:</td>
                        <td height="24" valign="top"><select name="semester">
                          <option>Select Semester</option>
                          <option>S1&amp;S2</option>
                          <option>S3</option>
                          <option>S4</option>
                          <option>S5</option>
                          <option>S6</option>
                          <option>S7</option>
                          <option>S8</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td height="40" valign="top">Starting Date:</td>
                        <td>
                          
                          <div align="left"><select name="day">
						   <option>Select a day</option>
						  <option>01</option>
						  <option>02</option>
						  <option>03</option>
						  <option>04</option>
						  <option>05</option>
						  <option>06</option>
						  <option>07</option>
						  <option>08</option>
						  <option>09</option>
						  <option>10</option>
						   <option>11</option>
						  <option>12</option>
						  <option>13</option>
						  <option>14</option>
						  <option>15</option>
						  <option>16</option>
						  <option>17</option>
						  <option>18</option>
						  <option>19</option>
						  <option>20</option>
						   <option>21</option>
						  <option>22</option>
						  <option>23</option>
						  <option>24</option>
						  <option>25</option>
						  <option>26</option>
						  <option>27</option>
						  <option>28</option>
						  <option>29</option>
						  <option>30</option>
						   <option>31</option>
						  </select>
                            <select name="month">
                              <option>Select a month</option>
                              <option>Jan</option>
                              <option>Feb</option>
                              <option>Mar</option>
                              <option>Apr</option>
                              <option>May</option>
                              <option>Jun</option>
                              <option>Jul</option>
                              <option>Aug</option>
                              <option>Sep</option>
                              <option>Oct</option>
                              <option>Nov</option>
                              <option>Dec</option>
                            </select><select name="year">
							<option>Select Year</option>
							<option>2014</option>
							<option>2015</option>

<option>2016</option>

<option>2017</option>

							</select>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="40" colspan="2" valign="top"><div align="center">
                          <input type="submit" name="sub" value="Schedule"  onClick="return (validate());" >
                          <input type="submit" name="r1" value="Cancel">
                        </div></td>
                       </tr>
                  </table>
				  <?php
				  if(isset($_POST['sub']))
{

 $a=$_POST['seriesno'];
 $b=$_POST['Department'];
 $c=$_POST['semester'];
 $g1=$_POST['day'];
 $g2=$_POST['month'];

 $g2= date('m',strtotime($g2));
  $g3=$_POST['year'];
 $h=$g1."-".$g2."-".$g3;
 $day = date('l', strtotime( $h));
if (($day == 'Sunday') )
{
$date=new datetime($h); 
 $h=$date->modify('+1 day');
 $h=$date->format('d-m-Y');
}
else if(($day == 'Saturday'))
{
 $date=new datetime($h); 
 $h=$date->modify('+2 day');
 $h=$date->format('d-m-Y');
}
 
 $date=new datetime($h); 
 $h1=$date->modify('+1 day');
 $h1=$date->format('d-m-Y');
 	
 $day = date('l', strtotime( $h1));
if (($day == 'Sunday') )
{
$date=new datetime($h1); 
 $h1=$date->modify('+1 day');
 $h1=$date->format('d-m-Y');
}
else if(($day == 'Saturday'))
{
 $date=new datetime($h1); 
 $h1=$date->modify('+2 day');
 $h1=$date->format('d-m-Y');
}
 
  $date=new datetime($h1); 
 $h2=$date->modify('+1 day');
 $h2=$date->format('d-m-Y');
  $day = date('l', strtotime( $h2));
if (($day == 'Sunday') )
{
$date=new datetime($h2); 
 $h2=$date->modify('+1 day');
 $h2=$date->format('d-m-Y');
}
else if(($day == 'Saturday'))
{
 $date=new datetime($h2); 
 $h2=$date->modify('+2 day');
 $h2=$date->format('d-m-Y');
}
 
$date=new datetime($h2); 
 $h3=$date->modify('+1 day');
 $h3=$date->format('d-m-Y');
  $day = date('l', strtotime( $h3));
if (($day == 'Sunday') )
{
$date=new datetime($h3); 
 $h3=$date->modify('+1 day');
 $h3=$date->format('d-m-Y');
}
else if(($day == 'Saturday'))
{
 $date=new datetime($h3); 
 $h3=$date->modify('+2 day');
 $h3=$date->format('d-m-Y');
}
  

 
  if($c=="S1&S2")
 {
 $q1="select * from syllabus where code='".$c."'";
 $r1=mysql_query($q1);
 $row1=mysql_fetch_array($r1);
 //echo "$row1[1]";
 $c1=$row1[1];
 $c2=$row1[2];
 $c3=$row1[3];
 $c4=$row1[4];
$c5=$row1[5];
 $c6=$row1[6];
 $c7=$row1[7];
$c8=$row1[8];
 $q2="insert into `timetable` values('".$c."','".$b."','".$c."','".$c1."','".$c2."','".$c3."','".$c4."','".$c5."','".$c6."','".$c7."','".$c8."','".$h."')";
 $r2=mysql_query($q2);
 if($r2)
 {
 //echo "suceed";
 }
 else
 {
echo "error".mysql_error();
 }
 $q3="insert into `examdate` values('".$c."','".$h."','".$b."')";
 $r3=mysql_query($q3);
if($r2)
{
//echo "Success";
}
else
{
//echo "ERROR".mysql_error();
}
 echo "<table border='1' align='center' width='70%'>
  <tr><td align='center' colspan='3' height='40'><strong>Time Table for ".$a."".$c." Series Test</strong></td></tr>
  <tr><td align='left' width='30%'>Date</td><td align='left' width='50%'>Time</td><td align='left'>Subject</td></tr>
  <tr><td align='left' width='30%'>".$h."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c1."</td>
   <tr><td align='left' width=30%'>".$h."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c2."</td>
    <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c3."</td>
	 <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c4."</td>
	  <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c5."</td>
	   <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c6."</td>
	    <tr><td align='left' width='30%'>".$h3."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c7."</td>
		 <tr><td align='left' width='30%'>".$h3."</td><td align='left' width='50%'>1:30 AM-3:30 AM</td><td align='left' width='20%'>".$c8."</td></table>";

 }
 else
 {
  $arr = array("$c","$b");
 $arr=implode("_",$arr);
  $q1="select * from `syllabus` where code='".$arr."'";
 $r1=mysql_query($q1);
 $row1=mysql_fetch_array($r1);
 $c1=$row1[1];
 $c2=$row1[2];
 $c3=$row1[3];
  $c4=$row1[4];
 $c5=$row1[5];
 $c6=$row1[6];
  
 $q2="insert into `timetable` values('".$arr."','".$b."','".$c."','".$c1."','".$c2."','".$c3."','".$c4."','".$c5."','".$c6."','0','0','".$h."')";
 $r2=mysql_query($q2);

 $q3="insert into `examdate` values('".$arr."','".$h."','".$b."')";
 $r3=mysql_query($q3);
if($r2)
{
//echo "Success";
}
else
{
//echo "ERROR".mysql_error();
}
 echo "<table border='1' align='center' width='70%'>
  <tr><td align='center' colspan='3' height='40'><strong>Time Table for ".$arr."".$a."Series Test</strong></td></tr>
  <tr><td align='left' width='30%'>Date</td><td align='left' width='50%'>Time</td><td align='left' width='20%'>Subject</td></tr>
  <tr><td align='left' width='30%'>".$h."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c1."</td>
   <tr><td align='left' width='30%'>".$h."</td><td align='left'  width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c2."</td>
    <tr><td align='left' width='30%'>".$h1."</td><td align='left'  width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$c3."</td>
	 <tr><td align='left' width='30%'>".$h1."</td><td align='left'  width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c4."</td>
	  <tr><td align='left' width='30%'>".$h2."</td><td align='left'  width='50%'>10:00 AM-11:30 AM</td><td align='left width='20%''>".$c5."</td>
	   <tr><td align='left' width='30%'>".$h2."</td><td align='left  width='50%''>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$c6."</td></table>";
	    
  }
 }

mysql_close($conn);

?>

					
					  <div align="center">
                   </form>                    <br />                   
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