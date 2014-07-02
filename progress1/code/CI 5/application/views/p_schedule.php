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
                  <a href="search.html">Informaion</a>
                  
                </li>
                <li><a href="search.html">Appointment</a></li>
                <li>
                	<a href="search.html">Schedule</a>
                    <ul class="sub-menu">
                        <li><a href="search.html">Patient</a></li>
                        <li><a href="search.html">Dentist</a></li>
                        
                    </ul>
                </li>
                <li><a href="search.html">Treatment</a></li>
               
                <li><a href="search.html">Promotion &amp; Advertistment</a></li>
                
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
        <form>
        	<input type="text" placeholder="Search ABC comp..." /><button type="submit">Search</button>
        </form>
        <div id="action-bar"><a href="login.html">Login/Register</a> // <a href="viewbasket.html">Your bag (3) &nbsp; &pound;148</a></div>
  </div>
</aside>
<div class="wrapper" >
  
  <?php if ( isset($dbrow) && is_array($dbrow) ): ?>
  <table border=4 >
<?php foreach ( $dbrow as $key ): ?>
<tr>
<th>PatientID</th>
<th>Firstname</th>
<th>Surname</th>
<th>Date</th>
<th>Time</th>
<th>Treatment</th>
<th>Dentist</th>
<tr>

<td><?php echo $key->patientID?></td>  
<td><?php echo $key->firstname?></td>
<td><?php echo $key->surname?></td>
<td><?php echo $key->date?></td>
<td><?php echo $key->time?></td>
<td><?php echo $key->treatment?></td>
<td><?php echo $key->dentist?></td>
</tr>
<?php endforeach; ?>
<?php else: ?>
ไม่มีข้อมูล
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

