<?php 
include('header.php');
include('connect.php');
if(isset($_POST['name']) && isset($_POST['comment'])) {
	$name    = $_POST['name'];
	$comment = $_POST['comment'];
		if(!empty($name) && !empty($comment)) {
			$query = "INSERT INTO comments(comment_id,name, comment) VALUES('', '$name','$comment')";
			$query_run = mysql_query($query);
		}
		else {
			echo '<div class = "alert alert-danger">All fields Required..</div>';
		}
}

?>
<div class = "container">
<div class ="alert alert-success"> You can write something here. </div>
	<form action = "comment.php" method = "POST" class="well form-horzintal col-md-6">
	<label>Your name:</label><input type ="text" class= "form-control" name = "name"></br>
	<label>Your Comment:	</label><textarea cols = "65" rows="5" name = "comment" class=" form-control"></textarea>
		</br><input type = "submit" class ="btn btn-primary pull-right" value ="Post your comment" >
	</form>
	</div>
</br>
<?php  
	
	$query2 = "SELECT * FROM comments ORDER BY COMMENT_ID  DESC";
		$query2_run = mysql_query($query2);
			while($row = mysql_fetch_array($query2_run)) {
				
				?>
				<div class ="col-md-12">
				<table class = "table well col-md-12">
					<tr><td><b><img src="img/icon.png"> <?php echo $row['name'];  ?></b></td></tr>
					<td> <?php echo $row['comment']; ?></td>
				</table>
				</div>
				<?php
			}               
?>
