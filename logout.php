<?php

session_start();
// 清除變數
unset($_SESSION['user']);

// 將使用者導回首頁
header('location:home.php');