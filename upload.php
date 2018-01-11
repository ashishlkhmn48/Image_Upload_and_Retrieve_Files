<?php

//database connection
$db_name = "id2084390_fcm_db";
$mysql_username = "id2084390_fcm_db";
$mysql_password = "ashish123";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

$jsonString = $_POST["json"];
$contact = json_decode($jsonString);

$name = $contact->name;
$email = $contact->email;
$profile_pic = $contact->profilePic;
$uploadPath = "upload/$name.jpg";

$query = "insert into contact values('$name','$email')"; 

if(mysqli_query($conn,$query)){
    file_put_contents($uploadPath,base64_decode($profile_pic));
	echo "Image Uploaded Successfully.";
}
else{
	echo "Image not Uploaded";
}
?>