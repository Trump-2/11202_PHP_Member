<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
// 資料清洗 Data wash 的實際做法
$acc = htmlspecialchars(trim($_POST['acc']));

$sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
                     values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['addr']}')";

$pdo->exec($sql);

header("location:index.php");