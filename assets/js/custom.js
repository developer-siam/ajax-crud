(function($){
	$(document).ready(function(){

		// Show student_add_modal 
		$('a#student_show').click(function(){
			$('div#student_add_modal').modal('show');

			return false;
		});

		// Show single student modal 
		$(document).on('click','a#single_show',function(){
			$('div#single_student_modal').modal('show');

			//get view_id from view_id attribute
		 	let view_id = $(this).attr('view_id');
		 	

			//ajax request
			$.ajax({
				url : "inc/ajax/single_student.php",
				data : {id : view_id},
		 		method : 'POST',
		 		success : function(data){
		 			let single_std_data=JSON.parse(data);
		 			$('img#std_image').attr('src','img/students/'+single_std_data.photo);
		 			$('h2#std_name').html(single_std_data.name);
		 			$('td#std_name').html(single_std_data.name);
		 			$('td#std_email').html(single_std_data.email);
		 			$('td#std_cell').html(single_std_data.cell);
		 	}
			});

			//not to appear a '#' on the url when press the view button
			return false;
		});

		/**
		 * student add and show
		 */
		$('form#student_add_form').submit(function(event){
			event.preventDefault();
			let name = $('input[name="name"]').val();
			let email = $('input[name="email"]').val();
			let cell = $('input[name="cell"]').val();			
			
			//file value
			let photo = $('input[name="photo"]').val();

			//form validation
			if (name=='' || email=='' || cell=='') {
				$('.mess').html('<p class="alert alert-danger" >all fields are required<button class="close" data-dismiss="alert">&times;</button></p>');
			}else{
				/**
				 * ajax request for add student's values into Database student table
				 */
				$.ajax({
					url : 'inc/ajax/add_student.php',
					data : new FormData(this),
					method : "POST",
					contentType : false,
					processData : false,
					success : function(data){
						//reset modal page
						$('form#student_add_form')[0].reset();
						//hide modal page
						$('#student_add_modal').modal('hide');
						//show a confirmation message on the student table
						$('div.message').html(data);

						/**
						 * show all student
						 */

						showAllStudent();

					}
				});
			}
		});



		
		/**
		 * a function for get student's information and show it on the table
		*/
		
		function showAllStudent(){
			$.ajax({
			url :'inc/ajax/all_student.php',
			success : function(data){
				$('tbody#all_student').html(data);
			}
		});
		}
		
		showAllStudent();

		/**
		 * delete student
		 */
		 $(document).on('click','a#delete_student',function(){
		 	//get delete_id from delete_id attribute
		 	let delete_id = $(this).attr('delete_id');
		 	//ask for a confirmation 
		 	let conf = confirm("Are you sure?");
		 	if (conf == true) {
		 		$.ajax({
		 			url : 'inc/ajax/delete_student.php',
		 			data : {id : delete_id},
		 			method : 'POST',
		 			success : function(data){
		 				$('.message').html(data);
		 				showAllStudent();
		 			}


		 		});
		 	}

		 	//not to appear '#' on the url 
			return false;
		 });


		 /**
		  * student information putting on student update form
		  */
		 $(document).on('click','a#edit_student',function(e){
		 	// not to generate '#' in the url
		 	e.preventDefault();
		 	//show student update modal
		 	$('div#student_update_modal').modal('show');
		 	//get update id
		 	let update_id = $(this).attr('update_id');
		 	
		 	
		 	$.ajax({
		 		url : 'inc/ajax/student_update_modal.php',
		 		data : {id : update_id},
		 		method : 'POST',
		 		success : function(data){
		 			let std_data =JSON.parse(data);
		 			$('#student_update_modal input[name="name"]').val(std_data.name);
		 			$('#student_update_modal input[name="email"]').val(std_data.email);
		 			$('#student_update_modal input[name="cell"]').val(std_data.cell);
		 			$('#student_update_modal img').attr('src','img/students/'+std_data.photo);
		 			$('#student_update_modal input[name="old_photo"]').val(std_data.photo);	
		 			$('#student_update_modal input[name="id"]').val(std_data.id);		 					 			
		 		}
		 	});
		 });


		 /**
		 * student Update and show
		 */
		$('form#student_update_form').submit(function(e){
			e.preventDefault();

			
			//ajax request
			$.ajax({
				url : "inc/ajax/update_student.php",
				data : new FormData(this),
				processData:false,
				contentType:false,
				method:'POST',
				success: function(data){
					$('form#student_add_form')[0].reset();
					$('div#student_update_modal').modal('hide');
					$('div.message').html(data);
					showAllStudent();
				}
			});

		});









	});
})(jQuery)
