<?php
session_start();
include("databaseConnect.inc");

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$uid = $_SESSION['uid'];

if (($newPassword != $oldPassword) && ($newPassword != "") && ($newPassword == $confirmPassword)) {
  $sql = "UPDATE `account`
        SET `username` = '$username',
            `password`='$newPassword',
            `phoneNumber` = '$phone',
            `mail` = '$mail'
        WHERE `uid` = $uid;";

  $result = mysqli_query($link, $sql);
  if (mysqli_affected_rows($link) > 0) {
    // echo "資料已更新";
    echo "<script>alert('修改成功!');window.location.href = './views/index.php';</script>";
  } else {
    echo "更新失敗" . mysqli_error($link);
    echo "<script>alert('修改失敗 請確認資料後再送出!');window.location.href = './views/updatePage.php';</script>";
  }
  mysqli_close($link);
} else {
  echo "<script> alert('密碼輸入錯誤 請重新輸入!');window.location.href = './views/updatePage.php'</script>";
}
