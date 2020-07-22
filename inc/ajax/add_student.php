<?php 
	require_once "../../app/db.php";
	require_once "../../app/function.php";

    /**
     * value get
     */
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cell=$_POST['cell'];

	/**
	 * photo upload
	 */
	$photo=uploadPhoto('photo','../../img/students/');
	$photo_name=$photo['file_unique_name'];
	


	/**
	 * value pass to database table
	 */
	$sql ="INSERT INTO students (name,email,cell,photo) VALUES ('$name','$email','$cell','$photo_name')";
	$status=$connection -> query($sql);
	if ($status) {
		echo '<p class="alert alert-success" >Student successfuly added<button class="close" data-dismiss="alert">&times;</button></p>';
	}
