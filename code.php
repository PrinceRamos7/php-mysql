<?php
require './config/db_config.php';

    if(isset($_POST['btn_insert_student'])){
        $firstname = $_POST['Firstname']; 
        $middlename = $_POST['Middlename'];
        $lastname = $_POST['Lastname']; 

        $insert_student = "INSERT INTO students (firstname, middlename, lastname) VALUES ('$firstname', '$middlename', '$lastname')";
        $insert_result = mysqli_query($conn, $insert_student);

        if($insert_result){
            ?>
                <script>
                    window.location.href = 'index.php';
                    alert('Data inserted successfully');
                </script>
            <?php
        }

        else{
            echo 'Data failed to insert';
        }
    }



    if (isset ($_POST['btn_update_student'])){
        $firstname = $_POST['Firstname'];
        $middlename = $_POST['Middlename'];
        $lastname = $_POST['Lastname'];
        $id = $_POST['ID'];

        $update_student = "UPDATE student SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname' WHERE id = $id";
        $update_student_result = mysqli_query($conn, $update_student);

        if ($update_student_result){
            ?>
            <script> window.location.href = "index.php";
                alert("Data updated succesfully");
            </script>
            <?php

        }
        else{
            echo 'Failed update';
        }
    }

    if (isset ($_GET['student_id'])){
        $id = $_GET['student_id'];

        $delete_student = "DELETE FROM student WHERE id = $id";
        $delete_student_result = mysqli_query($conn, $delete_student);

        if ($delete_student_result){
            ?>
            <script> 
            window.location.href = "index.php";
                alert("Data delete successfully");
            </script>
                
            <?php
        }

        else{
            echo 'Failed delete';
        }
    }
?>

