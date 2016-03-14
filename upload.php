<?php
	if(isset($_FILES['image']['name'])){
			
                             $image_name = $_FILES['image']['name'];
                              $tmp_name  = $_FILES['image']['tmp_name'];
//
                               if(move_uploaded_file($tmp_name, 'upload/' . $_FILES['image']['name'])){
								   $location = "upload/" . $image_name;
								   echo 'successed.';
							   }
							   else {
								   echo 'Failed.';
							   }
                             
	}
?>