<?php
//Uploads the file through ckeditor uploader
$image=time().$_FILES["upload"]["name"];
$image_file = $_FILES["upload"]["tmp_name"];
move_uploaded_file($image_file,"images/".$image);
echo "<h2>Upload Done!</h2>"
?>
