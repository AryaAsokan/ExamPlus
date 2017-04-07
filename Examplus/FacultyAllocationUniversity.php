<?php
session_start();
$nam="";
 $conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
$t= "select faculty_id from admindetails where user_name='".$_SESSION['u']."'";
$re=mysql_query($t);
$arr=mysql_fetch_array($re);
$nam=$arr['faculty_id'];
$t1="select * from faculty where faculty_id='".$nam."'";
$res=mysql_query($t1);
$arr1=mysql_fetch_array($res);
//$uname=$arr['name'];
?>
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
	color: #CC3300;
	font-weight: bold;
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
                    <h1 align="center"> Faculty Allocation </h1>
                    				
					<p><strong>
					  <form name="f1" method="post" action="FacultyAllocationUniversity.php">
                        <p>&nbsp;</p>
                        <table width="568" border="0" align="center">
                          <tr>
                            <td width="189">Enter Examination Date: (YYYY-MM-DD)  </td>
                            <td width="369"> <input type="text" name="t1"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><p>&nbsp;</p>
                            <p align="center">
                               <input type="submit" name="submit" value="Allocate">
                            </p></td>
                          </tr>
                        </table>
                        <div align="center"></div>
                        <p>&nbsp;</p>
						<?php
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg") or die("database error");
if(isset($_POST['submit']))
{
$a=$_POST['t1'];
$b="ASSISTANT PROFESSOR";
$v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
$res=mysql_query($v);
 $rowcount=mysql_num_rows($res);
if($rowcount<=0)
        {
		
          $res1="update faculty set status='0' where department='CSE' and designation='".$b."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
          $res=mysql_query($v);
		
         }
             $i=0;
			$csfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$csfaculty[$i]=$row[0];
				$i++;
            }	
$v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
$res=mysql_query($v);
 $rowcount=mysql_num_rows($res);
if($rowcount<=0)
        {   
          $res1="update faculty set status='0' where department='CHE' and designation='".$b."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
          $res=mysql_query($v);
		  
         }
             $p=0;
			$chfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$chfaculty[$p]=$row[0];
				$p++;
            }	
 $v="select faculty_id from faculty where department='PE' and designation='".$b."' and status='0' ";
$res=mysql_query($v);
 $rowcount=mysql_num_rows($res);
if($rowcount<=0)
        {   
          $res1="update faculty set status='0' where department='PDE' and designation='".$b."' ";	
	      $result1=mysql_query($res1);
		  $v="select faculty_id from faculty where department='PDE' and designation='".$b."' and status='0' ";
          $res=mysql_query($v);
		  
         }
             $q=0;
			$pefaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$pefaculty[$q]=$row[0];
				$q++;
            }	
			 $p1=0;$q1=0;$i1=0;
			  $faculty = array();
 /*$d=0;
 $e=0;$k=0;


 if($i>$p)
 {
 for($c=0;$c<($p);$c++)
  {
 $faculty[$k] = $csfaculty[$d];
 $d++;$k++;
 $faculty[$k] =$chfaculty[$e];
 $e++;$k++;$i1--;
  }
  while($i1>0)
  {
  $faculty[$k] =$csfaculty[$d];
  $d++;$k++;$i1--;
  }
 }
 else
 {
  for($c=0;$c<($i);$c++)
  {
 $faculty[$k] = $csfaculty[$d];
 $d++;$k++;
 $faculty[$k] =$chfaculty[$e];
 $e++;$k++;$p1--;
  }
  while($p1>0)
  {
  $faculty[$k] =$chfaculty[$e];
  $e++;$k++;$p1--;
  }
}*/
$k=0;
for($c=0;$c<($p+$i+$q);$c++)
{
if($i1<$i)
{
$faculty[$k]=$csfaculty[$i1];
$i1++;$k++;
}
if($p1<$p)
{
$faculty[$k]=$chfaculty[$p1];
$p1++;$k++;
}
if($q1<$q)
{
$faculty[$k]=$pefaculty[$q1];
$q1++;$k++;
}
}
/*for($c=0;$c<$k;$c++)
{
echo $faculty[$c];
echo "<br>";
}*/
 
$res1=mysql_query("select distinct room_no,department from `$a` ");
if($res1)
{
            $j=0;
			$room = array();
			while($row1=mysql_fetch_array($res1,MYSQL_NUM))
			{
				$rd = $row1[0]."_".$row1[1];
				$room[$j] = $rd;
				$j++;
			}
	}
$l=0;$m=0;$n=$k;

//ALLOCATE FACULTY....


for($r=0;$r<$j;$r++)
{
 	$words = explode("_", $room[$r] ); 
   for( $cnt = 0; $cnt < count($words); $cnt++ ) 
    $words[$cnt]; 
	$v="insert into facultyallocation values('".$faculty[$m]."','".$words[1]."','".$words[0]."','".$a."') ";
	$res2=mysql_query($v);
	$res3="update faculty set status='1' where faculty_id='".$faculty[$m]."' ";
	$result2=mysql_query($res3);
	$m++;$n--;
	if($n<=0)
	{
	        $v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
            $res=mysql_query($v);
            $rowcount=mysql_num_rows($res);
    		if($rowcount<=0)
        	{
		
          		$res1="update faculty set status='0' where department='CSE' and designation='".$b."' ";	
	      		$result1=mysql_query($res1);
		  		$v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
          		$res=mysql_query($v);
		
         	}
             $i=0;
			$csfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$csfaculty[$i]=$row[0];
				$i++;
            }	
			$v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
			$res=mysql_query($v);
 			$rowcount=mysql_num_rows($res);
			if($rowcount<=0)
            {   
           		 $res1="update faculty set status='0' where department='CHE' and designation='".$b."' ";	
	     		 $result1=mysql_query($res1);
		  		$v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
          		$res=mysql_query($v);
		  
            }
             $p=0;
			 $chfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$chfaculty[$p]=$row[0];
				$p++;
            }	
           $v="select faculty_id from faculty where department='PDE' and designation='".$b."' and status='0' ";
		   $res=mysql_query($v);
           $rowcount=mysql_num_rows($res);
           if($rowcount<0)
           {   
             $res1="update faculty set status='0' where department='PDE' and designation='".$b."' ";	
	      	 $result1=mysql_query($res1);
		   	$v="select faculty_id from faculty where department='PDE' and designation='".$b."' and status='0' ";
           	$res=mysql_query($v);
		  
          }
             $q=0;
			 $pefaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$pefaculty[$q]=$row[0];
				$q++;
            }	
			 $p1=0;$q1=0;$i1=0;
			  $faculty = array();

			$k=0;
		for($c=0;$c<($p+$i+$q);$c++)
		{
			if($i1<$i)
			{
				$faculty[$k]=$csfaculty[$i1];
				$i1++;$k++;
			}
			if($p1<$p)
			{
				$faculty[$k]=$chfaculty[$p1];
				$p1++;$k++;
			}
			if($q1<$q)
			{
				$faculty[$k]=$pefaculty[$q1];
				$q1++;$k++;
			}
		}
		$n=$k;
		$m=0;
	}
	
	$v1="insert into facultyallocation values('".$faculty[$m]."','".$words[1]."','".$words[0]."','".$a."') ";
	$res2=mysql_query($v1);
	$res3="update faculty set status='1' where faculty_id='".$faculty[$m]."' ";
	$result2=mysql_query($res3);
	$m++;$n--;
	if($n<=0)
	{
	 
            $v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
			$res=mysql_query($v);
			 $rowcount=mysql_num_rows($res);
			if($rowcount<=0)
        	{
					 $res1="update faculty set status='0' where department='CSE' and designation='".$b."' ";	
	      			$result1=mysql_query($res1);
					$v="select faculty_id from faculty where department='CSE' and designation='".$b."' and status='0' ";
          			$res=mysql_query($v);
			 }
             $i=0;
			$csfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$csfaculty[$i]=$row[0];
				$i++;
            }	
			$v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
			$res=mysql_query($v);
			 $rowcount=mysql_num_rows($res);
			if($rowcount<=0)
        	{   
          		$res1="update faculty set status='0' where department='CHE' and designation='".$b."' ";	
				$result1=mysql_query($res1);
				$v="select faculty_id from faculty where department='CHE' and designation='".$b."' and status='0' ";
	          $res=mysql_query($v);
		  
         	}
             $p=0;
			$chfaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$chfaculty[$p]=$row[0];
				$p++;
            }	
 			$v="select faculty_id from faculty where department='PDE' and designation='".$b."' and status='0' ";
			$res=mysql_query($v);
 			$rowcount=mysql_num_rows($res);
			if($rowcount<=0)
        	{   
          		$res1="update faculty set status='0' where department='PDE' and designation='".$b."' ";	
	      		$result1=mysql_query($res1);
		  		$v="select faculty_id from faculty where department='PDE' and designation='".$b."' and status='0' ";
          		$res=mysql_query($v);
		  
         	}
             $q=0;
			$pefaculty = array();
			while($row=mysql_fetch_array($res,MYSQL_NUM))
			{
				$pefaculty[$q]=$row[0];
				$q++;
            }	
			 $p1=0;$q1=0;$i1=0;
			  $faculty = array();
			$k=0;
			for($c=0;$c<($p+$i+$q);$c++)
			{
				if($i1<$i)
				{
					$faculty[$k]=$csfaculty[$i1];
					$i1++;$k++;
				}
				if($p1<$p)
				{
					$faculty[$k]=$chfaculty[$p1];
					$p1++;$k++;
				}
				if($q1<$q)
				{
					$faculty[$k]=$pefaculty[$q1];
					$q1++;$k++;
				}
			}
			$n=$k;
			$m=0;
	 	}
	

	}
	
	echo "<table border='1' align='center' width='70%'><tr><td colspan='3' align='center'>Faculty Allocation for University Examination  on ".$a."</td></tr><tr><td>Faculty Id</td><td>Department</td><td>Room No</td></tr>";
$qr10="select * from facultyallocation where date='".$a."'";
$re10=mysql_query($qr10);
while($falloc=mysql_fetch_array($re10))
{
echo "<tr><td> ".$falloc['faculty_id']." </td><td>".$falloc['department']."</td><td>".$falloc['room_no']."</td></tr>";
}
echo "</table>";			
}



?>
						
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


