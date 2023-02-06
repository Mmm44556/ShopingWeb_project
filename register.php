<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>註冊介面</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/account.css?v=<?= time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


</head>

<body>
  <div class="login-signup-pane shadow-lg p-3 mb-5 bg-body-tertiary rounded w-25 animate__animated animate__fadeIn ">
    <div class="sign-intro text-center mb-3">
      <h1>Shopping Website</h1>
    </div>

    <div class="text-center mb-3 ">
      <h4>註冊</h4>
    </div>
    <!-- 註冊表單 -->
    <form action="./registerFunction.php" method="post" class="">
      <div class="register-input form-floating mb-3 ">
        <input type="text" class="form-control " id="floatingInput" placeholder="a" name="register-name" maxlength="10"
          required>
        <label for="floatingInput" class="text-body-tertiary ">
          請輸入使用者名稱</label>
      </div>

      <div class="register-password-input form-floating  position-relative mb-3">
        <input type="password" class="password form-control" id="floatingPassword" placeholder="Password"
          name="register-password" maxlength="10">
        <!-- <input type="password" class="password form-control" id="floatingPassword" placeholder="Password" name="register-password" maxlength="10" required pattern=""> -->
        <label for="floatingPassword" class="text-body-tertiary">
          請輸入密碼(6~10位英數混合)</label>
        <i class="bi-fill bi-eye-fill" style="cursor:pointer;"></i>
      </div>

      <div class="register-verify-password form-floating  position-relative mb-3">
        <input type="password" class="password form-control mb-" id="floatingPassword" placeholder="Password"
          name="register-verify-password" maxlength="10" required>
        <label for="floatingPassword" class="text-body-tertiary">
          請再次確認密碼</label>
      </div>

      <div class="register-input form-floating mb-3">
        <input type="tel" class="form-control " id="floatingInput" placeholder="number" name="register-phone-number"
          maxlength="10" required pattern="[0-9]+">
        <label for="floatingInput" class="text-body-tertiary ">
          請輸入手機號碼</label>
      </div>

      <div class="register-input form-floating  mb-2">
        <!-- type正式完成要記得改回mail -->
        <input type="text" class="form-control " id="floatingInput" placeholder="number" name="register-mail">
        <label for="floatingInput" class="text-body-tertiary">
          請輸入信箱</label>
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
        <button type="reset" style="border:none; background: white;">
          <a class="sign-up-link link-secondary" id="">
            重置</a></button>
        <div class="vr"></div>
        <a class="sign-up-link link-secondary" href="account.php" id="">
          登入</a>
        <div class="vr"></div>
        <a class="forget-passward-link link-secondary" href="#" id="">
          忘記密碼</a>
      </div>
      <div class="d-grid col-6 mx-auto w-100">
        <button class="log-in-btn btn btn-primary mb-2" type="submit" value="submit">
          註冊</button>
      </div>
      <div class="d-grid gap-2 col-9 mx-auto">
        <a class="forget-passward-link link-secondary mx-auto " href="#" id="">
          註冊問題?</a>
      </div>

      <div class="separator-content d-grid gap-1 mb-3 col-9 mx-auto  w-100 position-relative ">
        <hr class="hr ">
      </div>

      <!-- // 第三方登入 -->
      <div class="social-signin-button d-grid gap-2 mb-1">
        <div class="google">
          <button class="w-100 " type="button"></button>
        </div>
        <div class="facebook">
          <button class="w-100" type="button"></button>
        </div>




    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script src="./jquery/component.js"></script>
</body>

</html>