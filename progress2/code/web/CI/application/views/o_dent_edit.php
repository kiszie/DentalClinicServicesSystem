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
        <h1><a href="<?php echo base_url();?>index.php/Officer" id="brand" title="ABC comp">ABC comp</a></h1>
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
  <?php /*?> <div id="action-bar">
    <?php 
   
   	if(!empty($PID)){
    echo "<h1><a href='#'>$PID</a>  :   <a href='Officer_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }
   
   ?>
   </div><?php */?>
</aside>

 <div class="wrapper">  
<article id="p_register">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/d_edit_data/">
    	
        <h1>Dentist edit information</h1>
        <p>
            <label for="dentistID">DentistID:</label>
          <input id="dentistID" name="dentistID" type="text" value="<?php echo $user['dentistID'];?>" required><span class="alert">*</span>
        </p>
        <p>
            <label for="password">Password:</label>
          <input id="password" name="password" type="password" value="<?php echo $user['password'];?>" required><span class="alert">*</span>
        </p>
       	<p>
            <label for="billFName">First name:</label>
          <input id="billFName" name="f_name" type="text" value="<?php echo $user['f_name'];?>" required><span class="alert">*</span>
        </p>
        <p>
            <label for="billLName">Last name:</label>
          <input id="billLName" name="l_name" type="text" value="<?php echo $user['l_name'];?>" required><span class="alert">*</span>
        </p>
      
        <p>
            <label for="billAddress1">Address:</label>
          <input id="billAddress1" name="address" type="text" value="<?php echo $user['address'];?>" required><span class="alert">*</span>
        </p>
        
        <p>
            <label for="email">Email:</label>
          <input id="email" name="email" type="email" value="<?php echo $user['email'];?>" required><span class="alert">*</span>
        </p>
   	  <p>
            <label for="phone">Phone:</label>
            <span style="display: none;" class="helper">Please enter your <strong>phone number</strong>.<br>We might need to contact you with regards to your order.</span>
        <input id="phone" name="tel" type="tel" value="<?php echo $user['tel'];?>" required><span class="alert">*</span>
        </p>
        
   	  <p>&nbsp;</p>
        
   	  <p>
   	    <label>&nbsp;</label><label>&nbsp;</label>
      </p>
   	  <input type="submit" name="save" class="continue" value ="Edit"></input>
      </form>
      
    
	    <p>&nbsp;</p>
	    <p>
	      <button type="button">Go back</button>
        </p>
    </form>
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
</html>