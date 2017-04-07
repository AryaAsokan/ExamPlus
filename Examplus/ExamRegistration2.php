<?php
session_start();
 $conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t= "select * from studentdetails where enrollment_no='".$_SESSION['u']."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
//$uname=$arr['name'];
$sem=$_SESSION['s'];
$etype=$_SESSION['et'];
?>
<html>
<head>

    <meta charset="utf-8">
    <title>ExamRegistration2</title>
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
</script>
<body id="pageBody">
<div id="divBoxed" class="container">
  <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
  <div class="divPanel notop nobottom">
    <div class="row-fluid">
      <div class="span12">
        <div id="divLogo" class="pull-left" align="center"><a  id="divSiteTitle" > Exam Plus</a><br />
          <a  id="divTagLine">The Complete Examination Manager</a> </div>
        <div id="divMenuRight" class="pull-right">
          <div class="navbar">
            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse"> NAVIGATION <span class="icon-chevron-down icon-white"></span> </button>
            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="active"><a href="StudentHome.php">Home</a></li>
                        
							<li class="dropdown">
                            <a  class="dropdown-toggle">Exam <b class="caret"></b></a>
                            <ul class="dropdown-menu">
							<li><a href="ExamRegistration1.php">Registration</a></li>
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
                           <li><a  href="ViewNotes.php">Notes</a></li>
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
          <h1 align="center">Exam Registration</h1>
          <form name="f1"   method="post"  action="ExamRegistration2.php">
            <table width="943" border="0" align="center">
              
            
              <tr>
                <td>Semester</td>
                <td>
                  <select name="semester" id="select">
				  <option selected="selected"><?php echo $sem ?></option>
                    <option>S1&amp;S2</option>
                    <option>S3</option>
                    <option>S4</option>
                    <option>S5</option>
                    <option>S6</option>
                    <option>S7</option>
                    <option>S8</option>
                  </select>             </td>
              </tr>
			  <tr>
                <td>Exam Type </td>
                <td>
                  <select name="examtype">
				    <option><?php echo $_SESSION['et'] ?></option>
                    <option>Regular</option>
                    <option>Improvement</option>
                    <option>Supplementary</option>
                  </select>                </td>
              </tr>
			  <?php
			 //et=$_POST['examtype'];
			 
			 // $_SESSION['s']=$sem;
			  
			  
			if($_SESSION['s']=="S1&S2")
			  {
			   
			  $qr1="select * from syllabus where code='".$_SESSION['s']."'";
			  $re1=mysql_query($qr1);
			  $row1=mysql_fetch_array($re1);
			  echo "<tr><td><input type='checkbox' name='ch1' value='$row1[1]'>".$row1[1]."</td><td><input type='checkbox' name='ch2' value='$row1[2]'>".$row1[2]."</td><td><input type='checkbox' name='ch3' value='$row1[3]'>".$row1[3]."</td><td><input type='checkbox' name='ch4' value='$row1[4]'>".$row1[4]."</td></tr>
			         <tr><td><input type='checkbox' name='ch5' value='$row1[5]'>".$row1[5]."</td><td><input type='checkbox' name='ch6' value='$row1[6]'>".$row1[6]."</td><td><input type='checkbox' name='ch7' value='$row1[7]'>".$row1[7]."</td><td><input type='checkbox' name='ch8' value='$row1[8]'>".$row1[8]."</td></tr>";
					 }
					 else
					 {
					 $qr1="select * from `syllabus` where code='".$_SESSION['s']."'";
  $re1=mysql_query($qr1);
  $row1=mysql_fetch_array($re1);
   echo "<tr><td><input type='checkbox' name='ch1' value='$row1[1]'>".$row1[1]."</td><td><input type='checkbox' name='ch2' value='$row1[2]'>".$row1[2]."</td><td><input type='checkbox' name='ch3' value='$row1[3]'>".$row1[3]."</td></tr>
   <tr><td><input type='checkbox' name='ch4' value='$row1[4]'>".$row1[4]."</td><td><input type='checkbox' name='ch5' value='$row1[5]'>".$row1[5]."</td><td><input type='checkbox' name='ch6' value='$row1[6]'>".$row1[6]."</td><</tr>";
  
	
					 }
			 if(isset($_POST['b1']))
			 {
			// $et=$_POST['examtype'];
			// echo "$et";
			
			$ch1=$_POST['ch1'];
			$ch2=$_POST['ch2'];
			$ch3=$_POST['ch3'];
			$ch4=$_POST['ch4'];
			$ch5=$_POST['ch5'];
			$ch6=$_POST['ch6'];
			if($_SESSION['s']=="S1&S2")
			{
			$ch7=$_POST['ch7'];
			$ch8=$_POST['ch8'];
			$qr3="update examregistration set reg1='".$ch1."',reg2='".$ch2."',reg3='".$ch3."',reg4='".$ch4."',reg5='".$ch5."',reg6='".$ch6."',reg7='".$ch7."',reg8='".$ch8."' where semester='".$_SESSION['s']."' and enrollment_no='".$arr['enrollment_no']."'";
			$re3=mysql_query($qr3);
			}
			else
			{
			
			$qr3="update examregistration set reg1='".$ch1."',reg2='".$ch2."',reg3='".$ch3."',reg4='".$ch4."',reg5='".$ch5."',reg6='".$ch6."' where semester='".$_SESSION['sm']."' and enrollment_no='".$arr['enrollment_no']."'";
			$re3=mysql_query($qr3);
			//echo "$ch1";
			
			}
			if($re3)
			{
			echo "<script language='javascript'>
alert('Registered successfully');
</script>";
			}
			else
			{
			echo "error".mysql_error();
			}
			 
					 
			  }
			 
			   
			  ?>
			   
              <tr>
                <td colspan="2"><div align="center">
                    <input type="submit" name="b1" value="Ok" onClick="return(validate())"; >
                    <input type="submit" name="b2" value="Cancel">
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
        <div class="span3" id="footerArea1">
          <h3></h3>
          <p></p>
          <p>  </p>
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
