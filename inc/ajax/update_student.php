<?php 

	require_once "../../app/db.php";
	require_once "../../app/function.php";

	//get the student's value
	$id = $_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cell=$_POST['cell'];
	$old_photo=$_POST['old_photo'];
	
	//get new photo array
	$new_photo_array=$_FILES['new_photo'];

	//get new photo name
	$new_photo_name= $new_photo_array['name'];
	
	//get the final photo name and upload new photo(if it is uploaded by user)
	if ($new_photo_name) {
		//upload new photo
		$array=uploadPhoto('new_photo','../../img/students/');
		$new_photo=$array['file_unique_name'];

		//make the photo name to send database table
		$photo=$new_photo;

		//delete old photo
		unlink('../../img/students/'.$old_photo);
	}else{

		//make the photo name to send database table
		$photo=$old_photo;
	}


	//data send to database
	$sql ="UPDATE students SET name='$name',email='$email',cell='$cell',photo='$photo' WHERE id='$id'";
	$status=$connection -> query($sql);

	if ($status) {
		echo '<p class="alert alert-success" >Student successfuly Updated !<button class="close" data-dismiss="alert">&times;</button></p>';
	}

	


	
	



	
