(function($){
	$(document).ready(function(){

		// Show student_add_modal 
		$('a#student_show').click(function(){
			$('#student_add_modal').modal('show');

			return false;
		});

		// Show single student modal 
		$('a#single_show').click(function(){
			$('#single_student_modal').modal('show');

			return false;
		});

		/**
		 * receive value from student modal
		 */
		$('form#student_add_form').submit(function(event){
			event.preventDefault();
			let name = $('input[name="name"]').val();
			let email = $('input[name="email"]').val();
			let cell = $('input[name="cell"]').val();			
			
			//file value
			// let photo = $('input[name="email"]').val();

			if (name=='' || email=='' || cell=='') {
				$('.mess').html('<p class="alert alert-danger" >all fields are required<button class="close" data-dismiss="alert">&times;</button></p>');
			}else{
				$.ajax({
					url : 'inc/ajax/add_student.php',
					data : new FormData(this),
					method : "POST",
					contentType : false,
					processData : false,
					success : function(data){
						$('form#student_add_form')[0].reset();
						$('#student_add_modal').modal('hide');
						$('div.message').html(data);
					}
				});
			}





		});














	});
})(jQuery)
