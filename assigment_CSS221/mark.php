<div class="box">
<h4>Mark Attendance (<?php echo $class; ?>)</h4>

<form method="POST">
<select class="form-control mb-2" name="student_id" required>
<?php
$students = $conn->query("SELECT * FROM students WHERE class='$class'");
while ($s = $students->fetch_assoc()) {
    echo "<option value='{$s['id']}'>{$s['name']}</option>";
}
?>
</select>

<select class="form-control mb-2" name="status" required>
<option value="">Select Status</option>
<option>Present</option>
<option>Absent</option>
</select>

<button class="btn btn-warning w-100" name="mark">Save</button>
</form>

<div class="mt-3 text-center">
<a href="?page=records" class="btn btn-info">View Records</a>
</div>

<div class="mt-3 text-center">
<a href="javascript:history.back()" class="btn btn-secondary">&larr; Back</a>
</div>
</div>
