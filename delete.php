<?php
include_once 'Connection.php';
$sql = "DELETE FROM user WHERE user_id ='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:View.php?userCalorie=$userCalorie");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>