<?php
include "../global.php";

$sql = "DELETE FROM users WHERE id='{$_GET['id']}'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../listing_user.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>