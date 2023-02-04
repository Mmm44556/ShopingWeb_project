<?php
include("dataBaseConnect.inc");
$regUserName = $_POST['register-name'];
$regPassword = $_POST['register-password'];
$regVerifyPassword = $_POST['register-verify-password'];
$regPhoneNumber = $_POST['register-phone-number'];
$regMail = $_POST['register-mail'];

$check_sql = "SELECT * FROM `account` where `userName` = '$regUserName'";
$result = mysqli_query($link, $check_sql);
$row = mysqli_fetch_row($result);

//驗證重複註冊
if (!empty($row[1]) || empty($row[2])) {
  if ($row[1] == $regUserName || $row[2] == $regPassword) {
    echo  '帳號重複，請重新註冊';
    echo "<script>window.location.href = 'index.php';</script>";
  } else {
    if (!(empty($regUserName) ||
      empty($regPhoneNumber) ||
      empty($regPassword) ||
      empty($regMail))) {

      if (!($regVerifyPassword != $regPassword)) {
        $sql = "INSERT INTO `account` (`userName`, `password`, `phoneNumber`, `mail`) 
        VALUES ('$regUserName', '$regPassword', '$regPhoneNumber', '$regMail')";
        mysqli_query($link, $sql); //執行刪除的SQL
        $sql_findID = "SELECT * FROM `account` WHERE `userName` ='" .
          $_POST['register-name'] . "'";
        $data = mysqli_query($link, $sql_findID);
        $user = mysqli_fetch_assoc($data);
        session_start();
        $_SESSION['uid'] = $user['uid'];
        $_SESSION['userName'] = $user['userName'];
        $_SESSION['passWord'] = $user['password'];
        $_SESSION['phoneNumber'] = $user['phoneNumber'];
        $_SESSION['mail'] = $user['mail'];
        echo "<script>alert('註冊成功');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
      } else {
        echo "密碼錯誤請重新輸入!!";
      }
    }
  }
}
