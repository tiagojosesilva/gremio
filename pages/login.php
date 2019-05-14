<?php
session_start();
if (isset($_SESSION['id'])) {
  header('location: ../index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gremio Campus do Amor</title>
  <link rel="stylesheet" href="../css/linearicons.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/nice-select.css" />
  <link rel="stylesheet" href="../css/owl.carousel.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="../css/themify-icons.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <script src="../js/jquery.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

  <style>
  
  </style>
</head>

<body>
  <?php include '../components/header-menu.php' ?>

  <section class="container my-5" ">
    <div class="d-flex justify-content-center">
      <form class="col-lg-6" action="../php/banco/login.php" method="POST">

        <div class="form-row">
          <div class="form-group col-md-5">
            
          <div id=""></div>
            <?php if (isset($_SESSION['LOG_ERRO'])) { ?>
              <label style="color: red"><?= $_SESSION['LOG_ERRO'] ?></label>
            <?php } ?>
          </div>

        <div class="form-group col-md-12">
          <input type="text" id="login" class="form-control" name="EMAIL" placeholder="E-mail">
          <div id="alert_senha"></div>
        </div>

        <div class="form-group col-md-12">
          <input type="password" id="password" class="form-control" name="SENHA" placeholder="Senha">
        </div>

        <div>
          <input type="submit" class="btn btn-success" id="btn-login" value="entrar">
          <input type="submit" class="btn btn-warning" value="Esqueceu a senha?">
        </div>

    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
  </section>

  <?php include '../components/footer.php' ?>
  <?php
  //unset($_SESSION['erroLogin']);
  ?>

</body>

</html>