<div class="box">
<h4>Create Account</h4>

<?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">
<input class="form-control mb-2" name="username" placeholder="Username" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
<button class="btn btn-success w-100" name="register">Register</button>
</form>

<div class="text-center mt-3">
<a href="index.php" class="btn btn-secondary">&larr; Back</a>
</div>
</div>
