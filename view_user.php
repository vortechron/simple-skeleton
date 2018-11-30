<?php include "partials/head.php"; ?>

<?php
$sql = "SELECT * FROM users WHERE id = {$_REQUEST['id']}";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
?> 

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    </tbody>
</table>

<?php include "partials/footer.php"; ?>