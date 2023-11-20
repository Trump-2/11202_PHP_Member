<?php
include_once '../include/connect.php';

// 這裡用 $_GET 接 id 而不是 $_POST 是因為，送過來的 id 透過在網址藏變數的方式
// $sql = "delete from `users where `id` = '{$_GET['id']}'";

// $pdo->query($sql);

del("users", $_GET['id']);

unset($_SESSION['user']);

header('location:../index.php');
