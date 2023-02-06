<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/account.css?v=<?= time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>


  <div class="login-signup-pane shadow-lg p-3 mb-5 bg-body-tertiary rounded w-25 animate__animated animate__fadeIn">
    <div class="sign-intro text-center mb-3 ">
      <h1>Shopping Website</h1>
    </div>
    <div class="text-center mb-3 ">
      <h4 class="hi">登入</h4>
    </div>
    <form action="loginFunction.php" method="post" class="">

      <div class="account-input form-floating mb-3 ">
        <input type="text" class="form-control " id="floatingInput" placeholder="name@example.com" name="user-id"
          required maxlength="50">
        <label for="floatingInput" class="text-body-tertiary ">
          <i class="bi bi-person-fill"></i>
          Phone Number / 使用者名稱</label>
      </div>

      <div class="password-input form-floating mb-1 position-relative">
        <input type="password" class="password form-control" id="floatingPassword" placeholder="Password" maxlength="10"
          name="user-password" required>
        <label for="floatingPassword" class="text-body-tertiary">
          <i class="bi bi-key-fill"></i>
          Password</label>
        <i class="bi-fill bi-eye-fill" style="cursor:pointer;"></i>
      </div>

      <div class="d-inline-flex justify-content-md-between w-100">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label link-secondary" for="flexSwitchCheckChecked">記住我</label>
        </div>

        <div class="d-grid gap-2 d-md-flex mb-3 ">
          <a class="sign-up-link link-secondary" href="register.php" id="">
            註冊</a>
          <div class="vr"></div>
          <a class="forget-passward-link link-secondary" href="#" id="">
            忘記密碼</a>
        </div>
      </div>

      <div class="d-grid col-6 mx-auto w-100 mb-3">
        <button class="log-in-btn btn btn-primary" type="submit" value="submit">
          登入</button>
      </div>
      <div class="d-grid gap-2 col-9 mx-auto">
        <a class="forget-passward-link link-secondary mx-auto" href="#" id="">
          登入問題?</a>
      </div>

      <div class="separator-content d-grid gap-1 mb-3 col-9 mx-auto  w-100 position-relative ">
        <hr class="hr ">
      </div>

      <div class="social-signin-button d-grid gap-2 mb-1">
        <div class="google">
          <button class="w-100 " type="button"></button>
        </div>
        <div class="facebook">
          <button class="w-100" type="button"></button>
        </div>

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