<?php include "partials/head.php"; ?>


<form class="form-signin container" action="processes/register.php" method="post">
<div class="w-1/2 mx-auto">
    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
    <input type="text" id="inputEmail" class="form-control mb-4" placeholder="Name" required autofocus name="name">
    <input type="text" id="inputEmail" class="form-control mb-4" placeholder="Email address" required autofocus name="email">
    <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required name="password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</div>
</form>



<?php include "partials/footer.php"; ?>