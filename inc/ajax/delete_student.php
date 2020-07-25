<?php 

	require_once "../../app/db.php";
	require_once "../../app/function.php";

	//get the delete id
	$id = $_POST['id'];

	$sql ="DELETE FROM students WHERE id ='$id'";
	$status=$connection -> query($sql);
	if ($status) {
		echo '<p class="alert alert-success" >Student successfuly deleted<button class="close" data-dismiss="alert">&times;</button></p>';
	}
