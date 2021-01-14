<?php include ('conection.php') ?>
<?php 
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link rel="stylesheet" href="css/style_create.css">
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
        $result_post = "insert into CRUD (name, age, email) values ('$name', '$age', '$email');";
        $send_post = mysqli_query($conection, $result_post);

        ?>
        <script>
            window.location.replace("index.php");
        </script>
        <?php
    }

    ?>

    <main>

        <form method="POST">

            <input type="text" class="create" name="name" placeholder="Name"><br><br>
            <input type="number" class="create" name="age" placeholder="Age"><br><br>
            <input type="text" class="create" name="email" placeholder="Email"><br><br>

            <input type="submit" name="btn" value="Send" id="btn">
        </form>

        <a href="index.php"><button>Back</button></a>
        
    </main>

</body>

</html>
