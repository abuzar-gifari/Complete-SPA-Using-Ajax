<?php

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$uname = $_POST['uname'];

$connection = new mysqli('localhost', 'root', '', 'ajax_home');
$connection->query("UPDATE teachers SET name = '$name', email = '$email', cell='$cell', username='$uname' WHERE id = '$id';");
