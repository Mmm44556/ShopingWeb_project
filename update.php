<?php
session_start();
include("databaseConnect.inc");


if (isset($_POST["action"]) && $_POST["action"] == 'update') {
  $username = $_POST['username'];
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];
  $confirmPassword = $_POST['confirmPassword'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];


  if ($newPassword == $confirmPassword && $newPassword != "") {
    $sql = "UPDATE `account` SET
    `userName` = '$username',
    `password` = '$newPassword',
    WHERE `userName` = '$username'";
    echo $_SESSION['password'];
    // echo $sql;
    $result = mysqli_query($link, $sql);
    echo "修改成功!!";
    echo "<script> alert('修改成功');parent.location.href='index.php';<script>";
  } else {
    echo "密碼確認錯誤";
  }
}
