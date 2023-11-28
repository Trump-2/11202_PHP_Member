<?php
// include_once "../include/connect.php";
include_once "../include/db.php";
$acc = htmlspecialchars(trim($_POST['acc']));

// $sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`address`) 
//                    values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";

// $pdo->exec($sql);

// 這裡用 connect.php 中的函數代替上面的 sql 語句


// insert('users', [
//     'acc' => "$acc",
//     'pw'  => "{$_POST['pw']}",
//     'name'=> "{$_POST['name']}",
//     'email' => "{$_POST['email']}",
//     'address'=> "{$_POST['address']}"
// ]);

/*
上面使用 db.php 的 save function 變成這樣，而參數只有 $_POST 是因為它本身就是包含所有欄位的陣列
*/
$User->save($_POST);

header("Location:../home.php");