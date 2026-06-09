<div class="box">
<h4>Attendance Records</h4>

<?php
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$filterClass = isset($_GET['filter_class']) ? trim($_GET['filter_class']) : '';
$filterStatus = isset($_GET['filter_status']) ? trim($_GET['filter_status']) : '';
$filterDate = isset($_GET['filter_date']) ? trim($_GET['filter_date']) : '';

$sql = "
SELECT students.name, students.class, attendance.date, attendance.status
FROM attendance
JOIN students ON students.id = attendance.student_id
";

$conditions = [];
$types = '';
$params = [];

if ($search !== '') {
    $conditions[] = "students.name LIKE ?";
    $types .= 's';
    $params[] = "%$search%";
}

if ($filterClass !== '') {
    $conditions[] = "students.class = ?";
    $types .= 's';
    $params[] = $filterClass;
}

if ($filterStatus !== '') {
    $conditions[] = "attendance.status = ?";
    $types .= 's';
    $params[] = $filterStatus;
}

if ($filterDate !== '') {
    $conditions[] = "attendance.date = ?";
    $types .= 's';
    $params[] = $filterDate;
}

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$sql .= " ORDER BY attendance.date DESC";

$stmt = $conn->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$q = $stmt->get_result();
?>

<form method="GET" class="mb-3">
<input type="hidden" name="page" value="records">

<input class="form-control mb-2" name="search" placeholder="Search student name" value="<?php echo htmlspecialchars($search); ?>">

<select class="form-control mb-2" name="filter_class">
<option value="">All Classes</option>
<option <?php if ($filterClass == 'Form One') echo 'selected'; ?>>Form One</option>
<option <?php if ($filterClass == 'Form Two') echo 'selected'; ?>>Form Two</option>
<option <?php if ($filterClass == 'Form Three') echo 'selected'; ?>>Form Three</option>
<option <?php if ($filterClass == 'Form Four') echo 'selected'; ?>>Form Four</option>
</select>

<select class="form-control mb-2" name="filter_status">
<option value="">All Status</option>
<option <?php if ($filterStatus == 'Present') echo 'selected'; ?>>Present</option>
<option <?php if ($filterStatus == 'Absent') echo 'selected'; ?>>Absent</option>
</select>

<input class="form-control mb-2" type="date" name="filter_date" value="<?php echo htmlspecialchars($filterDate); ?>">

<div class="d-flex gap-2">
<button class="btn btn-primary w-100" type="submit">Search / Filter</button>
<a class="btn btn-secondary w-100" href="?page=records">Reset</a>
</div>
</form>

<table class="table table-bordered">
<tr><th>Name</th><th>Class</th><th>Date</th><th>Status</th></tr>

<?php
$hasRecords = false;
while ($r = $q->fetch_assoc()) {
    $hasRecords = true;
    echo "<tr>
    <td>" . htmlspecialchars($r['name']) . "</td>
    <td>" . htmlspecialchars($r['class']) . "</td>
    <td>" . htmlspecialchars($r['date']) . "</td>
    <td>" . htmlspecialchars($r['status']) . "</td>
    </tr>";
}

if (!$hasRecords) {
    echo "<tr><td colspan='4' class='text-center'>No records found</td></tr>";
}
?>
</table>

<div class="text-center">
<a href="javascript:history.back()" class="btn btn-secondary">&larr; Back</a>
</div>
</div>
