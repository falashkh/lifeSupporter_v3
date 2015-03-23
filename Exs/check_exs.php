
<?php
$found = 0;
$time = $_REQUEST['txt_account_no'];
$time1=date("H:i:00", strtotime($time));
$servername = "localhost";
$username = "sitarahussain";
$password = "database123";
$dbname = "lifesupporter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from   exercise where daliy_reminder2 = '".$time1."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$found = 1;
}

echo $found;

// echo '<pre>';
// print_r($result);
// echo '</pre>';

?>
