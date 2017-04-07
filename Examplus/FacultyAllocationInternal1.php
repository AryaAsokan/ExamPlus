<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Faculty Allocation</title>
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
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
-->
    </style>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left" align="center"><a href="index.html" id="divSiteTitle" >      Exam Plus</a><br />
                        <a href="index.html" id="divTagLine">The Complete Examination Manager</a>
                  </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="active"><a href="AdminHome.html">Home</a></li>
                        
							<li class="dropdown">
                            <a  class="dropdown-toggle">Student <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="studentRegistration.php">Registration</a></li>
                            <li><a href="studentUpdation.php">Edit</a></li>
                            <li><a href="studentDeletion.html">Delete</a></li>
                            </ul>
                            </li>
							<li class="dropdown">
						    <a class="dropdown-toggle">Faculty<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="FacultyRegistration.html">Registration</a></li>
                            <li><a href="FacultyUpdation.html">Edit</a></li>
                            <li><a href="FacultyDeletion.html">Delete</a></li>
							</ul>
						    <li class="dropdown">
                            <a  class="dropdown-toggle">Timetable<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                           <li><a href="#">View</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Schedule &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            
                            <li><a href="TimetableScheduler.html">Internal Exam</a></li>
                            </ul>
                            </li>
                            </ul>
                            </li>
						    <li class="dropdown">
                            <a href="page.html" class="dropdown-toggle">Room <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="AddRoom.html">Add room</a></li>
                            <li><a href="EditRoom.html">Edit room</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Allocate room &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">University Exam</a></li>
                            <li><a href="#">Internal Exam</a></li>
                            </ul>
                            </li>
                            </ul>
                            </li>
							<li class="dropdown">
						    <a href="page.html" class="dropdown-toggle">Settings<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="AdminProfile.html">Profile</a></li>
                            <li><a href="#">Logout</a></li>
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
                  <form action="FacultyAllocationInternal1.php" method="post" enctype="multipart/form-data" name="f1">
                    <p align="center" class="style1"> Faculty Allocation                </p>
                    <p>&nbsp;</p>
                    <table width="874" border="0" align="center">
                      <tr>
                        <td width="177">Department:</td>
                        <td width="687"><select name="department">
						<option>CSE</option>
						<option>CHE</option>
						<option>PDE</option>
                        </select>                        </td>
                      </tr>
                      <tr>
                        <td><p>Enter Examination Date: </p>
                        <p>(YYYY-MM-DD)</p></td>
                        <td><p>
                          <input type="text" name="t1">
                        </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="center">
                          <input type="submit" name="submit" value="Allocate">                        </div></td>
                      </tr>
                    </table>
					<?php
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
if(isset($_POST['submit']))
{
$a= $_POST['department'];
$e=$_POST['t1'];

$f="ASSISTANT PROFESSOR";
$v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
$res=mysql_query($v);
 $rowcount=mysql_num_rows($res);
if($rowcount<=0)
        {
          $res1="update faculty set status='0' where department='".$a."' and designation='".$f."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
          $res=mysql_query($v);
		  
         }
             $i=0;
			$faculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$faculty[$i]=$row[0];
				$i++;
            }	

$res1=mysql_query("select distinct room_no from $a  ");
if($res1)
{
            $j=0;
			$room = array();
			while($row1=mysql_fetch_array($res1,MYSQL_NUM))
			{
				$room[$j]=$row1[0];
				$j++;
			}
	}
	
	
		
$l=0;$m=0;$n=$i;
for($k=0;$k<$j;$k++)
{
   
    
	$v="insert into facultyallocation values('".$faculty[$m]."','".$a."','".$room[$k]."','".$e."','FN') ";
	$res2=mysql_query($v);
	$res3="update faculty set status='1' where faculty_id='".$faculty[$m]."' ";
	$result2=mysql_query($res3);
	$m++;$n--;
	if($n<=0)
	{
	 
	/* $v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
     $res=mysql_query($v);
     $rowcount=mysql_num_rows($res);
     if($rowcount<=0)
        {*/
          $res1="update faculty set status='0' where department='".$a."' and designation='".$f."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
          $res=mysql_query($v);
		  
         
             $i=0;
			$faculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$faculty[$i]=$row[0];
				$i++;
            }	
			$n=$i;
			$m=0;
	 
	
	}
	$v1="insert into facultyallocation values('".$faculty[$m]."','".$a."','".$room[$k]."','".$e."','AN') ";
	$res2=mysql_query($v1);
	$res3="update faculty set status='1' where faculty_id='".$faculty[$m]."' ";
	$result2=mysql_query($res3);
	$m++;$n--;
	if($n<=0)
	{
	 
	/* $v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
     $res=mysql_query($v);
     $rowcount=mysql_num_rows($res);
     if($rowcount<=0)
        {*/
          $res1="update faculty set status='0' where department='".$a."' and designation='".$f."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='".$a."' and designation='".$f."' and status='0' ";
          $res=mysql_query($v);
		  
         
             $i=0;
			$faculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$faculty[$i]=$row[0];
				$i++;
            }	
			$n=$i;
			$m=0;
	 
	
	}
	
	
	
}
 echo "<table border='1' align='center' width='70%'><tr><td colspan='3' align='center'>Faculty Allocation for Internal Examination</td> </tr><tr><td>Faculty Id</td><td>Room No</td><td>Time</td></tr>";
$qr10="select * from facultyallocation where department='".$a."' and date='".$e."'";
$re10=mysql_query($qr10);
while($falloc=mysql_fetch_array($re10))
{
echo "<tr><td> ".$falloc['faculty_id']." </td><td>".$falloc['room_no']."</td><td>".$falloc['time']."</td></tr>";
}
echo "</table>";			
}
?>
                                    <div align="center"></div>
                  </form>
                  <p><strong></p>

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
