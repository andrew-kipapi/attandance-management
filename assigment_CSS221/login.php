<div class="box">
<h4>Login</h4>

<?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">
<input class="form-control mb-2" name="username" placeholder="Username" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
<button class="btn btn-primary w-100" name="login">Login</button>
</form>

<p class="mt-3 text-center"><a href="?page=register">Create Account</a></p>
</div>
