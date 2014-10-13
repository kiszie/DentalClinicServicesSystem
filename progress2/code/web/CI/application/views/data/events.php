<?php
	include ('../../../connectors/data_connector.php');
	include('../../../connectors/db_sqlite.php');
	include ('../../common/config.php');


    if (!$res = sqlite_open('../../common/db', 0777, $sqliteerror)) {
    	die($sqliteerror);
    }
    $scheduler = new JSONDataConnector($res,"SQLite");
	$scheduler->render_table("events","event_id","start_date,end_date,event_name (text),details");
?>