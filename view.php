<?php

//database connection
$db_name = "id2084390_fcm_db";
$mysql_username = "id2084390_fcm_db";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

$query = "select * from contact"; 
$result = mysqli_query($conn, $query);
$response = array();

while($row=mysqli_fetch_array($result)){
       array_push($response,array("name"=>$row["name"],"email"=>$row["email"]));
}
echo json_encode($response);

?>