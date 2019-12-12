<?php
$con = mysqli_connect('localhost', 'root', '', 'sap');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
  // JSON string
$someJSON = file_get_contents("php://input");
  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);

foreach ($someArray as $mydata) {
    // Use $field and $value here
	echo "\n";
	$query = "INSERT INTO barcode128 (matnr, maktx)
     VALUES('".$mydata['matnr']."','".$mydata['maktx']."' )";
    mysqli_query($con, $query);
}
$con->close();
?>