

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Upload Attendance</title>
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
  alert("Select Department:");
  f1.department.focus();
  return false;
  }
  else if(f1.t1.value=="")
  {
  alert("Enter Room no:");
  f1.semester.focus();
  return false;
  }
  else if(f1.file.value=="")
  {
  alert("Choose a file:");
  f1.file.focus();
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
					<h1 align="center">Upload Attendance</h1>
                  <form action="UploadAttendance.php" method="post" enctype="multipart/form-data"  name="f1">
                    <p>&nbsp;</p>
                    <table width="489" border="0" align="center">
                      <tr>
                        <td width="100">Department:</td>
                        <td width="379"><select name="department"   >
                    <option>Department</option>
                    <option>CSE</option>
                    <option>CHE</option>
                    <option>PE</option>
                  </select>  </td>
                      </tr>
                      <tr>
                        <td>Room No: </td>
                        <td><input type="text" name="t1" id="t1"></td>
                      </tr>
                      <tr>
                        <td>Choose a file : </td>
                        <td>
                        <input type="file" name="file" id="file"></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="center">
                          <input type="submit" name="submit" value="Upload" id="Upload" onClick="return(validate());">
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



