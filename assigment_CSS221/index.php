<?php
session_start();

require_once __DIR__ . "/includes/db.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$class = isset($_GET['class']) ? $_GET['class'] : '';

require_once __DIR__ . "/includes/handlers.php";
require_once __DIR__ . "/includes/header.php";

if (!isset($_SESSION['user'])) {
    if ($page == 'register') {
        require __DIR__ . "/pages/register.php";
    } else {
        require __DIR__ . "/pages/login.php";
    }
} else {
    echo '<a class="btn btn-danger mt-3" href="?logout=1">Logout</a>';

    if ($page == 'select_class') {
        require __DIR__ . "/pages/select_class.php";
    } elseif ($page == 'mark') {
        require __DIR__ . "/pages/mark.php";
    } elseif ($page == 'records') {
        require __DIR__ . "/pages/records.php";
    } else {
        require __DIR__ . "/pages/register_student.php";
    }
}

require_once __DIR__ . "/includes/footer.php";
