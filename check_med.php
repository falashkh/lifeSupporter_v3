<?php
session_start();

//session_register('pill_id');
$found = 0;
$time = $_REQUEST['txt_account_no'];
$day = $_REQUEST['weekday'];
$time1=date("H:i:00", strtotime($time));
$servername = "localhost";
$username = "sitarahussain";
$password = "database123";
$dbname = "lifesupporter";
$pilname="";
$dos ="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from  medicine where daily_reminder= '{$time1}' AND $day=1" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$found = 1;
}
if($found == 1){
while($row = $result->fetch_assoc()){
$pill_id = $row['medicine_id'];
$pilname = $row['form2_name'];
$dos = $row['dossage'];
}
}

$_SESSION['pill_id'] = $pill_id;
$_SESSION['pilname'] =$pilname;
$_SESSION['dos'] =$dos;
//echo $found;
//echo $pill_id;
echo $foo = $found.$pill_id."|".$pilname."<".$dos;
// echo '<pre>';
// print_r($result);
// echo '</pre>';


function update($pill_id) {
 while($row = $result->fetch_assoc()){
$pill_total = $row['pills'];
$dossage = $row['dossage'];
	}

$new_pills = $pill_total - $dossage;
mysql_query("UPDATE medicine SET pills = '$new_pills'
WHERE medicine_id = '$pill_id'") or die(mysql_error());
}
?>


