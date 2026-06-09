<div class="box">
<h4>Register Student</h4>

<?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">
<input class="form-control mb-2" name="name" placeholder="Student Name" required>

<select class="form-control mb-2" name="class" required>
<option value="">Select Class</option>
<option>Form One</option>
<option>Form Two</option>
<option>Form Three</option>
<option>Form Four</option>
</select>

<button class="btn btn-primary w-100" name="add_student">Add Student</button>
</form>

<div class="mt-3 text-center">
<a href="?page=select_class" class="btn btn-warning">Go to Mark Attendance</a>
</div>

<div class="mt-3 text-center">
<a href="javascript:history.back()" class="btn btn-secondary">&larr; Back</a>
</div>
</div>
