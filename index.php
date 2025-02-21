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
    <div><a href="create_student.php">Add Student</a></div>
    <table border = '1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $student_query = 'SELECT * FROM students';
            $student_result = mysqli_query($conn, $student_query);

            foreach($student_result as $student){
                ?> 
                <tr>
                    <td><?php echo $student['student_number']?></td>
                    <td><?php echo $student['firstname']?></td>
                    <td><?php echo $student['middlename']?></td>
                    <td><?php echo $student['lastname']?></td>
                    <td><a href="edit_student.php?student_id=<?php echo $student['id']?>" >Edit</a></td>

                 </tr>
                <?php
            }

        
            ?>
        </tbody>


    </table>
</body>
</html>