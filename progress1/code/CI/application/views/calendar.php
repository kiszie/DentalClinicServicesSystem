<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Elastic CSS Calendar</title>
	<link rel="stylesheet" type="text/css" href="calendar.css"/>
    <style type="text/css">
	.calendar{
		font-family:Arial;	   font-size:12px;
	}
	table.calendar{
	margin:auto;   border-collapse: collapse;
	}
	.calendar .days td{
		width:80 px; height:80px; padding:50px;
		border:5px; solid:#999;
		vertical-align:top;
		background-color:#DEF;
	}
	.calendar  .days td:hover{
	background-color:#F66;
	}
	.calendar .highlight {
	font-weight:bold; color:#FFF;
	}
	
	</style>
	
</head>

<body>
	
	
		<?php echo $calendar;?>
        

</body>

</html>