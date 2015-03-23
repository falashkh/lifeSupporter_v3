<?php
header("Cotent-Type:application/json");
if (isset ( $_REQUEST ['form2_name'] )) {
	
	//$data = array();
	$con = mysql_connect ( 'localhost', 'sitarahussain', 'database123' );
	
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
	mysql_select_db("lifesupporter", $con);

$sql="INSERT INTO medicine(form2_name,form2_disease,click_stock,pills,remind,dossage,optionsRadios,daily_reminder,SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THURSDAY,FRIDAY,SATURDAY) VALUES('$_POST[form2_name]','$_POST[form2_disease]','$_POST[click_stock]','$_POST[pills]','$_POST[remind]','$_POST[dossage]','$_POST[optionsRadios]','$_POST[daily_reminder]','$_POST[SUNDAY]','$_POST[MONDAY]','$_POST[TUESDAY]','$_POST[WEDNESDAY]','$_POST[THURSDAY]','$_POST[FRIDAY]','$_POST[SATURDAY]')";


if (! mysql_query ( $sql, $con )) {
		$data['responce'] = 0;
		$data['responce_message'] = "Error Inserting Data";
	}else{
		$data['responce'] = 0;
		$data['responce_message'] = "Medicine Successfully Added";
	}
	mysql_close ( $con );
	echo json_encode($data);
}
	
	
?>


	
	
	
	
	
	
	
}
?>