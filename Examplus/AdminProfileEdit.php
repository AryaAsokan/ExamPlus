﻿<?php
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g1="";
$g2="";
$g3="";
$h="";
$i="";
$j="";
$k="";
session_start();
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t="select *  from admindetails where user_name='".$_SESSION['u']."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
$nam=$arr['faculty_id'];
$nam1=$arr['user_name'];
$t1="select designation,department,age, address,gender,contact_no,email_id from faculty where faculty_id='".$nam."'";
$re1=mysql_query($t1);
$arr1=mysql_fetch_array($re1);
if(isset($_POST['b1']))
{
$a=$_POST['designation'];
$hh="update faculty set designation='".$a."' where faculty_id='".$nam."'";
$r=mysql_query($hh);
if($r)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b2']))
{
$b=$_POST['t3'];
$hh1="update faculty set age='".$b."' where faculty_id='".$nam."'";
$r1=mysql_query($hh1);
if($r1)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b3']))
{
$c=$_POST['t4'];
$hh2="update faculty set address='".$c."' where faculty_id='".$nam."'";
$r2=mysql_query($hh2);
if($r2)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b4']))
{
$d=$_POST['t5'];
$hh3="update faculty set contact_no='".$d."' where faculty_id='".$nam."'";
$r3=mysql_query($hh3);
if($r3)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b5']))
{
$e=$_POST['t6'];
$hh4="update faculty set email_id='".$e."' where faculty_id='".$nam."'";
$r4=mysql_query($hh4);
if($r4)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b6']))
{
$f=$_POST['t7'];
$hh5="update admindetails set user_name='".$f."' where faculty_id='".$nam."'";
$r5=mysql_query($hh5);

if($r5)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
$gg="update login set user_name='".$f."' where user_name='".$_SESSION['u']."'";
$re=mysql_query($gg);
if($re)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b7']))
{
$g=$_POST['t8'];
$hh6="update login set password='".$g."' where user_name='".$_SESSION['u']."'";
$r6=mysql_query($hh6);
if($r6)
{
header("location:AdminProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
//if(isset($_POST['sub']))
//{
//$g=$_POST['designation'];
//$h=$_POST['department'];
//$i=$_POST['t3'];
//$j=$_POST['t4'];
//$k=$_POST['g'];
//$l=$_POST['t5'];
//$m=$_POST['t6'];
//}

$t2="select password from login where user_name='".$nam1."'";
$res2=mysql_query($t2);
$arr2=mysql_fetch_array($res2);
mysql_close($conn);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
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
if(f1.designation.selectedIndex==0)
  {
  alert("Select the designation");
  f1.department.focus();
  return false;
  }
  
}
function validat()
{
var k,j;
j=f1.t3.value;
if(f1.t3.value=="")
  {
  alert("Enter age");
  f1.t3.focus();
  return false;
  }
  else if(isNaN(f1.t3.value))
{
alert("Age Must Consist Only Numeric");
f1.t3.value="";
f1.t3.focus();
return false;
}
  
}
function validate3()
{
 if(f1.t4.value=="")
  {
  alert("Enter address");
  f1.t4.focus();
  return false;
  }
} 
function validate4()
{
var k,j;
k=f1.t5.value;
 if(f1.t5.value=="")
  {
  alert("Enter Phone Number");
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
}
function validate5()
{
var k,j;
j=f1.t6.value;
  if(f1.t6.value=="")
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
function validate6()
{
 if(f1.t7.value=="")
  {
  alert("Enter user name");
  f1.t7.focus();
  return false;
  }
}  
function validate7()
{
 if(f1.t8.value=="")
  {
  alert("Enter password");
  f1.t8.focus();
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
							<li><a  href="AddNewAdmin.php">Add New Admin</a></li>
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
                   <h1 align="center"> Edit Profile </h1>
          <form name="f1"   method="post"  action="AdminProfileEdit.php">
            <table width="943" border="0" align="center">
              <tr>
                <td width="117"><div align="left">Faculty ID:</div></td>
                <td width="600"><input type="text" name="t1" id="t1" value="<?php echo $arr['faculty_id']?>">
                &nbsp;</td>
              </tr>
              <tr>
                <td><div align="left">Name: </div></td>
                <td><input type="text" name="t2"  id="t2" value="<?php echo $arr['name']  ?>" >
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">Designation: </div></td>
                <td><select name="designation">
				<option selected="selected"><?php echo $arr1['designation'] ?>
				<option>Select Designation</option>
				<option>PROFESSOR</option>
				<option>ASSOCIATE PROFESSOR</option>
				<option>ASSISTANT PROFESSOR</option></select>
                <input type="submit" value="Edit" name="b1" onClick="return(validate());"></td>
              </tr>
              <tr>
                <td><div align="left">Department: </div></td>
                <td><select name="department"  >
                    <option selected="selected"><?php echo $arr1['department']  ?> </option>
                    <option>Select Department</option>
                    <option>CSE</option>
                    <option>PDE</option>
                    <option>CHE</option>
                  </select>                </td>
              </tr>
              
              <tr>
                <td><div align="left">Age:</div></td>
                <td><input type="text" name="t3" id="t3" value="<?php echo $arr1['age'] ?>">
				<input type="submit" name="b2" value="Edit" onClick="return(validat());"></td>
              </tr>
              <tr>
                <td><div align="left">Address:</div></td>
                <td>
              <textarea name="t4"> <?php echo $arr1['address'] ?></textarea> 
			  <input type="submit" name="b3" value="Edit" onClick="return(validate3());">             </tr>
              <tr>
                <td>Gender:</td>
				<td><select name="g" >
				
				<option>Gender</option>
				<option selected="selected"><?php echo $arr1['gender'] ?></option>
				<option>Male</option>
				<option>Female</option>
				</select></td>
              </tr
              
              ><tr>
                <td><div align="left">Contact No: </div></td>
                <td><input type="text" name="t5" id="t5"  value="<?php echo $arr1['contact_no']  ?>">
                  <input type="submit" name="b4" value="Edit" onClick="return(validate4());"> </td>
              </tr>
              <tr>
                <td><div align="left">E-mail id </div></td>
                <td><input type="text" name="t6" id="t6" value="<?php echo $arr1['email_id']  ?>">
                 <input type="submit" name="b5" value="Edit" onClick="return(validate5());"> </td>
              </tr>
			  
			   <tr>
                <td><div align="left">Date Of Join </div></td>
                <td><?php			
              $string = $arr['date_of_join']; 
              $words = explode("-", $string ); 
              for( $i = 0; $i < count($words); $i++ ) 
              $words[$i]; 
               ?><select name="date">
				<option selected="selected"><?php echo $words[0]?></option>
                  <option>Day</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
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
                    <select name="month" >
                      <option>Month</option>
					  <option selected="selected"><?php echo $words[1] ?></option>
                      <option>jan</option>
                      <option>feb</option>
                      <option>mar</option>
                      <option>apr</option>
                      <option>may</option>
                      <option>jun</option>
                      <option>jul</option>
                      <option>aug</option>
                      <option>sep</option>
                      <option>oct</option>
                      <option>nov</option>
                      <option>dec</option>
                    </select>
                    <select name="year2" >
                      <option>Year</option>
					  <option selected="selected"><?php echo $words[2] ?></option>
                      <option>2010</option>
                      <option>2011</option>
                      <option>2013</option>
                      <option>2014</option>
                      <option>2015</option>
                      <option>2016</option>
                      <option>2017</option>
                      <option>2018</option>
					  <option>2019</option>
					  <option>2020</option>
                    </select>

                  &nbsp; </td>
              </tr>
			   <tr>
                <td><div align="left">User Name </div></td>
                <td><input type="text" name="t7" id="t7" value="<?php echo $arr['user_name']?>">
                  <input type="submit" name="b6" value="Edit" onClick="return(validate6());"> </td>
              </tr>
			  <tr>
                <td><div align="left">Password </div></td>
                <td><input type="password" name="t8" value="<?php echo $arr2['password'] ?>">
                  <input type="submit" name="b7" value="Edit" onClick="return(validate7());"> </td>
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
?>
