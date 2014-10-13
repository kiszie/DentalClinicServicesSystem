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
                	<a href="callCalendar">Schedule</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url();?>index.php/Patient_Controller/patientCalendar/<?php echo $PID;?>">Your Schedule</a></li>
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
   if(!empty($PID)){
    echo "<h1><a href='Patient_Controller/patientCalendar/$PID'>$PID</a>  :   <a href='logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "login";
    }
   ?>
   </div>
</aside><?php */?>
<!--<article>
	<a href="search.html"></a>
</article>-->


<article id="frame">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Patient_Controller/answer_data">
    	
        <h1>Patient edit information</h1>
        <p>
          <label for="qid">qid:</label>
          <input id="qid" name="qid" type="text"  required value="<?php echo $user['qid'];?>" ><span class="alert">*</span>
        </p>
        <p>
          <label for="patientID">patientID:</label>
          <input id="patientID" name="patientID" type="text"  required value="<?php echo $user['patientID'];?>" ><span class="alert">*</span>
        </p>
         <p>
          <label for="dentistID">dentistID:</label>
          <input id="dentistID" name="dentistID" type="text"  required value="<?php echo $user['dentistID'];?>" ><span class="alert">*</span>
        </p>
         <p>
          <label for="question">question:</label>
          <input id="question" name="question" type="text"  required value="<?php echo $user['question'];?>" ><span class="alert">*</span>
        </p>
        <p>
          <label for="qDateTime">aDateTime:</label>
          <input id="qDateTime" name="qDateTime" type="text"  required value="<?php echo $user['qDateTime'];?>" ><span class="alert">*</span>
        </p>
        <p>
          <label for="answer">answer:</label>
          <input id="answer" name="answer" type="text"  required value="<?php echo $user['answer'];?>" ><span class="alert">*</span>
        </p>
        <p>
          <label for="aDateTime">aDateTime:</label>
          <input id="aDateTime" name="aDateTime" type="text"  required value="<?php echo $datetime;?>" ><span class="alert">*</span>
        </p>
        <p>
   	    <label>&nbsp;</label><label>&nbsp;</label>
      </p>
   	  <input type="submit" name="submit" class="continue" value ="Save"></input>
    </form>
</article>	

<!--<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a>&copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
  </div>
</footer>-->
</body>

</html>
