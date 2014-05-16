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
                <li>
                   
                </li>
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
        <div id="action-bar"><a href="file:///Macintosh HD/Users/baitarn/Desktop/ecommerce/login.html">Login/Register</a> // <a href="file:///Macintosh HD/Users/baitarn/Desktop/ecommerce/viewbasket.html">Your bag (3) &nbsp; &pound;148</a></div>
    </div>
</aside>

 <div class="wrapper">  
<article id="p_register">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/edit_data/">
    	
        <h1>Patient edit information</h1>
        <p>
            <label for="PatientID">PatientID:</label>
          <input id="PatientID" name="patientID" type="text"  required value="<?php echo $user['patientID'];?>" ><span class="alert"><span class="alert">*</span>
        </p>
       	<p>
            <label for="billFName">First name:</label>
          <input id="billFName" name="Firstname" type="text"  value="<?php echo $user['Firstname'];?>" required><span class="alert"><span class="alert">*</span>
        </p>
        <p>
            <label for="billLName">Last name:</label>
          <input id="billLName" name="Surname" type="text"  value="<?php echo $user['Surname'];?>" required><span class="alert">*</span>
        </p>
        <p>
         <label for="billLName">Age:</label>
          <input id="billLName"  name="Age" type="text"  value="<?php echo $user['Age'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billGender">Gender:</label>
          <input id="billGender" name="Gender" type="text"  value="<?php echo $user['Gender'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billAddress1">Address:</label>
          <input id="billAddress1" name="Address" type="text"  value="<?php echo $user['Address'];?>"required><span class="alert">*</span>
        </p>
        <p>
            <label for="billAddress2">&nbsp;</label>
            <input id="billAddress2" name="billAddress2" type="text">
        </p>
        <p>
            <label for="billCity">City:</label>
          <input id="billCity" name="City" type="text" required><span class="alert">*</span>
        </p>
        <p>
            <label for="billCountry">Country:</label>
          <select id="billCountry" name="Country" onchange="javascript:startDisplay();" required>
                <option value="AR">Argentina</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="BS">Bahamas</option>
                <option value="BB">Barbados</option>
                <option value="BE">Belgium</option>
                <option value="BM">Bermuda</option>
                <option value="BR">Brazil</option>
                <option value="CA">Canada</option>
                <option value="KY">Cayman Islands</option>
                <option value="CL">Chile</option>
                <option value="CN">China (People's Republic)</option>
                <option value="CX">Christmas Island</option>
                <option value="CR">Costa Rica</option>
                <option value="CY">Cyprus</option>
                <option value="DK">Denmark</option>
                <option value="EG">Egypt</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
                <option value="GR">Greece</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="HK">Hong Kong</option>
                <option value="IS">Iceland</option>
                <option value="IE">Ireland (Republic of Ireland)</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="KW">Kuwait</option>
                <option value="LU">Luxembourg</option>
                <option value="MW">Malawi</option>
                <option value="MX">Mexico</option>
                <option value="MC">Monaco</option>
                <option value="NL">Netherlands (Holland)</option>
                <option value="AN">Netherlands Antilles</option>
                <option value="NZ">New Zealand</option>
                <option value="NO">Norway</option>
                <option value="PA">Panama</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SG">Singapore</option>
                <option value="ZA">South Africa</option>
                <option value="KP">South Korea (Republic of Korea)</option>
                <option value="ES">Spain</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="TW">Taiwan</option>
                <option value="TH">Thailand</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TR">Turkey</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB" selected="selected">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="VE">Venezuela</option>
                <option value="VG">Virgin Islands (British)</option>
            </select>
        </p>
        <p>
            <label for="billZip">Post code:</label>
          <input id="billZip" name="billZip" type="text" required><span class="alert">*</span>
        </p>
        <p>
            <label for="billEqualShip">Ship to this address</label>
            <input name="billEqualShip" type="checkbox" id="billEqualShip" value="Y" checked>
        </p>
        <p>
            <label for="email">Email:</label>
          <input id="email" name="Email" type="email" value="<?php echo $user['Email'];?>" required><span class="alert">*</span>
        </p>
   	  <p>
            <label for="phone">Phone:</label>
            <span style="display: none;" class="helper">Please enter your <strong>phone number</strong>.<br>We might need to contact you with regards to your order.</span>
        <input id="phone" name="Tel" type="tel" value="<?php echo $user['Tel'];?>" required><span class="alert">*</span>
        </p>
        
         <p>
            <label for="billTreat">Dental Treatment:</label>
          <input id="billTreat" name="Treatment" type="text" value="<?php echo $user['Treatment'];?>" required><span class="alert">*</span>
        </p>
   	  <p>&nbsp;</p>
        
   	  <p>
   	    <label>&nbsp;</label><label>&nbsp;</label>
      </p>
   	  <input type="submit" name="save" class="continue" value ="Edit"></input>
      </form>
      <form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/Officer_Controller/p_delete/">
   	  <input type="submit" name="delete" class="continue" value="Delete"  ></input>
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
