<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
    function noBack()
    {
        window.history.forward(0);
    }
    noBack();
	window.onpageshow=function(evt)
	{
	if(evt.persisted) noBack()
	
	}
	window.onunload=function()
	{
	void(0)
	}
	
	
    </script>
    <meta http-equiv="Refresh" content="1; url=Login.php" />
	

</head>


<body >
<b>Log out.............</b>
</body>
</html>
<?php
session_start();
$b=$_SESSION['u'];
$conn=mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("onlinereg",$conn) or die("database error");
session_destroy();

header("location: Login.php");
exit();

?>