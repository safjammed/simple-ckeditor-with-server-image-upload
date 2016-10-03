<?php
$host="localhost";
$user="root";
$pass="";
$db_name="ckeditor";
if($db=new mysqli($host, $user, $pass, $db_name)){
//do nothing
}else{
	die("Error".mysqli_connect_error());
}

?>