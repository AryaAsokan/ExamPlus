<?php
session_start();
$nam="";
 $con=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t= "select faculty_id from admindetails where user_name='".$_SESSION['u']."'";
$w1=mysql_query($t);
$arr1=mysql_fetch_array($w1);
$nam=$arr1['faculty_id'];
$t1="select * from faculty where faculty_id='".$nam."'";
$res1=mysql_query($t1);
$arr2=mysql_fetch_array($res1);
//$uname=$arr['name'];
?>
<?php
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
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
if(isset($_POST['b1']))
{
$w=$_POST['t1'];
$t="select * from studentdetails where enrollment_no='".$w."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
}
if(isset($_POST['b2']))
{
 $a=$_POST['t1'];
 $b=$_POST['t2'];
// $c=$_POST['t3'];
 $d=$_POST['year1'];
 $e=$_POST['department'];
 $l=$_POST['semester'];
 $f=$_POST['t4'];
 $g1=$_POST['date'];
 $g2=$_POST['month'];
 $g3=$_POST['year2'];
 $h=$g1."-".$g2."-".$g3;
 $i=$_POST['g'];
 $j=$_POST['t5'];
 $k=$_POST['t6']; 
 $res="update studentdetails set name='".$b."',acadamic_year='".$d."',department='".$e."',semester='".$l."',address='".$f."',date_of_birth='".$h."',gender='".$i."',contact_no='".$j."',email_id='".$k."' where enrollment_no='".$a."'";
$result1=mysql_query($res);
//$log="insert into login values('".$b."','".$c."')";
//$result2=mysql_query($log);
if($result1)
{

header("location: studentUpdation.php");
echo "RECORD UODATED SUCCESSFULLY";
}
else
{
 echo "DATA ERROR".mysql_error();
}
}
mysql_close($conn);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Updation</title>
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
if(f1.t1.value=="")
{
alert("Pease enter an EnrollmentNo");
f1.t1.focus();
return false;
  }
  
}
function check()
{
var k,j;
j=f1.t6.value;
k=f1.t5.value;
if(f1.t2.value=="")
{
alert("Enter Name");
f1.t2.focus();
return false;
  }
  
  else if(f1.t3.value=="")
{
alert("Enter Admission No:");
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
                            <li><a href="FacultyAllocationUniversityl.php">University Exam</a></li>
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
                     <h1 align="center"> Student Updation</h1>
          <form name="f1"   method="post"  action="studentUpdation.php">
            <table width="943" border="0" align="center">
              <tr>
                <td width="117"><div align="left">EnrollmentNo:</div></td>
                <td width="600"><input type="text" name="t1" id="t1" value="<?php echo $arr['enrollment_no']?>">
                  &nbsp;
                  <input type="submit" value="Search" name="b1" onClick="return(validate());">
                </td>
              </tr>
              <tr>
                <td><div align="left">Name: </div></td>
                <td><input type="text" name="t2"  id="t2" value="<?php echo $arr['name']  ?>" >
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">Admission No: </div></td>
                <td><input type="text" name="t3" id="t3" value="<?php echo $arr['admission_no']  ?>">
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">Acadamic year: </div></td>
                <td><select name="year1"  >
                    <option selected="selected"><?php echo $arr['acadamic_year']  ?> </option>
                    <option>Year</option>
                    <option>2011-2015</option>
                    <option>2012-2016</option>
                    <option>2013-2017</option>
                    <option>2014-2018</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><div align="left">Department:</div></td>
                <td><select name="department"   >
                    <option selected="selected"><?php echo $arr['department']  ?></option>
                    <option>Department</option>
                    <option>CSE</option>
                    <option>CHE</option>
                    <option>PDE</option>
                  </select>
                </td>
              </tr>
			  <tr>
                <td><div align="left">Semester:</div></td>
                <td><select name="semester"   >
                    <option selected="selected"><?php echo $arr['semester'] ?></option>
                    <option>Select Semester</option>
                    <option>S1&amp;S2</option>
                    <option>S3</option>
                    <option>S4</option>
					<option>S5</option>
					<option>S6</option>
					<option>S7</option>
					<option>S8</option>
                  </select>
				 </td>
              </tr>
             
              <tr>
                <td><div align="left">Address:</div></td>
                <td><textarea name="t4" cols="" rows="" ><?php echo $arr['address']  ?></textarea>
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">Date of Birth:</div></td>
                <td><?php			
$string = $arr['date_of_birth']; 
$words = explode("-", $string ); 
for( $i = 0; $i < count($words); $i++ ) 
$words[$i]; 
?>
                    <select name="date">
                      <option selected="selected"><?php echo $words[0] ?></option>
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
                      <option selected="selected"><?php echo $words[1] ?></option>
                      <option>Month</option>
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
                      <option selected="selected"><?php echo $words[2] ?></option>
                      <option>Year</option>
                      <option>1990</option>
                      <option>1991</option>
                      <option>1992</option>
                      <option>1993</option>
                      <option>1994</option>
                      <option>1995</option>
                      <option>1996</option>
                      <option>1997</option>
                    </select>
                          </tr>
              <tr>
                <td>Gender:</td>
				<td><select name="g" >
				
				<option>Gender</option>
				<option selected="selected"><?php echo $arr['gender'] ?></option>
				<option>Male</option>
				<option>Female</option>
				</select></td>
              </tr
              
              ><tr>
                <td><div align="left">Contact No: </div></td>
                <td><input type="text" name="t5" id="t5"  value="<?php echo $arr['contact_no']  ?>">
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">E-mail id </div></td>
                <td><input type="text" name="t6" id="t6" value="<?php echo $arr['email_id']  ?>">
                  &nbsp; </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                    <input type="submit" name="b2" value="Ok" onClick="return(check())"; >
                    <input type="submit" name="b3" value="Cancel">
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