<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');

$sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
                     values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['addr']}')";

$pdo->exec($sql);