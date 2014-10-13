<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free ecommerce template by @webdezign</title>

<link rel="stylesheet" href="http://localhost/CI/assets/css/style.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
    
   <link rel="stylesheet" href="http://localhost/CI/assets/css/style.unminified.css" />
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
<script type="text/javascript" src="http://localhost/CI/assets/js/jquery-ui-1.8.13.custom.min.js"></script>

<script type="text/javascript">
$(function(){
// Tabs
$('#tabs').tabs();
});
</script>


</head>
<body>
<header>
	<div class="wrapper">
        <h1><a href="<?php echo base_url();?>index.php/Officer" id="brand"><img src="images/logo.png"></a></h1>
        <nav>
           <ul>
                 <li>
                  <a href="#">Information</a>
                  
                </li>
                <li><a href="<?php echo base_url();?>index.php/Officer_Controller/make_appointment">Make Appointment</a>
                </li>
                <li>
                	<a href="<?php echo base_url();?>index.php/Officer_Controller/callCalendar">Schedule</a>
                    <ul class="sub-menu">
                    	<li><a href="<?php echo base_url();?>index.php/Officer_controller/view_appointment">Appointment</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/view_p_calendar">Patient</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/view_d_calendar">Dentist</a></li>
                        
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>index.php/Officer_Controller/get_p_db">Account</a> 
                	<ul class="sub-menu">
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/p_register">New Patient</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/d_register">New Dentist</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/get_db">Dentists' Account</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Officer_Controller/get_p_db">Patients' Account</a></li>
                    </ul></li>
                <li><a href="#">Treatment Details</a></li>
                
          </ul>
        </nav>
    </div>
</header>
<aside id="top">
	<div class="wrapper">
        <ul id="social">
            <li><a href="#" class="facebook" title="like us us on Facebook">like us us on Facebook</a></li>
            <li><a href="#" class="twitter" title="follow us on twitter">follow us on twitter</a></li>
        </ul>
         
        
        </div>
    </div>
    <div id="action-bar">
    <?php 
   
   	if($ID != null){
    echo "<h1><a href='#'>$ID</a>  :   <a href='Officer_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }
   
   ?>
   </div>
    
</aside>

 <div class="wrapper">  
<article id="p_register">
	<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/edit_info_data">
    	<h1>Add Information and Promotion</h1>
      
		<p>
          <label for="type">Type:</label>
          
          <select id="type" name="type" onchange="javascript:startDisplay();" required>
                <option value="info">Information</option>
                <option value="promo">Promotion</option>
                
            </select><span class="alert">*</span>
        <p>
          <label for="title">Title:</label>
          <input id="title" name="title" type="text" value="<?php echo $info['title']?>" required><span class="alert">*</span>
        </p>
       	<p>
          <label for="details">Details:</label>
          <input id="details" name="details" type="text" value="<?php echo $info['details']?>" required><span class="alert">*</span>
        </p>
        <p>
          <label for="officerID">OfficerID:</label>
          <input id="officerID" name="officerID" type="text" value="<?php echo $info['officerID']?>" required><span class="alert">*</span>
        </p>
       
   	  <p>&nbsp;</p>
        
   	  <p>
   	    <label>&nbsp;</label>
      </p>
   	  <input type="submit" name="submit" class="continue"></input>
    </form>
    </form>
    
	<p>&nbsp;</p>
	<p>
      <button type="button">Go back</button>
  </p>
</article>
</div>
<!--<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a> &copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
</footer>-->
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>