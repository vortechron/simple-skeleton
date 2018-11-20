<?php
include "../global.php";

// insert into database
$sql = "INSERT INTO users (name, email, password, role)
VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}', '')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}