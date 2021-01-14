<?php include("conection.php"); 

$name   = trim($_POST['name']);
$age    = trim($_POST['age']);
$email  = trim($_POST['email']);
$id     = intval($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/style_update.css">
</head>
<body>

    <?php

        #make sure it is not empty

        unset($_POST["btn"]);

        if (empty($name & $age & $email)) {
            ?>
                <h2>Please, put the infos here: </h2>
            <?php
        } else {
            #update the data
            $query_update = "UPDATE CRUD SET age='$age', name='$name', email='$email' WHERE id='$id'";
            $ok    = mysqli_query($conection, $query_update);

            ?>
                <p>All done.</p>

                <script>window.location.replace("index.php")</script>
            <?php
        }

        mysqli_close($conection);

        ?>
            <form method="POST">

                <input type="text" name="name" id="name" placeholder="Name" maxlength="80" ><br></br>
                <input type="number" name="age" id="age" placeholder="Age" maxlength="2"><br><br>
                <input type="email" name="email" id="email" placeholder="email"><br><br>

                <input type="submit" name="btn" value="send" id="send">

                <bt></bt>
            </form>

            <a href="index.php"><button>Back</button></a>
        <?php
    ?>
    
</body>
</html>
