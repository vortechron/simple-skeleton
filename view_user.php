<?php include "partials/head.php"; ?>

<?php
$sql = "SELECT * FROM users WHERE id = {$_REQUEST['id']}";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
?> 

<form action="processes/update_user.php" method="post">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="name" value="<?= $user['name'] ?>"></td>
                <td><input type="text" class="form-control" name="email" value="<?= $user['email'] ?>"></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?= $_REQUEST['id'] ?>">
    <button class="btn btn-primary">Save</button>
</form>
<?php include "partials/footer.php"; ?>