<?php

    $connection = new mysqli('localhost','root','','ajax_home');
    $all_teachers_data = $connection->query("SELECT * FROM teachers");

    // $single_teacher_data = $all_teachers_data->fetch_object();
    
    while($single_teacher_data=$all_teachers_data->fetch_object()){
?>

        <tr>
            <td><?php echo $single_teacher_data->id; ?></td>
            <td><?php echo $single_teacher_data->name; ?></td>
            <td><?php echo $single_teacher_data->email; ?></td>
            <td><?php echo $single_teacher_data->cell; ?></td>
            <td><?php echo $single_teacher_data->username; ?></td>
            <td><img src="photos/<?php echo $single_teacher_data->photo ?>" alt="No image"></td>
            
            <td>

                <a view_id="<?php echo $single_teacher_data->id ?>" href="#" id="profile" class="btn btn-sm btn-info view-btn">View</a>
                <a edit_id="<?php echo $single_teacher_data->id ?>" href="#" id="edit" class="btn btn-sm btn-primary">Edit</a>
                <a delete_id="<?php echo $single_teacher_data->id ?>" href="#" class="btn btn-sm btn-danger delete-btn">Delete</a>

            </td>
        </tr>


    <?php
    }
    ?>
