<?php
session_start();
$_SESSION['userName'] = null;

unset($_SESSION['userName']);


echo "<script>已登出!</script>";
header("location:views/index.php");
// echo '<meta http-equiv="refresh" content="0;">';
