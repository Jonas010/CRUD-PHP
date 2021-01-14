<?php 

include("conection.php");

$id = intval($_GET['id']);
$del_query = "DELETE FROM CRUD WHERE id='$id'";
$run_query = mysqli_query($conection, $del_query) or die ("Isn't possible to delete item."); 

if ($del_query) {
	echo "<script> location.href='index.php'; </script>";
} else {
	echo "<script> alert('An problem was found,sorry.'); location.href='index.php'; </script>";
}

?>