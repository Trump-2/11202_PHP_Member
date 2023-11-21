<?php
include_once "./include/connect.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];
// $sql = "select * from `users` where `acc` = '$acc' && `pw` = '$pw'";
$sql = "select count(*) from `users` where `acc` = '$acc' && `pw` = '$pw'";
// echo $sql;
// exit();

// 回傳欄位索引為 0 的資料
$user = $pdo->query($sql)->fetchColumn();
// print_r($user);

// if ($user['acc'] == $acc && $user['pw'] == $pw) {
// 判斷式中 1 等於 true，0 等於 false
if ($user) {
  $_SESSION['user'] = $acc;
  header('location:home.php');
} else {
  header('locatoin:login_form.php?error=帳號密碼錯誤');
}