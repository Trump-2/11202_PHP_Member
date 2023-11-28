<?php

// include_once '../include/connect.php';
include_once '../include/db.php';

// $sql = "delete from `users` where `id` = '{$_GET['id']}'";

// $pdo->exec($sql);

// del('users', "{$_GET['id']}");

// 上面使用 db.php 的 del function 變成這樣
$User->del("{$_GET['id']}");

unset($_SESSION['user']);

header('location:../home.php');
