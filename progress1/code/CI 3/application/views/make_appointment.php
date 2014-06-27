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
        <h1><a href="index.html" id="brand"><img src="images/logo.png"></a></h1>
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
                        <li><a href="Officer_Controller/p_register">New Patient</a></li>
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
<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>
<script type="text/javascript">
addthisevent.settings({
    license   : "aao8iuet5zp9iqw5sm9z",
    mouse     : false,
    css       : true,
    outlook   : {show:true, text:"Outlook Calendar"},
    google    : {show:true, text:"Google Calendar"},
    yahoo     : {show:false, text:"Yahoo Calendar"},
    hotmail   : {show:false, text:"Hotmail Calendar"},
    ical      : {show:false, text:"iCal Calendar"},
    facebook  : {show:false, text:"Facebook Event"},
    dropdown  : {order:"outlook,google"},
    callback  : ""
});
</script>	
 <div class="wrapper">  
<article id="p_register">
	<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/make_appointment/">
    	<h1>Make Appointment</h1>
         <p>
   	    <label>&nbsp;</label>
      </p>
        <p>
            <label for="PatientID">PatientID:</label>
          <input id="PatientID" name="patientID" type="text" required><span class="alert">*</span>
        </p>
        <p>
          <label for="userID">DentistID:</label>
          <input id="userID" name="userID" type="userID" required><span class="alert">*</span>
        </p>
       	<p>
            <label for="aDate">Date:</label>
          <input id="aDate" name="aDate" type="date" required><span class="alert">*</span>
        </p>
        <p>
          <label for="startTime">Start Time:</label>
          <input id="startTime" name="startTime" type="time" required><span class="alert">*</span>
        </p>
        <p>
         <label for="endTime">End Time:</label>
          <input id="endTime" name="endTime" type="time" required><span class="alert">*</span>
        </p>
      <p>
        <label for="treatment">Treatment:</label>
        <input id="treatment" name="treatment" type="text" required><span class="alert">*</span>
        </p>
       
        <p>
            <label for="description">Description:</label>
          <input id="description" name="description" type="text"><span class="alert"></span>
        </p>
   	  <p>
           
        
   	  <p>
   	    <label>&nbsp;</label>
      </p>
      <!--<a href="http://example.com/link-to-your-event" name="submit">
    Add to Calendar
    <span class="_start">11-06-2014 14:30:00</span>
    <span class="_end">11-06-2014 15:30:00</span>
    <span class="_zonecode">75</span>
    <span class="_summary">P001</span>
    <span class="_description">Dent01</span>
    <span class="_location">dantalclinic</span>
    <span class="_organizer">Organizer</span>
    <span class="_organizer_email">Organizer e-mail</span>
    <span class="_facebook_event">http://www.facebook.com/events/160427380695693</span>
    <span class="_all_day_event">false</span>
    <span class="_date_format">DD/MM/YYYY</span>
</a>-->
   	 <input type="submit" name="submit" class="continue">
   
    </form>
    </form>
    
	<p>&nbsp;</p>
	<p>
      <button type="button">Go back</button>
  </p>
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
