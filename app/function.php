<?php 
	function uploadPhoto($input_name,$location='',$type=['jpg','png','doc','pdf','jpeg']){
	//receive values
	$file_name=$_FILES[$input_name]['name'];
	$file_tmp_name=$_FILES[$input_name]['tmp_name'];

	//create a unique name
	$file_name_array= explode('.',$file_name);
	$file_ext=strtolower(end($file_name_array)) ;
	$file_unique_name=md5(rand().time()) . '.' . $file_ext;

	//upload photo
	if (in_array($file_ext,$type)) {
		move_uploaded_file($file_tmp_name, $location .$file_unique_name);
		$status='done';
	}else{
		$status= 'notdone';
	}
	return [
		'status' => $status,
		'file_unique_name' => $file_unique_name
	];
	
};