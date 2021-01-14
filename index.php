<?php include ('conection.php'); ?>
<?php
$query = "SELECT * FROM CRUD" ;
$run = mysqli_query($conection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <table class="rtable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($lines = mysqli_fetch_assoc($run)) {
                        ?>
                        <tr>
                            <td><?php echo $lines['name']; ?></td>
                            <td><?php echo $lines['age']; ?></td>
                            <td id="read">
                                <?php echo $lines['email']; ?>
                                <div class="func_btn"> <!-- div for the functional buttons -->
                                    <a href="update.php?id=<?php echo $lines['id']; ?>">
                                        <button class="btn" id="edit">Edit</button>
                                    </a>

                                    <a href="delete.php?id=<?php echo $lines['id']; ?>">
                                        <button class="btn" id="del">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                ?>     
            </tbody>

        </table>
    </div>
    <a href="create.php"><button>Create</button></a>
    
</body>
</html>