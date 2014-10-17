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
<?php /*?><aside id="top">
	<div class="wrapper">
        <ul id="social">
            <li><a href="#" class="facebook" title="like us us on Facebook">like us us on Facebook</a></li>
            <li><a href="#" class="twitter" title="follow us on twitter">follow us on twitter</a></li>
        </ul>
         
        
        </div>
    </div>
    <div id="action-bar">
    <?php 
   
   	if(!empty($ID)){
     echo "<h1><a href='#'>$ID</a>  :   <a href='Officer_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }
   
   ?>
   </div>
    
</aside><?php */?>
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
          <label for="dentistID">DentistID:</label>
          <input id="dentistID" name="dentistID" type="text" required><span class="alert">*</span>
        </p>
       	<p>
            <label for="aDate">Date:</label>
          <input id="aDate" name="aDate" type="date" required><span class="alert">*</span>
        </p>
        <p>
          <label for="startTime">Start Time:</label>
          <select id="startTime" name="startTime" onchange="javascript:startDisplay();" required>
                <option value="09:00:00">09:00</option>
                <option value="09:30:00">09:30</option>
                <option value="10:00:00">10:00</option>
                <option value="10:30:00">10:30</option>
                <option value="11:00:00">11:00</option>
                <option value="11:30:00">11:30</option>
                <option value="12:00:00">12:00</option>
                <option value="12:30:00">12:30</option>
                <option value="13:00:00">13:00</option>
                <option value="13:30:00">13:30</option>
                <option value="14:00:00">14:00</option>
                <option value="14:30:00">14:30</option>
                <option value="15:00:00">15:00</option>
                <option value="15:30:00">15:30</option>
                <option value="16:00:00">16:00</option>
                <option value="16:30:00">16:30</option>
                <option value="17:00:00">17:00</option>
                <option value="17:30:00">17:30</option>
                <option value="18:00:00">18:00</option>
                <option value="18:30:00">18:30</option>
                <option value="19:00:00">19:00</option>
                <option value="19:30:00">19:30</option>
            </select><span class="alert">*</span>
        </p>
        <p>
         <label for="endTime">End Time:</label>
          <select id="endTime" name="endTime" onchange="javascript:startDisplay();" required>
                <option value="09:00:00">09:00</option>
                <option value="09:30:00">09:30</option>
                <option value="10:00:00">10:00</option>
                <option value="10:30:00">10:30</option>
                <option value="11:00:00">11:00</option>
                <option value="11:30:00">11:30</option>
                <option value="12:00:00">12:00</option>
                <option value="12:30:00">12:30</option>
                <option value="13:00:00">13:00</option>
                <option value="13:30:00">13:30</option>
                <option value="14:00:00">14:00</option>
                <option value="14:30:00">14:30</option>
                <option value="15:00:00">15:00</option>
                <option value="15:30:00">15:30</option>
                <option value="16:00:00">16:00</option>
                <option value="16:30:00">16:30</option>
                <option value="17:00:00">17:00</option>
                <option value="17:30:00">17:30</option>
                <option value="18:00:00">18:00</option>
                <option value="18:30:00">18:30</option>
                <option value="19:00:00">19:00</option>
                <option value="19:30:00">19:30</option>
            </select><span class="alert">*</span>
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
<!--<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a> &copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
</footer>-->
</body>
</html>
