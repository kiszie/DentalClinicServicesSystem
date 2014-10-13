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
    </div><?php */?>
  <?php /*?> <div id="action-bar">
    <?php 
   
   	if(!empty($ID)){
     echo "<h1><a href='#'>$ID</a>  :   <a href='<?php echo base_url();?>index.php/Dentist_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "<h1><a href='index.html'>login</a></h1>";
    }
   
   ?>
   </div><?php */?>
   
<script>
function calculate(){
	}
</script>
</aside>

<div class="wrapper" >
<article>
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Dentist_Controller/cost_est/">
<table>
<?php if ( isset($treatment) && is_array($treatment) ): ?>
<?php $count = 1;?>
<?php foreach ( $treatment as $t ): ?>

<?php if($count%3==1):?>
<tr>
<td>

	<input type="checkbox" name="cost[]" value="<?php echo $t['cost'] ?>"><p><?php echo $t['tName'] ?> </p><br> 

</td>
<?php elseif($count%3==2):?>
<td>

	<input type="checkbox" name="cost[]" value="<?php echo $t['cost'] ?>"><p><?php echo $t['tName'] ?> </p><br> 

</td>
<?php else: ?>
<td>

	<input type="checkbox" name="cost[]" value="<?php echo $t['cost'] ?>"><p><?php echo $t['tName'] ?> </p><br> 

</td>
</tr>
<?php endif; ?>
<?php $count++;?>
<?php endforeach; ?>

<?php else: ?>
No data
<?php endif; ?>
</table>
<p>
   	    <label><input type="submit" name="submit" class="continue"></label>
      </p>

<label>&nbsp;</label>
<label>&nbsp;</label>
<label><?php echo $result;?><p>THB</p></label>

</form>

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

