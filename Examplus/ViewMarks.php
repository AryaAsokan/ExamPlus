<?php
session_start();
 $conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t= "select * from studentdetails where enrollment_no='".$_SESSION['u']."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
//mysql_close($conn);
?>
<html>
<head>

    <meta charset="utf-8">
    <title>View Marks</title>
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
          <h1 align="center">Available Marklists</h1>
          <form name="f1"   method="post"  action="ViewNotes.php" enctype="multipart/form-data" >
		  <table border="0" align="left">
		 
        <?php
		 $select=  mysql_query("select * from marks where department= '".$arr['department']."' and semester='".$arr['semester']."'");
		 while($row1=  mysql_fetch_array($select))
		 {
		 $name=$row1['name'];
		 ?>
		<tr>
<td width="300">
<a href="download1.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
</td>
</tr>
<?php }?>
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
