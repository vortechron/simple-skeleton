<?php
include "../global.php";

var_dump($_POST);
$sql = "UPDATE users SET name='{$_POST['name']}', email='{$_POST['email']}' WHERE id='{$_POST['id']}'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../view_user.php?id='. $_POST['id']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>