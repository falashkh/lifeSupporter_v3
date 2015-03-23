<?php
/////////////////////////////////////////  BASIC LOGIC ////////////////////////////////
session_start();

$id= $_GET["update"];
$servername = "localhost";
$username = "sitarahussain";
$password = "database123";
$dbname = "lifesupporter";
$pills=0;
$dos =0;
$new_pills=0;
$stock ="";
//$conn = new mysqli($servername, $username, $password, $dbname);
mysql_connect($servername, $username, $password) or die (mysql_error ());
mysql_select_db($dbname) or die(mysql_error());

//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 

$sql = "select * from  medicine WHERE medicine_id = '$id' " ;
$result = mysql_query($sql);


while($row = mysql_fetch_array($result)) {
$pills = $row[4];
$dos = $row[6];
$stock = $row[3];
}





if($stock == "1"){
$new_pills = $pills - $dos;
if($new_pills >= 0){
if(mysql_query("UPDATE medicine SET pills = '$new_pills' WHERE medicine_id = '$id' ")){
	//echo "ok";
}
else{
	//echo "Error";
}
}
}

echo $new_pills;

mysql_close();




?>