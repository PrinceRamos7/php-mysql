<?php require './config/db_config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student_id = $_GET['student_id'];
    ?>

    <div>
        <?php 
            $display_student = "SELECT * FROM students WHERE id = $student_id";
            $display_student_result = mysqli_query($conn, $display_student);
            $student = mysqli_fetch_assoc($display_student_result);
        ?>
        <form action="code.php" method="POST">
        <input type="hidden" name="ID" value="<?= $student['id'];?>">

        <div>
        <label>Firstname</label>
        <input type="text" name="Firstname" value="<?= $student['firstname'];?>">
        </div>
        
        <div>
        <label>Middlename</label>
        <input type="text" name="Middlename" value="<?= $student['middlename'];?>">
        </div>

        <div>
        <label>Lastname</label>
        <input type="text" name="Lastname" value="<?= $student['lastname'];?>">
        </div>

        <div>
        <div><a href="index.php">Cancel</a></div>

            <button type = 'Submit' name = 'btn_update_student'>Submit</button>
        </div>
        </form>
      

    </div>
</body>
</html>