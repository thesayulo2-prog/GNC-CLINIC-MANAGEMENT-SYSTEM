<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);

$_SESSION['user'] = $data['email'];
$_SESSION['name'] = $data['name'];
$_SESSION['role'] = $data['role'];