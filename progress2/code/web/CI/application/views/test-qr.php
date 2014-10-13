<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>qr code js</title>
</head>

<body>
	<div id="qrcode">
    </div>
    
<script src="jquery.qrcode.min.js"></script>  
<script type="text/javascript">
//Wrap it within $(document).ready() to invoke the function after DOM loads.
 
$(document).ready(function(){
 
$('#qrcodeholder').qrcode({
        text    : "http://www.moreonfew.com/generate-qr-code-using-jquery",
        render    : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
        background : "#ffffff",
        foreground : "#000000",
        width : 150,
        height: 150
    });
 
});
 
</script>
</body>

</html>