<?php include "partials/head.php"; ?>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

    <a href="view_user.php?id=<?= $row['id'] ?>"><?= $row['email'] ?></a><br>

<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

<?php include "partials/footer.php"; ?>