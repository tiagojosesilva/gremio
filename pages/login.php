<?php session_start() ?>
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

  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

</head>
<body>
  <?php include '../components/header-menu.php' ?>
  <section class="container my-5" >
      <div class="d-flex justify-content-center">
        <form class="col-lg-6" action="../php/verifLogin.php" method = "POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <?php
              if (isset($_SESSION['erroLogin'])) {
                echo $_SESSION['erroLogin'];
              }
              ?>
              <input type="text" id="login" class="form-control" name="matricula" placeholder="matricula">
            </div>
            <div class="form-group col-md-7">
              <input type="password" id="password" class="form-control" name="senha" placeholder="senha">
            </div>                 
            <input type="submit" class="btn btn-success" value="entrar">
            <input type="submit" class="btn btn-warning"  value="Esqueceu a senha?">
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
    unset($_SESSION['erroLogin']);
  ?>
</body>
</html>