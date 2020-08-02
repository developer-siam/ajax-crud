<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	<!-- STUDENT ADD MODAL  -->
	<div id="student_add_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Add new student</h2>
					<div class="mess">
						
					</div>
					<hr>
					<form id="student_add_form" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" name="name" type="text">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" name="email" type="text">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" name="cell" type="text">
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control" name="photo" type="file">
						</div>

						<div class="form-group">
							<label for=""></label>
							<input class="btn btn-primary" name="add" type="submit" value="Add student">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- STUDENT UPDATE MODAL  -->
	<div id="student_update_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Update student data</h2>
					<div class="updatemess">
						
					</div>
					<hr>
					<form id="student_update_form" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" name="name" type="text">
							<input type="hidden" name="id">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" name="email" type="text">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" name="cell" type="text">
						</div>
						<div class="form-group">
							<img src="" style="width: 200px; height:200px; display: block;margin: auto; border-radius: 50%; border: 10px solid #FFF;">
							<input type="hidden" name="old_photo">
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control" name="new_photo" type="file">
						</div>

						<div class="form-group">
							<input class="btn btn-primary" name="add" type="submit" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- SINGLE STUDENT SHOW MODAL  -->
	<div id="single_student_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Single Student Data</h2>
					<hr>
					
					<img id="std_image" class="shadow" style="width: 200px; height:200px; display: block;margin: auto; border-radius: 50%; border: 10px solid #FFF;" src="" alt="">
					<h2 id="std_name" class="text-center">Asraful Haque</h2>

					<table  class="table table-striped">
						<tr>
							<td>Name :</td>
							<td id="std_name"></td>
						</tr>

						<tr>
							<td>email :</td>
							<td id="std_email"></td>
						</tr>

						<tr>
							<td>cell :</td>
							<td id="std_cell"></td>
						</tr>				
					</table>

				</div>
			</div>
		</div>
	</div>
	

	<!-- all student table -->
	<div class="wrap-table ">
		<a id="student_show" class="btn btn-primary btn-sm" href="#">Add new student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
				<div class="message">
					
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="all_student">
						
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>