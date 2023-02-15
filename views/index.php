<?php
include('../databaseConnect.inc');
session_start();
$userId = $_SESSION['userName']; //調出儲存起來的username
if (!isset($userId)) { //
  echo "<script> alert('尚未登入,即將返回登入頁面'); top.location = 'account.php';</script>";
}

$sql_query = "SELECT * FROM `account` WHERE `userName` = '$userId'";
$result = mysqli_query($link, $sql_query);

?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>會員系統</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">會員管理系統</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">編輯<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">登出</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ###
          </a>
        </li>
      </ul>
    </div>
  </nav>


  Hello,<?php
        echo $userId;
        ?>
  <!-- 編輯modal -->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    編輯
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">帳號編輯</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../update.php" method="post">
            a: <input type="text">
            b: <input type="text">
            c: <input type="text">

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">確認</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        </div>
      </div>
    </div>
  </div>
  <!-- --------- -->
  <button class="btn btn-danger">
    <a href="../logout.php">登出</a>
  </button>



  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ---------- -->

  <!-- jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <!-- ---------- -->

</body>

</html>