<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>qr code js</title>
</head>

<body>
	
    
<?php 

	include('/.../libraries/phpqrcode/qrlib.php');
	include('config.php');
	$tempDir = EXAMPLE_TMP_SERVERPATH;
	$phoneNo = '(085)867-2122';
	$codeContents = 'tel: '.$phoneNo;
	
	QRcode::png($codeContents, $tempDir.'020.png', QR_ECLEVEL_L, 3);
	echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'020.png" />';
	
 ?>
</body>

</html>