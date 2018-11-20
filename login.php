<?php include "partials/head.php"; ?>



<form class="form-signin container" action="processes/login.php" method="post">


    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="username">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
    <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    </div>

<?php include "partials/error.php"; ?>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>



<?php include "partials/footer.php"; ?>