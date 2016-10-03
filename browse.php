<!DOCTYPE html>
<html>
<head>
	<title>Select Image</title>
	<style type="text/css">
	img{
		width:30%;
	}
	img:hover{
		zoom:1.2;
		transition: 0.5s;
	}

	</style>
</head>
<body>
<!-- images should appear here-->
<?php
$dir = opendir('images/');
		
		if($dir)
		{
			$imagearray = array();
			while(false !==($file=readdir($dir)))
			{
				if ($file !='.' && $file !='..')
				{
					array_push($imagearray, $file); 
				}
			}
			sort($imagearray);
		}
		
		foreach($imagearray as $element)
		{
			echo "<br><img src='images/".$element."' onclick='give(this.src);'> \n"; 
			

		}
?>



<script type='text/javascript'>
//this code passes the image to the CKeditor main window
			function give(url){
			function getUrlParam( paramName ) {    
			var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' ) ; 
			var match = window.location.search.match(reParam) ;    
			return ( match && match.length > 1 ) ? match[ 1 ] : null ; 
			} 
			var funcNum = getUrlParam( 'CKEditorFuncNum' ); 
			var fileUrl = url; 
			window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
			window.close();
}
</script>
</body>
</html>