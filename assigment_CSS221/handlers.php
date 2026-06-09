<?php
/* REGISTER */
if (isset($_POST['register'])) {
    $u = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if (empty($u) || empty($pass)) {
        $error = "Please fill all fields";
    } else {
        $p = password_hash($pass, PASSWORD_DEFAULT);
        $conn->query("INSERT INTO users(username,password) VALUES('$u','$p')");
        header("Location: index.php");
        exit();
    }
}

/* LOGIN */
if (isset($_POST['login'])) {
    $u = trim($_POST['username']);
    $p = trim($_POST['password']);

    if (empty($u) || empty($p)) {
        $error = "Please enter username and password";
    } else {
        $res = $conn->query("SELECT * FROM users WHERE username='$u'");
        $user = $res->fetch_assoc();

        if ($user && password_verify($p, $user['password'])) {
            $_SESSION['user'] = $u;
            header("Location: index.php?page=register_student");
            exit();
        } else {
            $error = "Wrong login details";
        }
    }
}

/* LOGOUT */
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

/* ADD STUDENT */
if (isset($_POST['add_student'])) {
    $name = trim($_POST['name']);
    $class = trim($_POST['class']);

    if (empty($name) || empty($class)) {
        $error = "Fill all student details";
    } else {
        $conn->query("INSERT INTO students(name,class) VALUES('$name','$class')");
    }
}

/* ATTENDANCE */
if (isset($_POST['mark'])) {
    $sid = $_POST['student_id'];
    $status = $_POST['status'];
    $date = date("Y-m-d");

    if (!empty($sid) && !empty($status)) {
        $conn->query("INSERT INTO attendance(student_id,date,status)
        VALUES('$sid','$date','$status')");
    }
}
