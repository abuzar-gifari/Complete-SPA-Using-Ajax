
<?php

$id=$_POST['id'];
$connection = new mysqli('localhost','root','','ajax_home');
$all_teachers_data = $connection->query("SELECT * FROM teachers where id='$id'");
$profile_data = $all_teachers_data->fetch_object();
?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Add new Student</h2>
			<div class="msg"></div>
			<form id="student_form_update">
				<div class="form-group">
					<label for="">Name</label>
					<input id="name" class="form-control" type="text" value="<?php echo $profile_data->name; ?>">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input id="email" class="form-control" type="text" value="<?php echo $profile_data->email; ?>">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input id="cell" class="form-control" type="text" value="<?php echo $profile_data->cell; ?>">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input id="username" class="form-control" type="text"  value="<?php echo $profile_data->username; ?>">
				</div>
                <input type="hidden" name="id" editid="<?php echo $profile_data->id ?>">
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="update">
				</div>
			</form>
		</div>
	</div>
</div>
