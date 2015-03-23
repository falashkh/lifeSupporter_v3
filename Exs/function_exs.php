<?php
if (isset ( $_REQUEST ['daliy_reminder2'] )) {
	$data = array();
	$con = mysql_connect ( 'localhost', 'sitarahussain', 'database123' ) or die ( mysql_error () );
	mysql_select_db ( 'lifesupporter', $con ) or die ( mysql_error () );
	$sql = "INSERT INTO  exercise(daliy_reminder2) VALUES('" . $_POST ['daliy_reminder2'] . "')";
	if (! mysql_query ( $sql, $con )) {
		$data['responce'] = 0;
		$data['responce_message'] = "Error Inserting Data";
	}else{
		$data['responce'] = 0;
		$data['responce_message'] = "Data Successfully Added";
	}
	mysql_close ( $con );
	echo json_encode($data);
}
?>
