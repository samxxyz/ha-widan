<?php
session_start();
include 'conn.php';
$id = $_SESSION['id'];
$sql = "DELETE FROM login WHERE id_user=$id";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    session_destroy();
    header("location:./sign-up");
} else {
    echo "Error deleting record: " . mysqli_error($con);
    header("location:./account");
}

?>