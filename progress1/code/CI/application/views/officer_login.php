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
</head>
<body>

<header>
	<div class="wrapper">
        <h1><a href="index.html" id="brand" title="ABC comp">ABC comp</a></h1>
        <nav>
            <ul>
                <li>
                  <a href="search.html">Tops</a>
                  <ul class="sub-menu">
                        <li><a href="search.html">Tshirts</a></li>
                        <li><a href="search.html">Jumpers</a></li>
                        <li><a href="search.html">Cardigans</a></li>
                        <li><a href="search.html">Knitwear</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Trousers</a></li>
                <li>
                	<a href="search.html">Dresses</a>
                    <ul class="sub-menu">
                        <li><a href="search.html">Bridal dress</a></li>
                        <li><a href="search.html">Cocktail dress</a></li>
                        <li><a href="search.html">Maxi dress</a></li>
                        <li><a href="search.html">Shift dress</a></li>
                        <li><a href="search.html" class="current">Summer dress</a></li>
                        <li><a href="search.html">Warp dress</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Skirts</a></li>
                <li>
                    <a href="search.html">Accessories</a>
                    <ul class="sub-menu">
                        <li><a href="search.html">Shoes</a></li>
                        <li><a href="search.html">Hats</a></li>
                        <li><a href="search.html">Bags</a></li>
                        <li><a href="search.html">Scarves</a></li>
                        <li><a href="search.html">Jewellery</a></li>
                        <li><a href="search.html">Gloves</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Coats &amp; Jackets </a></li>
                <li><a href="search.html">Brands</a></li>
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
        <div id="action-bar"><a href="login.html">Login/Register</a> // <a href="viewbasket.html">Your bag (3) &nbsp; &pound;148</a>
 </div>
    </div>
</aside>
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
        <p><button>Sign in</button> <a href="#">Forgotten password?</a></p>
        
        <p><input type="submit" value="Login"/>
</p>
		
    </form>
     
    <section>
    	<h2>New to ABC comp?</h2>
        <p><button type="button">Continue</button></p>
    </section>
</article>
<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a> &copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
    
</footer>
</body>

</html>
