<?php
// 不需要和資料庫進行連線，所以沒有 include connect.php
session_start();
unset($_SESSION['user']);

header("location:../index.php");
