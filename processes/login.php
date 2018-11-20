<?php
include "../global.php";
// var_dump($_POST);

// terima username dan password
$username = $_POST['username'];
$password = $_POST['password'];

// check username wujud
$sql = "SELECT * FROM users WHERE email = '{$username}' AND password = '{$password}' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $_SESSION['auth'] = $result->fetch_assoc();
    $_SESSION['errors'] = [
    ];
    header('Location: ../index.php');
    
} else {

    $_SESSION['errors'] = [
        'Wrong password or email.'
    ];

    header('Location: ../login.php');

}