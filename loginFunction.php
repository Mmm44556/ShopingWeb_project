<?php
session_start();
include("databaseConnect.inc");

$userId = $_POST['user-id'];
$password = $_POST['user-password'];

$_SESSION['userName'] = $userId;
$_SESSION['passWord'] = $passWord;
$_SESSION['uid'] = $uid;

$sql = "SELECT * FROM  `account` WHERE 
(`userName`='$userId' && `password`='$password')||(`phoneNumber`='$userId' && `password`='$password')";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);


if (!empty($row)) {
  echo "<script>alert('登入成功')</script>";
} else {
  echo "<script>alert('帳號不正確，請重新登入或註冊新帳號');
  parent.location.href='account.php'; </script>";
  unset($_SESSION['username']);
}
?>
<script type="text/javascript">
  window.location.href = 'views/index.php';
</script>