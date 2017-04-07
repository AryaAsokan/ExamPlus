<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Subject</title>
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
</head>

<script type="text/javascript" language="javascript">
function validate()
{ 
 if(f1.semester.selectedIndex==0)
  {
  alert("Select Semester");
  f1.semester.focus();
  return false;
  }
  else if(f1.semester.selectedIndex!=1 && f1.department.selectedIndex==0)
  {
  alert("Select department");
  f1.department.focus();
  return false;
  }
  /*if(f1.department.selectedIndex==0)
  {
  alert("Select a Department");
  f1.department.focus();
  return false;
  }*/
  else if(f1.t1.value=="")
  {
  alert("Enter Subject Code");
  f1.t1.focus();
  return false;
  }
 
  else if(f1.t2.value=="")
  {
  alert("Enter Subject Name:");
  f1.t2.focus();
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
                        <a href="" id="divTagLine">The Complete Examination Manager</a>                  </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>                        </button>
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
                            <li><a href="FacultyRegistration.php">Registration</a></li>
                            <li><a href="FacultyUpdation.php">Edit</a></li>
                            <li><a href="FacultyDeletion.php">Delete</a></li>
							<li class="dropdown">
                            <a class="dropdown-toggle">Allocate Faculty</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a  href="FacultyAllocationUniversityl.php">University Exam</a></li>
                            <li><a href="FacultyAllocationInternal.php">Internal Exam</a></li>
                            </ul>
                            </li>
							</ul>
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
                    <h1 align="center">Add Subject </h1>
                    <form name="f1" method="post" action="AddSubject.php">
                      <table width="464" height="411" border="0" align="center">
                      
                      <tr>
                        <td height="24" valign="top">Semester</td>
                        <td height="24" valign="top"><select name="semester">
                       <option>Select Semester</option>
                       <option >S1&amp;S2 </option>
                       <option>S3</option>
                       <option>S4</option>
                       <option>S5</option>
					   <option>S6</option>
					   <option>S7</option>
					   <option>S8</option>
                        </select></td>
                      </tr>
					  <tr>
                        <td width="234" height="42" valign="top">Department</td>
                        <td width="220">
						<select name="department">
                          <option>Select Department</option>
                          <option>CSE</option>
                          <option>CHE</option>
                          <option>PDE</option>
                        </select></td>
                      </tr>
					  
                      <tr>
                        <td height="40" colspan="2" valign="top">Enter the subject codes and names: </td>
                       </tr>
                      <tr>
                        <td >1.<input type="text" name="c1"></td>
                        <td><input type="text" name="n1"></td>
                      </tr>
                      <tr>
                        <td >2.<input type="text" name="c2"></td>
                        <td><input type="text" name="n2"></td>
                      </tr>
                      <tr>
                        <td >3.<input type="text" name="c3"></td>
                        <td><input type="text" name="n3"></td>
                      </tr>
                      <tr>
                        <td >4.<input type="text" name="c4"></td>
                        <td><input type="text" name="n4"></td>
                      </tr>
                      <tr>
                        <td >5.<input type="text" name="c5"></td>
                        <td><input type="text" name="n5"></td>
                      </tr>
                      <tr>
                        <td >6.<input type="text" name="c6"></td>
                        <td><input type="text" name="n6"></td>
                      </tr>
                      <tr>
                        <td >7.
                        <input type="text" name="c7"></td>
                        <td><input type="text" name="n7"></td>
                      </tr>
                      <tr>
                        <td >8.<input type="text" name="c8"></td>
                        <td><input type="text" name="n8"></td>
                      </tr>
                      <tr>
                        <td height="31" valign="top"><div align="center">
                          <input type="submit" name="b1" value="Ok"  onClick="return (validate());" >
                        </div></td>
                        <td><div align="center">
                          <input type="submit" name="b2" value="Cancel">
                        </div></td>
                      </tr>
                  </table>
					
					  <div align="center"></div>
			      </form>
					    <br />                   
					    <br />                 
              </div>
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
<br />
<br /><br />

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
if(isset($_POST['b1']))
{
 $a=$_POST['department'];
 $b=$_POST['semester'];
// $c=$_POST[''];
// $d=$_POST['t2'];
 $arr = array("$b","$a");
 $arr=implode("_",$arr);
 if($b=="S1&S2")
 {
 $c1=$_POST['c1'];
 $d1=$_POST['n1'];
 	$res="insert into `S1&S2` values('".$c1."','".$d1."') ";
	$result=mysql_query($res);
 $c2=$_POST['c2'];
 $d2=$_POST['n2'];
 $res="insert into `S1&S2` values('".$c2."','".$d2."') ";
	$result=mysql_query($res);
	 $c3=$_POST['c3'];
 $d3=$_POST['n3'];
 $res="insert into `S1&S2` values('".$c3."','".$d3."') ";
	$result=mysql_query($res);
	 $c4=$_POST['c4'];
 $d4=$_POST['n4'];
 $res="insert into `S1&S2` values('".$c4."','".$d4."') ";
	$result=mysql_query($res);
	 $c5=$_POST['c5'];
 $d5=$_POST['n5'];
 $res="insert into `S1&S2` values('".$c5."','".$d5."') ";
	$result=mysql_query($res);
	 $c6=$_POST['c6'];
 $d6=$_POST['n6'];
 $res="insert into `S1&S2` values('".$c6."','".$d6."') ";
	$result=mysql_query($res);
	 $c7=$_POST['c7'];
 $d7=$_POST['n7'];
 $res="insert into `S1&S2` values('".$c7."','".$d7."') ";
	$result=mysql_query($res);
	 $c8=$_POST['c8'];
 $d8=$_POST['n8'];
 $res="insert into `S1&S2` values('".$c8."','".$d8."') ";
	$result=mysql_query($res);
	$res1="insert into `syllabus` values('".$b."','".$c1."','".$c2."','".$c3."','".$c4."','".$c5."','".$c6."','".$c7."','".$c8."','0','0') ";
$result1=mysql_query($res1);
	
 }
 else
 {
  $arr = array("$b","$a");
 $arr=implode("_",$arr);
  $c1=$_POST['c1'];
 $d1=$_POST['n1'];
 	$res="insert into $arr values('".$c1."','".$d1."') ";
	$result=mysql_query($res);
	$c2=$_POST['c2'];
 $d2=$_POST['n2'];
 	$res="insert into $arr values('".$c2."','".$d2."') ";
	$result=mysql_query($res);
	$c3=$_POST['c3'];
 $d3=$_POST['n3'];
 	$res="insert into $arr values('".$c3."','".$d3."') ";
	$result=mysql_query($res);
	$c4=$_POST['c4'];
 $d4=$_POST['n4'];
 	$res="insert into $arr values('".$c4."','".$d4."') ";
	$result=mysql_query($res);
	$c5=$_POST['c5'];
 $d5=$_POST['n5'];
 	$res="insert into $arr values('".$c5."','".$d5."') ";
	$result=mysql_query($res);
	$c6=$_POST['c6'];
 $d6=$_POST['n6'];
 	$res="insert into $arr values('".$c6."','".$d6."') ";
	$result=mysql_query($res);
	$res1="insert into syllabus values('".$arr."','".$c1."','".$c2."','".$c3."','".$c4."','".$c5."','".$c6."','0','0','0','0') ";
$result1=mysql_query($res1);
 }
 

if($result1)
{
echo "RECORD INSERTED SUCCESSFULLY";
}
else
{
 echo "DATA ERROR".mysql_error();
}
}
mysql_close($conn);
?>


