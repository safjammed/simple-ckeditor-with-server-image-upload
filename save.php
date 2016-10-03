<?php
include("db.php");
$id="1";
$title=$_POST['title'];

$content=$_POST['data'];

$select=mysqli_query($db,"select * from tbl_ckeditor where id='1'");
$count=mysqli_num_rows($select);
if($count == 0){
$sql="INSERT INTO tbl_ckeditor (`id`, `title`,`content`) VALUES('1',$title','$content')";
}else{
	$sql="UPDATE `tbl_ckeditor` SET `title` = '$title', `content` = '$content' WHERE `tbl_ckeditor`.`id` = 1";
}
if(mysqli_query($db,$sql)){
	echo "content saved";
}

?>