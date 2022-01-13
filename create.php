<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Add new Student</h2>
			<div class="msg"></div>
			<form id="student_form" method="POST" enctype="multipart/form-data">
				<!-- If we use serialize method, then need to use (method="POST", use "name" attr)  -->
				<!-- If we don't use serialize method, then need not to use (method="POST", use "name" attr) -->
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" id="name" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" id="email" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" id="cell" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="username" id="username" class="form-control" type="text">
				</div>
				
				<div class="form-group">
					<label for="">Photo Upload</label>
					<input name="photo" id="photo" class="form-control" type="file">
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Sign Up">
				</div>
			</form>
		</div>
	</div>
</div>
