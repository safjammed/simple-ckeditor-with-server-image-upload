window.onload = function() {
	 	 	//replacing editor 1 with CKeditor
    CKEDITOR.replace('editor1', {
         	width: '100%',
         	height: '700',
         	filebrowserUploadUrl: 'upload.php',
         	filebrowserBrowseUrl: 'browse.php',
         	filebrowserWindowWidth: '450',    
         	filebrowserWindowHeight: '480', 
	         });
    }; 
	 
//Saving data with ajax
function save(){
 	var data = CKEDITOR.instances.editor1.getData(); //Get data from the editor.This only needs when you use ajax
	var title_dat= $("#title").val();
	
	var datastring = "title="+title_dat+"&data="+data;
	
	$.ajax({
		type:"POST",
		url:"save.php",
		data:datastring,
		cache:false,
		success:function(html){
			alert(""+html);
			

	}

	});
	return false;
};


	