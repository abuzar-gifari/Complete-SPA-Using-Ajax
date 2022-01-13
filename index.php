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

	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a id="all" class="btn btn-primary btn-sm" href="">All Students</a>
					<a id="add_student" class="btn btn-primary btn-sm" href="">Add new student</a>
					<!-- <a id="profile" class="btn btn-primary btn-sm" href="">Profile</a> -->
				</div>
			</div>
		</div>
	</div>


	<div class="app">

		

	</div>
 



	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<!-- AJAX CODES START -->

	<script>
		$.ajax({
			url:'all.php',
			success:function(data){
				$('.app').html(data);
			}
		});
		// When page load first...

		$('#add_student').click(function(){
			$.ajax({
				url:"create.php",
				success: function(data){
					$('.app').html(data);
				}
			});

			return false;
		});


		$('#all').click(function(){
			$.ajax({
				url:'all.php',
				success: function(data){
					$('.app').html(data);
					allData();
				}
			});
			return false;
		});

		$(document).on('submit','#student_form',function(){

			let name=$('#name').val();
			let email=$('#email').val();
			let cell=$('#cell').val();
			let username=$('#username').val();

			if (name == "" || email == "" || cell == "" || username == "") {

				swal({
					title: "Warning!!",
					text: "Please fill up all fields!",
					icon: "warning",
					button: "Close",
				});

			}else{

				$.ajax({
					url:'ajax_template/create.php',
					method:'POST',
				//	data:$(this).serialize(), // new line
					data:new FormData(this),
					contentType:false,
					processData:false,
					success:function(output){
						//alert(output);
						swal('Done', 'Student added successful !', 'success');

						let name = $('#name').val('');
						let email = $('#email').val('');
						let cell=$('#cell').val('');
						let username=$('#username').val('');			
					}
				});
			}

			return false;
		});


		allData();
		function allData(){
			$.ajax({
				url:"ajax_template/all_student.php",
				success: function(data){
					$('#all_student_data').html(data);
				}
			});
		}

		$(document).on('click', '.delete-btn', function(e) {

			e.preventDefault();

			let id = $(this).attr('delete_id');

			swal({
				title: 'Are you sure ? ',
				text: 'Delete student data',
				icon: 'warning',
				buttons: true,
				dangerMode: true
			}).then((conf) => {

				if (conf) {
					$.ajax({
						url: 'ajax_template/delete.php',
						method: "POST",
						data: {
							id: id
						},
						success: function(data) {
							swal({
								title: 'Done',
								text: 'Student data deleted successful',
								icon: 'success'
							});

							allData();
						}
					});
				} else {
					swal({
						title: 'Safe',
						text: 'Student data safe now',
						icon: 'success'
					});
				}

			});

			// return false;

		});
		
		$(document).on('click','#profile',function(){

			let id=$(this).attr('view_id');
			$.ajax({
				url:'profile.php',
				method:'POST',
				data:{
					id:id
				},
				success: function(data){
					$('.app').html(data);
				}
			});

			return false;
		});

		
		$(document).on('click','#edit',function(){

			let id=$(this).attr('edit_id');
			$.ajax({
				url:'edit.php',
				method:'POST',
				data:{
					id:id
				},
				success: function(data){
					$('.app').html(data);
				}
			});

			return false;
		});


		$(document).on('submit','#student_form_update',function(){

			let id=$(this).attr('editid');
			let name=$('#name').val();
			let email=$('#email').val();
			let cell=$('#cell').val();
			let username=$('#username').val();

			if (name == "" || email == "" || cell == "" || username == "") {

				swal({
					title: "Warning!!",
					text: "Please fill up all fields!",
					icon: "warning",
					button: "Close",
				});

			}else{

				$.ajax({
					url:'ajax_template/edit.php',
					method:'POST',
					data:{
						id:id,
						name:name,
						email:email,
						cell:cell,
						uname:username
					},
					success:function(data){
						alert(data);
						// swal('Done', 'Student data updated successful !', 'success');

						// let name = $('#name').val('');
						// let email = $('#email').val('');
						// let cell=$('#cell').val('');
						// let username=$('#username').val('');			
					}
				});
			}

			return false;
		});


	</script>

	<!-- AJAX CODES END -->
</body>

</html>
