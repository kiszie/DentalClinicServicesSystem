<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free ecommerce template by @webdezign</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://localhost/CI/assets/css/style.unminified.css" />

<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>
<script type="text/javascript">
addthisevent.settings({
    license   : "aao8iuet5zp9iqw5sm9z",
    mouse     : false,
    css       : true,
    outlook   : {show:true, text:"Outlook Calendar"},
    google    : {show:true, text:"Google Calendar"},
    yahoo     : {show:true, text:"Yahoo Calendar"},
    hotmail   : {show:true, text:"Hotmail Calendar"},
    ical      : {show:true, text:"iCal Calendar"},
    facebook  : {show:true, text:"Facebook Event"},
    dropdown  : {order:"outlook,google,ical"},
    callback  : ""
});
</script>

</head>
<body id="home">
<header>
	<div class="wrapper">
         <h1><a href="index.html" id="brand"><img src="images/logo.png"></a></h1>
        <nav>
             <ul>
             <?php
             if($PID == null){
             echo "<li><a href='#'>Login</a>
             	<ul class='sub-menu'>
                        <li><a href='index.php/Patient_Controller/login'>Patient Login</a></li>
                        <li><a href='index.php/Dentist_Controller/login'>Dentist Login</a></li>
                        <li><a href='index.php/Officer_Controller/login'>Officer Login</a></li>
                    </ul>
             </li>";
             }
             ?>
                <li>
                  <a href="#">Information</a>
                  
                </li>
                <li>
                	<a href="Dentist_Controller/callCalendar">Schedule</a>
                    <ul class="sub-menu">
                        <li><a href="#">Patient</a></li>
                        <li><a href="#">Dentist</a></li>
                        
                    </ul>
                </li>
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
    <?php 
   
   	if($PID != null){
    echo "<h1><a href='Patient_Controller/logout/'>LOGOUT</a></h1>";
    }
    else{
    echo "login";
    }
   
   ?>
    
</aside>
<article>
	<a href="search.html"></a>
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