<?php  
	require_once "../../app/db.php";
	require_once "../../app/function.php";


	/**
	 * student's value receive from database table
	 */
	$sql="SELECT * FROM students ORDER BY id DESC";
	$data= $connection -> query($sql);
	$i=1;

	while ($fdata=$data -> fetch_assoc()):
?>

<tr>
	<td><?php echo $i; $i++; ?></td>
	<td><?php echo $fdata['name']; ?></td>
	<td><?php echo $fdata['email']; ?></td>
	<td><?php echo $fdata['cell']; ?></td>
	<td><img src="img/students/<?php echo $fdata['photo']; ?>" alt=""></td>
	<td>
		<a id="single_show" view_id="<?php echo $fdata['id']; ?>" class="btn btn-sm btn-info" href="#">View</a>
		<a id="edit_student" update_id="<?php echo $fdata['id']; ?>" class="btn btn-sm btn-warning" href="#">Edit</a>
		<a id="delete_student" delete_id="<?php echo $fdata['id']; ?>" class="btn btn-sm btn-danger" href="#">Delete</a>
	</td>
</tr>
<?php endwhile; ?>


