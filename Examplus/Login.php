<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
<script language="javascript">
function check()
	{
		if(f1.t1.value=="")
		{
			alert("Enter User Name");
			f1.t1.focus();
		return false;
		}
		else if(f1.t2.value=="")
		{
		alert("Enter Password ");
		f1.t2.value="";
		f1.t2.focus();
		return false;
		}
		
	}
	

</script>

<body id="pageBody">
<?php
session_start();
?>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("onlinereg",$con);
if(isset($_POST['b1']))
{
$p=$_POST['b1'];
$a=$_POST['t1'];
$b=$_POST['t2'];
 $x="select * from login where user_name= '".$a."' and password = '".$b."'";
                       $y=mysql_query($x);
					      
	     $z=mysql_num_rows($y);
	     if($z>0)
		 	{
		    // echo "SUCCES";
			$_SESSION['u']=$a;
             $_SESSION['p']=$b; 
			
		      $x1="select * from studentdetails where enrollment_no= '".$a."'";
                       $y1=mysql_query($x1);
					    $z1=mysql_num_rows($y1);
					 if($z1>0)
						{
							header("Location:StudentHome.php");
							break;
						}
					else
					{
		      			$x2="select * from faculty where faculty_id= '".$a."'";
                       $y2=mysql_query($x2);
					    $z2=mysql_num_rows($y2);			   
		
						if($z2>0)
						{
						header("Location:FacultyHome.php");
						break;
						}
						else
						{
						//$x3="select * from admindetails where user_name='".$a."'";
						//$y3==mysql_query($x3);
						//$arr=mysql_fetch_array($y3);
						//$_SESSION['ad']=$arr['faculty_id'];
						
						header("Location:AdminHome.php");
						break;
						}
					}
					
		
	}
		else
		{
		echo "<script language='javascript'>
alert('Please  enter the correct password or user name');
</script>";
		}
}
?>

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
                      <div class="nav-collapse collapse"></div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
            <div class="span12">
<form name="f1" action="Login.php" method="post">
                <div id="headerSeparator">
                  <div class="row-fluid">
                    <!--Edit Main Content Area here-->
                    <div class="span12" id="divMain">
                      <h1 align="center">Login</h1>
                      <table width="349" height="61" border="0" align="center">
                        <tr>
                          <td width="105" height="31"><div align="left">User Name: </div></td>
                          <td width="234"><input type="text" name="t1"></td>
                        </tr>
                        <tr>
                          <td height="24" valign="top"><div align="left">Password:</div></td>
                          <td height="24" valign="top"><input type="password" name="t2">
                          </td>
                        </tr>
                      </table>
                      <div align="center">
                        <input type="submit"  name="b1" value="Login" onClick="return(check());">
                        <br />
                        <br />
                      </div>
                      <div class="row-fluid"></div>
                      <div class="row-fluid"></div>
                    </div>
                    <!--End Main Content-->
                  </div>
				  </form>
                </div>

                <div id="headerSeparator2"></div>

            </div>
        </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">
          <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>
	


<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


</body>
</html>
