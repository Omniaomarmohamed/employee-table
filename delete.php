<!-- answer bouns 3  -->
<?php
include_once("conf.php");
$id = $_GET['id']; 
$result = mysqli_query($mysqli, "DELETE FROM employees WHERE id=$id");
header("Location:CRUDws.php");
?>