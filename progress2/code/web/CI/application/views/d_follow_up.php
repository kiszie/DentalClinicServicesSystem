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
        <h1><a href="index.html" id="brand"><img src="images/logo.png"></a></h1>
        <nav>
            <ul>
                <li>
                  <a href="#">Information</a>
                  
                </li>
                <li>
                	<a href="<?php echo base_url();?>index.php/Dentist_Controller/callCalendar">Schedule</a>
                    <ul class="sub-menu">
                        <li><a href="#">Your Schedule</a></li>
 
                    </ul>
                </li>
                <li><a href="#">Account</a></li>
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
    <div id="action-bar">
    <?php 
   
   	if(!empty($ID)){
    echo "<h1><a href='#'>$ID</a>  :   <a href='/CI/index.php/Dentist_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }	
   
   ?>
   </div> 
</aside><?php */?>
<!--<article>
	<a href="search.html"></a>
</article>-->


<div class="wrapper">  
<article id="p_register">
	<form method="post" action="<?php echo base_url();?>index.php/Dentist_Controller/follow_up_data/">
    	<h1>Follow Up</h1>
         <p>
   	    <label>&nbsp;</label>
      </p>
       <p>
   	    <label>&nbsp;</label>
      </p>
      	
        <p>
   	    <label>&nbsp;</label>
      </p>
        <p>
   	    <label for="dentistID">Your ID:</label>
        <input id="dentistID" name="dentistID" type="text" value="<?php echo $ID;?>" required><span class="alert">*</span>
      </p>
        <p>
   	    <label>&nbsp;</label>
      </p>
        <p>
            <label for="PatientID">To PatientID:</label>
          <input id="PatientID" name="patientID" type="text" value="<?php echo $pid;?>" required><span class="alert">*</span>
        </p>
       <p>
   	    <label>&nbsp;</label>
      </p>
      <p>
        <label for="question">Question:</label>
        <input id="question" name="question" type="text" required><span class="alert">*</span>
        </p>        
   	  <p>
   	    <label>&nbsp;</label>
      </p>
       <p>
            <label for="qDateTime">At time:</label>
          <input id="qDateTime" name="qDateTime" type="text" value="<?php echo $datetime;?>" required><span class="alert">*</span>
        </p>
       <p>
   	    <label>&nbsp;</label>
      </p>
      <p>
   	    <label>&nbsp;</label>
      </p>
       <p>
   	    <label>&nbsp;</label>
      </p>
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
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a>&copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
  </div>
</footer>-->
</body>

</html>
