<?php 

	require_once "../../app/db.php";
	require_once "../../app/function.php";

	//get the delete id
	$id = $_POST['id'];
	/**
	 * student's value receive from database table
	 */
	$sql="SELECT * FROM students WHERE id='$id'";
	$data= $connection -> query($sql);

	$student_data= $data -> fetch_assoc();

	echo json_encode($student_data);
	

?>




	