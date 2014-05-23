<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free ecommerce template by @webdezign</title>
<link rel="stylesheet" href="file:///C|/AppServ/www/CI/assets/css/style.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
    
   <link rel="stylesheet" href="http://localhost/CI/assets/css/style.unminified.css" />
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
<script type="text/javascript" src="http://localhost/CI/assets/js/jquery-ui-1.8.13.custom.min.js"></script>
</head>
<body>

<header>
	<div class="wrapper">
        <h1></h1>
        <nav>
            <ul>
              <li><a href="index.php/Officer_Controller/login">Login</a></li>
                <li><a href="index.php/Officer_Controller/myCalendar">View_Schedule</a></li>
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
</aside>
<!--<article>
	<a href="search.html"></a>
</article>-->
<article id="login">
	<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/login/">
    	
     
    	<h1>Existing customers</h1>
        
     <?php 
	 if (!empty($error_message)){
		 echo'<span style="color:red">'.$error_message.'</span>';
	 }?>
        <p><label for="patientID">OfficerID</label>
        <input type="patientID" name="patient_id" required><span class="alert">*</span></p>
      
        <p><label for="password">Password</label>
        <input type="password" name="password" required><span class="alert">*</span></p>
        <p> <a href="#">Forgotten password?</a></p>
        
        <p><input type="submit" value="Login"/>
</p>
		
    </form>
</article>

</body>

</html>
