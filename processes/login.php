<?php
include "../global.php";

// success/failure login redirection
$successPage = "index.php";
$failurePage = "login.php";

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
    header("Location: ../{$successPage}");
    
} else {

    $_SESSION['errors'] = [
        'Wrong password or email.'
    ];

    header("Location: ../{$failurePage}");

}