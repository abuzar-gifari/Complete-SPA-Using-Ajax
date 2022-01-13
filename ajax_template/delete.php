<?php

    $id = $_POST['id'];
    $connection = new mysqli('localhost', 'root', '', 'ajax_home');
    $connection->query("DELETE FROM teachers WHERE id='$id'");
?>
