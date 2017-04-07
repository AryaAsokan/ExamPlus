
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>University Seating</title>
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
alert("Enter Date");
f1.t1.focus();
return false;
  }
else if(f1.department.selectedIndex==0)
  {
  alert("Select Department:");
  f1.department.focus();
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
							 
                            <li class="active"><a href="AdminHome.php">Home</a></li>
                        
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
                            <li><a href="TimetableScheduler.html">View</a></li>
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
                    <h1 align="center">Seating Arrangement.</h1>
                    				
					<p><strong>
					<form name="f1" action="UniversitySeating2.php" method="post">
					  <table width="463" border="0" align="center">
                        <tr>
                          <td width="140">Date(YYYY-MM-DD):</td>
                          <td width="313"><input type="text" name="t1"></td>
                        </tr>
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
                          <td colspan="2"></td>
                        </tr>
                        <tr>
                          <td colspan="2"><div align="center">
                            <input type="submit" value="GO" name="b1" onClick="return(validate());">
                          </div></td>
                        </tr>
                      </table>
				  </form>
					</p>

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
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$i=0;
if(isset($_POST['b1']))
{
$a=$_POST['t1'];
$d=$_POST['department'];
$q9="update room set fillA='0',fillB='0'";

$r9=mysql_query($q9);
$q10="create table `$a` (enrollment_id varchar(12) primary key,department varchar(6),room_no varchar(8),series varchar(2),number int(4))";
$r10=mysql_query($q10);
if($r10)
{echo "done";
}
else
{
echo "error".mysql_error();
}
//$row1=mysql_fetch_array($res3);
$qr1="select examcode from university where examdate='".$a."'";
$res1=mysql_query($qr1);
	while($sub=mysql_fetch_row($res1))
	{
		foreach($sub as $field)
		{
		$i++;//
		//echo "$field.";GET SUBJECT
		$qr2="select enrollment_no from examregistration where reg1='".$field."' or reg2='".$field."' or reg3='".$field."' or reg4='".$field."' or reg5='".$field."' or reg6='".$field."' or reg7='".$field."' or reg8='".$field."'";
		$res2=mysql_query($qr2);
		$qr3="select * from room";
		$res3=mysql_query($qr3);
			while($row1=mysql_fetch_array($res3))
			{
			//echo "$row1['room_no']";
			$qr5="select * from `$a` where room_no='".$row1['room_no']."' and  department='".$row1['department']."'" ;
						$res5=mysql_query($qr5);
						 $z=mysql_num_rows($res5);
						 //echo "$z";
				if($i%2==0)
				{
					if($z < $row1['max_seats'] && $row1['fillB']!=$row1['max_seats']/2  )
					{
		
						  /*	$qr7="select * from roomfill where room_no='".$row1['room_no']."' and series='B' ";
							$res7=mysql_query($qr7);
							$zb=mysql_num_rows($res7);*/
						
		
						/*else if($i%2!=0)
							{
						/*	$qr7="select * from roomfill where room_no='".$row1['room_no']."' and series='A' ";
							$res7=mysql_query($qr7);
							$zb=mysql_num_rows($res7);
							if($row1['fillA']<($row1['max_seats']/2))
							{
							$count=$row1['max_seats']/2-$row1['fillA'];
							}
							}	*/
							 //$dif=$row1['max_seats']/2 ;
						 if($z==0)
						{
							 
						$count=$z+1;
						}
						else if($row1['fillB']<($row1['max_seats']/2) && $row1['fillB']!=0)
						{
						$count=$row1['fillB']+1;
						}
						 //echo "$count";
						
			            $var=$row1['max_seats']/2;
			//$count=1;
			
						while(($count<=$var) && ($row=mysql_fetch_row($res2)))
						{
					
						
							foreach($row as $id)
							{
	//echo "$id";GET ENROLLMENT ID
						
						
							$qr4="insert into `$a` values('".$id."','".$row1['department']."','".$row1['room_no']."','B','".$count."')";
							
							$fillB=$row1['fillB']+1;
							$res4=mysql_query($qr4);
							$q8="update room set fillB='".$count."' where room_no='".$row1['room_no']."' and department='".$row1['department']."'";
							$r8=mysql_query($q8);
							$count++;
								if($r8)
								{
								echo "success";
								}
								else
								{
								echo "error".mysql_error();
								}
								//echo "$count";
							}
						/*else
						{
						$qr4="insert into allocation values('".$id."','".$row1['department']."','".$row1['room_no']."','A','".$count."')";
						$count++;
						$fillA=$count;
						$res4=mysql_query($qr4);
						if($res4)
							{
							echo "success";
							}
							else
							{
							echo "error".mysql_error();
							}
						}*/
					
					}
					//echo "$i";
		      
				
				}
    		}
				
			if($i%2!=0)
			{
				if($z < $row1['max_seats'] && $row1['fillA']!=$row1['max_seats']/2)
				{
					
						 //$dif=$row1['max_seats']/2 ;
					if($z==0)
					{
							 
					$count=$z+1;
					//echo "$count";
					}
					else if($row1['fillA']<($row1['max_seats']/2)&& $row1['fillA']!=0)
					{
					$count=$row1['fillA']+1;
					//echo "$count";
					}				
								 
					$var=$row1['max_seats']/2;
					while(($count<=$var) && ($row=mysql_fetch_row($res2)))
					{
					
						
						foreach($row as $id)
						{
	//echo "$id";GET ENROLLMENT ID
						
						
						$qr4="insert into `$a` values('".$id."','".$row1['department']."','".$row1['room_no']."','A','".$count."')";
						
						$fillA=$row1['fillA']+1;
						$res4=mysql_query($qr4);
						$q8="update room set fillA='".$count."' where room_no='".$row1['room_no']."' and department='".$row1['department']."'";
						$r8=mysql_query($q8);
						$count++;
							if($r8)
							{
							echo "success";
							}
							else
							{
							echo "error".mysql_error();						}
							}
						}
					}		
				}
			}
		}
	}
}
/*if($i%2==0)
					{
						
				        $fillB--;
				       $qr6="insert into roomfill values('".$row1['room_no']."','".$row1['department']."','B','".$fillB."')";
				       $res6=mysql_query($qr6);
				}
				else
				{
				$fillA--;
				$qr6="insert into roomfill values('".$row1['room_no']."','".$row1['department']."','A','".$fillA."')";
				$res6=mysql_query($qr6);
				}	*/	
				
				
 		
			
		//}
//echo "";
	
	


?>