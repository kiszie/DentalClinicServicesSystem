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
        <h1><a href="index.html" id="brand" title="ABC comp">ABC comp</a></h1>
        <nav>
            <ul>
                <li>
                  <a href="#">Information</a>
                  
                </li>
                
                <li>
                	<a href="callCalendar">Schedule</a>
                    <ul class="sub-menu">
                        <li><a href="#">Patient</a></li>
                        <li><a href="#">Dentist</a></li>
                        
                    </ul>
                </li>
                <li><a href="get_p_db">Account</a> 
                	<ul class="sub-menu">
                        <li><a href="p_register">New Patient</a></li>
                        <li><a href="#">New Dentist</a></li>
                        
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
   <div id="action-bar">
    <?php 
   
   	if(!empty($PID)){
    echo "<h1><a href='logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }
   
   ?>
   </div>
</aside>

 <div class="wrapper">  
<article id="p_register">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/edit_data/">
    	
        <h1>Patient edit information</h1>
        <p>
            <label for="PatientID">PatientID:</label>
          <?php echo $user['patientID'];?><span class="alert"><span class="alert">*</span>
        </p>
       	<p>
        <p>
            <label for="Password">Password:</label>
          <input id="password" name="password" type="password"  required value="<?php echo $user['password'];?>" ><span class="alert"><span class="alert">*</span>
        </p>
            <label for="billFName">First name:</label>
          <input id="billFName" name="Firstname" type="text"  value="<?php echo $user['Firstname'];?>" required><span class="alert"><span class="alert">*</span>
        </p>
        <p>
            <label for="billLName">Last name:</label>
          <input id="billLName" name="Surname" type="text"  value="<?php echo $user['Surname'];?>" required><span class="alert">*</span>
        </p>
        <p>
         <label for="billLName">Age:</label>
          <input id="billLName"  name="Age" type="text"  value="<?php echo $user['Age'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billGender">Gender:</label>
          <input id="billGender" name="Gender" type="text"  value="<?php echo $user['Gender'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billAddress1">Address:</label>
          <input id="billAddress1" name="Address" type="text"  value="<?php echo $user['Address'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billAddress2">&nbsp;</label>
            <input id="billAddress2" name="billAddress2" type="text">
        </p>
        
        <p>
            <label for="email">Email:</label>
          <input id="email" name="Email" type="email" value="<?php echo $user['Email'];?>" required><span class="alert">*</span>
        </p>
   	  <p>
            <label for="phone">Phone:</label>
            <span style="display: none;" class="helper">Please enter your <strong>phone number</strong>.<br>We might need to contact you with regards to your order.</span>
        <input id="phone" name="Tel" type="tel" value="<?php echo $user['Tel'];?>" required><span class="alert">*</span>
        </p>
        
         <p>
            <label for="billTreat">Dental Treatment:</label>
          <input id="billTreat" name="Treatment" type="text" value="<?php echo $user['Treatment'];?>" required><span class="alert">*</span>
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

<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a> &copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
</footer>
</body>
</html>
