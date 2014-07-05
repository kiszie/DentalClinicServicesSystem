<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free ecommerce template by @webdezign</title>

<link rel="stylesheet" href="../../css/style.css" />
    
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
                <li><a href="http://example.com/link-to-your-event" title="Add to Calendar" class="addthisevent">
    Make Appointment
    <span class="_start">10-05-2014 11:38:46</span>
    <span class="_end">11-05-2014 11:38:46</span>
    <span class="_zonecode">75</span>
    <span class="_summary">Summary of the event</span>
    <span class="_description">Description of the event</span>
    <span class="_location">Location of the event</span>
    <span class="_organizer">Organizer</span>
    <span class="_organizer_email">Organizer e-mail</span>
    <span class="_facebook_event">http://www.facebook.com/events/160427380695693</span>
    <span class="_all_day_event">true</span>
    <span class="_date_format">DD/MM/YYYY</span>
</a></li>
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

<div class="wrapper" >
<table>

<tr>
<th>PatientID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Gender</th>
<th>Treatment</th>
<th>Address</th>
<th>Tel</th>
<th>Email</th>
<tr>
<?php if ( isset($dbrow) && is_array($dbrow) ): ?>
<?php foreach ( $dbrow as $key ): ?>
<td><a href="<?php echo base_url();?>index.php/Officer_Controller/p_edit/<?php echo $key->patientID;?>"/><?php echo $key->patientID;?></a></td>  
<td><?php echo $key->Firstname?></td>
<td><?php echo $key->Surname?></td>
<td><?php echo $key->Age?></td>
<td><?php echo $key->Gender?></td>
<td><?php echo $key->Treatment?></td>
<td><?php echo $key->Address?></td>
<td><?php echo $key->Tel?></td>
<td><?php echo $key->Email?></td>
<td><a href="<?php echo base_url();?>index.php/Officer_Controller/p_delete/<?php echo $key->patientID;?>"/>Delete</a></td>
<td><a href="<?php echo base_url();?>index.php/Officer_Controller/p_edit/<?php echo $key->patientID;?>"/>Edit</a></td> 
</tr>
<?php endforeach; ?>
<?php else: ?>
No data
<?php endif; ?>

</table>
</div>


<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a>&copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
</footer>
</body>
</html>
