
<?php 
	include('header.php');

?>	
<div class = "container">
<div class = "bg bg-success well"> You can write something here.. </div>
	<form action  = "#" method = "post" enctype="multipart/form-data" class = "form-horzintal well col-md-6">
		<label> Your name:</label> <input type = "text" name = "name" class = "form-control">
		<label> Your Comment: </label> <textarea cols = "65" rows = "5" class = "form-control" name = "comment">
			</textarea>
			<span class = "glyphicon glyphicon-camera"></span>
			<input type = "file" name = "image" class = "btn btn-primary btn-file " style = "display:none;" >
		</br><input type = "submit" class = "btn btn-primary pull-right" value = "Post your comment" name = "post">
		<button><span class = "glyphicon glyphicon-user"></span>login</button>
		
	</form>
</div>
<?php 
		include ('comment.php');
?>