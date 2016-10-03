<?php
//database connection
include("db.php");
$select=mysqli_query($db,"select * from tbl_ckeditor where id='1'");
$row=mysqli_fetch_array($select,MYSQLI_ASSOC);

?>
<!doctype html>
<html>
	<head>
	 <title>CKeditor</title>
	 <link rel="stylesheet" href="style.css" type="text/css" />
	 <script src="//cdn.ckeditor.com/4.5.11/full-all/ckeditor.js"></script>
	 <script type="text/javascript" src="js/jquery.js"></script>
	 <script type="text/javascript" src="js/jquery-migrate.js"></script>
	 <script type="text/javascript" src="js/custom.js"></script>
	 
	 
	</head>
	<body style='font-family:Arial;'>
	 	<div id="wrapper">
			
			<br>
			<!-- form for CKEDITOR -->
			<div id="form">
				<form method="POST" action="" enctype="mutipart/form-data" onsubmit="return save();">
				<br><br><br><h4>CKeditor essential package.</h4><br>
				<h5> click <a href="http://safjammed.tk">here</a> to visit my website</h5>

					<table>
					<tr><td><b>Title</td><td><input type="text" id="title" name="title" size="50" value="<?= $row["title"]; ?>" /></td></tr>
					<tr><td colspan="2"><b>Type anything</td></tr>
					<tr><td colspan="2"><textarea name="editor1" id="editor1"><?= $row["content"]; ?></textarea></td></tr>
					<tr><td></td><td><input type="submit" name="submit" value="Save" id="submit"/>></td></tr>
					</table>
				</form>
			</div>
		
		</div>
		
	</body>
</html>
