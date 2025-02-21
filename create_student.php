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
    

    <div>
        <form action="code.php" method="POST">
        <div>
        <label>Firstname</label>
        <input type="text" name="Firstname">
        </div>

        <div>
        <label>Middlename</label>
        <input type="text" name="Middlename">
        </div>

        <div>
        <label>Lastname</label>
        <input type="text" name="Lastname">
        </div>

        <div>
        <div><a href="index.php">Cancel</a></div>

            <button type = 'Submit' name = 'btn_insert_student'>Submit</button>
        </div>
        </form>
      

    </div>
</body>
</html>