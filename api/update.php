<?php

// include_once "../include/connect.php";
include_once "../include/db.php";

// 老師建議這樣寫，視覺上比較好閱讀
// $sql = "update `users` set `acc`='{$_POST['acc']}',
//                            `pw`='{$_POST['pw']}',
//                            `name`='{$_POST['name']}',
//                            `email`='{$_POST['email']}',
//                            `address`='{$_POST['address']}' 
//         where `id`='{$_POST['id']}'";

// $res = update('users', [
//   'acc' => "{$_POST['acc']}",
//   'pw' => "{$_POST['pw']}",
//   'name' => "{$_POST['name']}",
//   'email' => "{$_POST['email']}",
//   'address' => "{$_POST['address']}"
// ], "{$_POST['id']}");

// 上面使用 db.php 裡面的 function 變成這樣
$res = $User->save($_POST);

if ($res > 0) {
  $_SESSION['msg'] = "更新成功";
} else {
  $_SESSION['msg'] = "資料無異動";
}

header("location:../member.php");
