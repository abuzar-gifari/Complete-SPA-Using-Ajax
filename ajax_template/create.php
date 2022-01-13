<?php

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$uname = $_POST['username'];

$file_name=time().$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];



$connection = new mysqli('localhost', 'root', '', 'ajax_home');
$connection->query("INSERT INTO teachers (name, email, cell, username, photo) VALUES ('$name','$email','$cell','$uname','$file_name')");
//print_r($_POST);


move_uploaded_file($file_tmp_name,'../photos/'.$file_name);
