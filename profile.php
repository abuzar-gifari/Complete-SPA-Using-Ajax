<?php

	$id=$_POST['id'];
	$connection = new mysqli('localhost','root','','ajax_home');
    $all_teachers_data = $connection->query("SELECT * FROM teachers where id='$id'");
	$profile_data = $all_teachers_data->fetch_object();
?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>User Profile : <?php echo $profile_data->name; ?></h2>
			<img style="width:300px; height:300px; border-radius: 50%; margin:50px auto; display: block;" src="photos/<?php echo $profile_data->photo; ?>" alt="">
			<h1>Name : <?php echo $profile_data->name; ?></h1>
			<h3>Email : <?php echo $profile_data->email; ?></h3>
			<h3>Cell : <?php echo $profile_data->cell; ?></h3>
			<h3>Username : <?php echo $profile_data->username; ?></h3>
		</div>
	</div>
</div>
