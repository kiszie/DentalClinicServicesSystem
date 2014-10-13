<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Patients</title>

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


<div id="container">
	<h1>Patient</h1>

	<div id="body">
		<?php if ( isset($dbrow) && is_array($dbrow) ): ?>
        <table border=4 >

<tr>
<th>PatientID</th>
<th>Firstname</th>
<th>Surname</th>
<th>Age</th>
<th>Gender</th>
<th>Treatment</th>
<th>Address</th>
<th>Tel</th>
<th>Email</th>
<tr>
<?php foreach ( $dbrow as $key ): ?>
<td><?php echo $key->patientID?></td>  
<td><?php echo $key->Firstname?></td>
<td><?php echo $key->Surname?></td>
<td><?php echo $key->Age?></td>
<td><?php echo $key->Gender?></td>
<td><?php echo $key->Treatment?></td>
<td><?php echo $key->Address?></td>
<td><?php echo $key->Tel?></td>
<td><?php echo $key->Email?></td>
</tr>
<?php endforeach; ?>
<?php else: ?>
ไม่มีข้อมูล
<?php endif; ?>
</div>
</table>
</body>
</html>