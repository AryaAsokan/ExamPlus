﻿

<!DOCTYPE HTML>
<html>
<head>
<style>
		
	
		#recent
	{

    font-family: "Georgia";
    font-size: 12px;
    margin: 60px;
    width: 480px;
    text-align: left;
    border-collapse: collapse;
}
#recent th
{
	font-family: "Arial";
    font-size: 19px;
    font-weight: normal;
    padding: 10px 8px;
    color: #093;
}
#recent td
{
    padding: 16px;
    color: #330000;
}
  @media print
  {
  	.noprint{display:none;} 
   }

	</style>
    
    <meta charset="utf-8">
    <title>Time table</title>
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
if(f1.department.selectedIndex==0)
  {
  alert("Select a department");
  f1.department.focus();
  return false;
  }
  else if(f1.semester.selectedIndex==0)
  {
  alert("Select the semester");
  f1.semester.focus();
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

                    <div id="divLogo" class="pull-left" align="center"><a  id="divSiteTitle" >      Exam Plus</a><br />
                        <a  id="divTagLine">The Complete Examination Manager</a>
                  </div>

                  <div class="noprint">
				    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
							
                            <li class="active"><a href="FacultyHome.php">Home</a></li>
                        
							<li class="dropdown">
                            <a  class="dropdown-toggle">Exam<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                             <li class="dropdown">
                            <a class="dropdown-toggle">Duty &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                             <li><a href="DutyUniversity.php">University Exam</a></li>
                            <li><a  href="DutyInternal.php">Internal Exam</a></li>
                            </ul>
							</li>
							
							 <li class="dropdown">
                            <a class="dropdown-toggle" href="ViewTimetableF.php">Timetable</a>
                          
						  </li>
						    </ul>
                            </li>
							<li class="dropdown">
                            <a href="" class="dropdown-toggle">Upload<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="UploadMark.php">Mark</a></li>
                            <li><a href="UploadAttendance.php">Attandance</a></li>
							<li><a href="UploadNotes.php">Notes</a></li>
                            </ul>
                            </li>
						   
							<li class="dropdown">
						    <a href="" class="dropdown-toggle">Settings<b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="FacultyProfileEdit.php">Profile</a></li>
                            <li><a href="Logout.php">Logout</a></li>
							</ul>
                            </ul>
                      </div>
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
                    <div align="center"><span class="style2"> </span></div>
					<h1 align="center">Time Table.</h1>
                    				
					<p><strong>
					<form name="f1"  action="ViewTimeTableF.php" method="post">
					  <div class="noprint">  <table width="463" border="0" align="center">
                      
                      <tr>
                          <td>Department:</td>
                          <td><select name="department" >
						  <option>Select Department</option>
						  <option>CSE</option>
						   <option>CHE</option>
						  <option>PDE</option>
						  
						  </select></td>
					    </tr>
						  <tr>
						  <td>Semester:</td>
						  <td><select name="semester">
						  <option>Select semester</option>
						  <option>S1&amp;S2</option>
						  <option>S3</option>
						  <option>S4</option>
						  <option>S5</option>
						  <option>S6</option>
						  <option>S7</option>
						  <option>S8</option>
						  </select>
						  </td>
						  <td > <input type="submit" value="View" name="b1" onClick="return(validate());"></td>
                        </tr>
                           
                      </table>
                       </div>

					 
					  
<?php
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
if(isset($_POST['b1']))
{
$dep=$_POST['department'];
 $sem=$_POST['semester'];
 if($sem=="S1&S2")
			{
			$qr1="select * from `examdate` where class='".$sem."'";
			$re1=mysql_query($qr1);
			$row1=mysql_fetch_array($re1);
			$qr2="select * from timetable where class='".$sem."'";
			$re2=mysql_query($qr2);
			$row2=mysql_fetch_array($re2);
			$h = $row1['start_date'];
			//echo "$string"; 
            $g2= date('m',strtotime($h));
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


			if($re1)
			{
			echo "<table border='1' align='center' width='70%'>
  <tr><td align='center' colspan='3' height='40'><strong>Time Table for  Series Test</strong></td></tr>
  <tr><td align='left' width='30%'>Date</td><td align='left' width='50%'>Time</td><td align='left'>Subject</td></tr>
  <tr><td align='left' width='30%'>".$row1['start_date']."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day1_fn']."</td>
   <tr><td align='left' width=30%'>".$row1['start_date']."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day1_an']."</td>
    <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day2_fn']."</td>
	 <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day2_an']."</td>
	  <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day3_fn']."</td>
	   <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day3_an']."</td>
	    <tr><td align='left' width='30%'>".$h3."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day4_fn']."</td>
		 <tr><td align='left' width='30%'>".$h3."</td><td align='left' width='50%'>1:30 AM-3:30 AM</td><td align='left' width='20%'>".$row2['day4_an']."</td></table>";
			}
			else
			{
			echo "Time table not published";
			}
			
			}
			else
			{
			$arr1= array("$sem","$dep");
            $arr1=implode("_",$arr1);
			$qr1="select * from examdate where class='".$arr1."'";
			$re1=mysql_query($qr1);
			$row1=mysql_fetch_array($re1);
			$qr2="select * from timetable where class='".$arr1."'";
			$re2=mysql_query($qr2);
			$row2=mysql_fetch_array($re2);
			$h = $row1['start_date']; 
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
			if($re1)
			{
			echo "<table border='1' align='center' width='70%'>
  <tr><td align='center' colspan='3' height='40'><strong>Time Table for  Series Test</strong></td></tr>
  <tr><td align='left' width='30%'>Date</td><td align='left' width='50%'>Time</td><td align='left'>Subject</td></tr>
  <tr><td align='left' width='30%'>".$row1['start_date']."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day1_fn']."</td>
   <tr><td align='left' width=30%'>".$row1['start_date']."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day1_an']."</td>
    <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day2_fn']."</td>
	 <tr><td align='left' width='30%'>".$h1."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day2_an']."</td>
	  <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>10:00 AM-11:30 AM</td><td align='left' width='20%'>".$row2['day3_fn']."</td>
	   <tr><td align='left' width='30%'>".$h2."</td><td align='left' width='50%'>1:30 PM-3:30 PM</td><td align='left' width='20%'>".$row2['day3_an']."</td>
</table>";
			}
			else
			{
			echo "<script language='javascript'>
alert('Time table is not published');
</script>";
			}
			
			
			
}
}

?>
</table>					
</form>
<div class="noprint">

<script language="javascript">
if(window.print)
{
	document.write('<form><input type=button name=print value="Print this Page" onClick="window.print()"></form>');
}
</script>
</div>
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
</body>
</html>
<?php
$r="";
$d="";
$r=$_POST['t1'];
$d=$_POST['department'];
$con= mysql_connect("localhost","root","");
mysql_select_db("onlinereg",$con);
if(isset($_POST['submit']))
{
$target_dir="Notes";   
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$target_file = $target_dir . basename($file["name"]);

if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"||$file_type="image/jpg"||$file_type="image/JPEG"||$file_type="image/PNG"||$file_type="image/GIF"||$file_type="image/JPG"||$file_type="archive/rar"||$file_type="archive/RAR"||$file_type="compressed/zip"||$file_type="compressed/ZIP"||$file_type="application/doc"||$file_type="application/DOC"||$file_type="application/pdf"||$file_type="application/PDF"||$file_type="image/txt"||$file_type="image/TXT")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'Document/'.'Attendance/'.$file_name))
$query=mysql_query("insert into attendance (department,room_no,name) values ('$d','$r','$file_name')");
if($query==true)
{
    echo "File Uploaded";
}
}

//To retrieve uploaded file immediately or write code in separate .php file if you wanna later or by clicking.
//$result=  mysql_query("SELECT name FROM documentts");
//$row=  mysql_fetch_array($result);
//echo "<img src='images/".$row['path']."' height = '130px' width = '130px'>";
?>



