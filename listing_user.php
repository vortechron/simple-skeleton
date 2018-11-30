<?php include "partials/head.php"; ?>

<a href="">Add User</a><br>
<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

    <a class="ml-4 border border-black p-1 mb-8" href="view_user.php?id=<?= $row['id'] ?>"><?= $row['email'] ?></a>
    
    <a href="processes/delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
    <br>

<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

<?php include "partials/footer.php"; ?>