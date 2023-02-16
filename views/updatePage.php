<?php

include('../databaseConnect.inc');
session_start();
$userId = $_SESSION['userName']; //調出儲存起來的username

$sql_query = "SELECT * FROM `account` WHERE `userName` = '$userId'";
$result = mysqli_query($link, $sql_query);
$row_result = mysqli_fetch_assoc($result);
$uid = $row_result['uid'];
$username = $row_result['userName'];
$password = $row_result['password'];
$phone = $row_result['phoneNumber'];
$mail = $row_result['mail'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員管理</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="../public/account.css?v=<?= time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>


  <div class="login-signup-pane shadow-lg p-3 mb-5 bg-body-tertiary rounded w-25 animate__animated animate__fadeIn">
    <div class="sign-intro text-center mb-3 ">
      <h1>Shopping Website</h1>
    </div>
    <div class="text-center mb-3 ">
      <h4 class="hi">編輯</h4>
    </div>
    <form action="../update.php" method="post" class="">

      <div class="account-input form-floating mb-3 ">
        <input type="text" class="form-control " id="floatingInput" placeholder="name@example.com" name="username" required maxlength="50" value="<?php echo $username ?>">
        <label for="floatingInput" class="text-body-tertiary ">
          <i class="bi bi-person-fill"></i>
          使用者名稱</label>
      </div>

      <div class="oldPassword-input form-floating mb-3 position-relative">
        <input type="password" class="oldPassword form-control" id="floatingOldPassword" placeholder="oldPassword" maxlength="10" name="oldPassword" required>
        <label for="floatingOldPassword" class="text-body-tertiary">
          <i class="bi bi-key-fill"></i>
          舊密碼</label>
        <i class="bi-fill bi-eye-fill" style="cursor:pointer;"></i>
      </div>

      <div class="newPassword-input form-floating mb-3 position-relative">
        <input type="password" class="newPassword form-control" id="floatingNewPassword" placeholder="newPassword" maxlength="10" name="newPassword" required>
        <label for="floatingNewPassword" class="text-body-tertiary">
          <i class="bi bi-key-fill"></i>
          新密碼</label>
        <i class="bi-fill bi-eye-fill" style="cursor:pointer;"></i>
      </div>

      <div class="confirmPassword-input form-floating mb-3 position-relative">
        <input type="password" class="password form-control" id="floatingPassword" placeholder="Password" maxlength="10" name="confirmPassword" required>
        <label for="floatingConfirmPassword" class="text-body-tertiary">
          <i class="bi bi-key-fill"></i>
          確認密碼</label>
        <i class="bi-fill bi-eye-fill" style="cursor:pointer;"></i>
      </div>

      <div class="phone-input form-floating mb-3 position-relative">
        <input type="phone" class="phone form-control" id="floatingPhone" placeholder="phone" maxlength="10" name="phone" required value="<?php echo $phone ?>">
        <label for="floatingPhone" class="text-body-tertiary">
          電話
        </label>
      </div>

      <div class="mail-input form-floating mb-3 position-relative">
        <input type="mail" class="mail form-control" id="floatingPassword" placeholder="mail" name="mail" required value="<?php echo $mail ?>">
        <label for="floatingMail" class="text-body-tertiary">
          信箱
        </label>
      </div>

      <div class="d-grid col-6 mx-auto w-100 mb-3">
        <button class="log-in-btn btn btn-primary" type="submit" value="submit">
          登入</button>
      </div>

      <div class="d-grid col-6 mx-auto w-100 mb-3">
        <button class="log-in-btn btn btn-primary" type="submit" value="submit">
          取消修改</button>
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script src="./jquery/component.js"></script>

</body>

</html>