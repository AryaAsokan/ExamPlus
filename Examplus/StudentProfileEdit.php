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
$x="";
session_start();
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t="select *  from studentdetails where enrollment_no='".$_SESSION['u']."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
$nam=$arr['enrollment_no'];
//$nam1=$arr['user_name'];
//$t1="select designation,department,age, address,gender,contact_no,email_id from faculty where faculty_id='".$nam."'";
//$re1=mysql_query($t1);
//$arr1=mysql_fetch_array($re1);
if(isset($_POST['b1']))
{
$a=$_POST['department'];
$hh="update studentdetails set department='".$a."' where enrollment_no='".$nam."'";
$r=mysql_query($hh);
if($r)
{
header("location:StudentProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b2']))
{
$b=$_POST['t4'];
$hh1="update studentdetails set address='".$b."' where enrollment_no='".$nam."'";
$r1=mysql_query($hh1);
if($r1)
{
header("location:StudentProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}

if(isset($_POST['b3']))
{
$d=$_POST['t5'];
$hh3="update studentdetails set contact_no='".$d."' where enrollment_no='".$nam."'";
$r3=mysql_query($hh3);
if($r3)
{
header("location:StudentProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b4']))
{
$e=$_POST['t6'];
$hh4="update studentdetails set email_id='".$e."' where enrollment_no='".$nam."'";
$r4=mysql_query($hh4);
if($r4)
{
header("location:StudentProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b6']))
{
$x=$_POST['semester'];
$hh33="update studentdetails set semester='".$x."' where enrollment_no='".$nam."'";
$rr3=mysql_query($hh33);
if($rr3)
{
header("location:StudentProfileEdit.php");
}
else
{
echo "SORRY".mysql_error();
}
}
if(isset($_POST['b5']))
{
$g=$_POST['t8'];
$hh6="update login set password='".$g."' where user_name='".$_SESSION['u']."'";
$r6=mysql_query($hh6);
if($r6)
{
header("location:StudentProfileEdit.php");
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

$t2="select * from login where user_name='".$nam."'";
$res2=mysql_query($t2);
$arr2=mysql_fetch_array($res2);
mysql_close($conn);
?>
<html>
<head>

    <meta charset="utf-8">
    <title>Profile Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link  href="scripts/bootstrap/css/bootstrap.min.css"rel="stylesheet">
    <link  href="scripts/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link  href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet"  href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link  href="scripts/carousel/style.css"rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css"  rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link  href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" language="javascript">
function validate()
{
if(f1.department.selectedIndex==0)
  {
  alert("Select the department");
  f1.department.focus();
  return false;
  }
  
}

function validate8()
{
if(f1.semester.selectedIndex==0)
  {
  alert("Select the department");
  f1.semester.focus();
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
        <div id="divLogo" class="pull-left" align="center"><a href="" id="divSiteTitle" > Exam Plus</a><br />
          <a href="" id="divTagLine">The Complete Examination Manager</a> </div>
        <div id="divMenuRight" class="pull-right">
          <div class="navbar">
            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse"> NAVIGATION <span class="icon-chevron-down icon-white"></span> </button>
            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="active"><a href="StudentHome.php">Home</a></li>
                        
							<li class="dropdown">
                            <a  class="dropdown-toggle">Exam <b class="caret"></b></a>
                            <ul class="dropdown-menu">
							<li><a href="ExamRegistration.php">Registration</a></li>
                            <li class="dropdown">
							<a class="dropdown-toggle">Timetable &nbsp;&raquo;</a>
							<ul class="dropdown-menu sub-menu">
                             <li><a href="ViewTimetableS.php">Series</a></li>
                            </ul>
							</li>
							
                                                        </ul>
                            </li>
													  <li class="dropdown">
                            <a  class="dropdown-toggle">view<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="ViewMarks.php">Mark</a></li>
                            
							<li><a href="ViewNotes.php">Notes</a></li>
                            </ul>
                            </li>
						   
							<li class="dropdown">
						    <a  class="dropdown-toggle">Settings<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="StudentProfileEdit.php">Profile</a></li>
                            <li><a href="Logout.php">Logout</a></li>
                    </ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contentArea">
    <div class="divPanel notop page-content">
      <div class="row-fluid">
        <!--Edit Main Content Area here-->
        <div class="span12" id="divMain">
           <h1 align="center">  Edit Profile </h1>
          <form name="f1"   method="post"  action="StudentProfileEdit.php">
            <table width="943" border="0" align="center">
              <tr>
                <td width="150"><div align="left">Enrollment No:</div></td>
                <td width="783"><input type="text" name="t1" id="t1" value="<?php echo $arr['enrollment_no']?>">
                &nbsp;</td>
              </tr>
              <tr>
                <td><div align="left">Name: </div></td>
                <td><input type="text" name="t2"  id="t2" value="<?php echo $arr['name']  ?>" >
                  &nbsp; </td>
              </tr>
              <tr>
                <td><div align="left">Admission No: </div></td>
                <td><input type="text" name="t3" id="t3" value="<?php echo $arr['admission_no']?>"></td>
              </tr>
              <tr>
                <td><div align="left">Acadamic Year: </div></td>
                <td><select name="year1"  >
                    <option selected="selected"><?php echo $arr['acadamic_year']  ?> </option>
                    <option>Year</option>
                    <option>2011-2015</option>
                    <option>2012-2016</option>
                    <option>2013-2017</option>
                    <option>2014-2018</option>
                  </select>             </td>
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
				  <input type="submit" name="b1" value="Edit" onClick="return(validate());"></td>
              </tr>
			  <tr>
                <td><div align="left">Semester:</div></td>
                <td><select name="semester"   >
                    <option selected="selected"><?php echo $arr['semester']  ?></option>
                    <option>Select Semester</option>
                    <option>S1&amp;S2</option>
                    <option>S3</option>
                    <option>S4</option>
					<option>S5</option>
					<option>S6</option>
					<option>S7</option>
					<option>S8</option>
                  </select>
				  <input type="submit" name="b6" value="Edit" onClick="return(validate8());"></td>
              </tr>
              
              <tr>
                <td><div align="left">Address:</div></td>
                <td>
              <textarea name="t4"> <?php echo $arr['address'] ?></textarea> 
			  <input type="submit" name="b2" value="Edit" onClick="return(validate3());">             </tr>
              <tr>
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
                </td>
				</tr>
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
                  <input type="submit" name="b3" value="Edit" onClick="return(validate4());"> </td>
              </tr>
              <tr>
                <td><div align="left">E-mail id </div></td>
                <td><input type="text" name="t6" id="t6" value="<?php echo $arr['email_id']  ?>">
                 <input type="submit" name="b4" value="Edit" onClick="return(validate5());"> </td>
              </tr>
			  
			   <tr>
                <td><div align="left">User Name </div></td>
                <td><input type="text" name="t7" id="t7" value="<?php echo $arr2['user_name']?>"></td>
              </tr>
			  <tr>
                <td><div align="left">Password </div></td>
                <td><input type="password" name="t8" value="<?php echo $arr2['password'] ?>">
                  <input type="submit" name="b5" value="Edit" onClick="return(validate7());"> </td>
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
        <div class="span3" id="footerArea1">
          
        </div>
      </div>
      <br />
      <br />
      <div class="row-fluid">
        <div class="span12">
          <p class="copyright"> Copyright © 2015 Exam Plus. All Rights Reserved. </p>
        </div>
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
