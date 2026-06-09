<?php
$conn = new mysqli("localhost", "root", "", "kwedizinga_sms");

if ($conn->connect_error) {
    die("DB Connection failed");
}
